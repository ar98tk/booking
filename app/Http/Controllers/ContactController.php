<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return string
     */
    public function index()
    {
        $contacts = Contact::all();
        return view('backend.contacts.index',compact('contacts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'title' => 'required|min:10|max:50',
            'mobile' => 'nullable|numeric',
            'message' => 'required|min:10|max:1000'
        ]);
        if ($validation->fails()) {
            return back()->withErrors($validation)->withInput();
        }

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['title'] = $request->title;
        $data['phone'] = $request->phone;
        $data['message'] = $request->message;
        $data['status'] = 1;

        Contact::create($data);
        toastr()->success('Message Sent Successfully.');
        return redirect()->route('fronthome');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return string
     */
    public function show($id)
    {
        $contact = Contact::where('id',$id)->first();
        if ($contact && $contact->status == 1) {
            $contact->status = 0;
            $contact->save();
        }
        return view('backend.contacts.show', compact('contact'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return string
     */
    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();
        toastr()->success('Message Deleted Successfully');
        return redirect()->route('contacts.index');
    }
}
