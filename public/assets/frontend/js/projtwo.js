//--------counter input -------
let addBtn = document.querySelector('#add');
let subBtn = document.querySelector('#sub');
let qty = document.querySelector('#qtyBox');

addBtn.addEventListener('click',()=>{
     qty.value = parseInt(qty.value) + 1;
});

subBtn.addEventListener('click',()=>{
     if (qty.value <= 0) {
          qty.value = 0;
     }
     else{
          qty.value = parseInt(qty.value) - 1;
     }
});
     //--------counter input -------
     let addBtn1 = document.querySelector('#add1');
     let subBtn1 = document.querySelector('#sub1');
     let qty1 = document.querySelector('#qtyBox1');
     
     addBtn1.addEventListener('click',()=>{
          qty1.value = parseInt(qty1.value) + 1;
     });

     subBtn1.addEventListener('click',()=>{
          if (qty1.value <= 0) {
               qty1.value = 0;
          }
          else{
               qty1.value = parseInt(qty1.value) - 1;
          }
     });

               //--------counter input -------
               let addBtn2 = document.querySelector('#add2');
               let subBtn2 = document.querySelector('#sub2');
               let qty2 = document.querySelector('#qtyBox2');
               
               addBtn2.addEventListener('click',()=>{
                    qty2.value = parseInt(qty2.value) + 1;
               });
          
               subBtn2.addEventListener('click',()=>{
                    if (qty2.value <= 0) {
                         qty2.value = 0;
                    }
                    else{
                         qty2.value = parseInt(qty2.value) - 1;
                    }
               });

               // ------adultsBtn ------- 


