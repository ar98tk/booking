$(function ( ) {
     'use strict'
     // adjust slider height .
     var winH = $(window).height(),
          upperH = $('.navbar').innerHeight();
          $('#home , .slide-item').height(winH - upperH); 
})



// booking page start
     var myAirportIn = document.getElementById('airportIn'),
          myAirportOut = document.getElementById('airportOut'),
          myInsideIn = document.getElementById('airportInsideIn'),
          myInsideOut = document.getElementById('airportInsideOut'),
          myAirportListIn = document.getElementById('airportListIn'),
          myAirportListOut = document.getElementById('airportListOut'),
          myShowIn = document.getElementById('showIn'),
          myTimeIn = document.getElementById('timeIn'),
          mypickerIn = document.querySelector('.picker'),
          myTimeOut = document.getElementById('timeOut'),
          myEconamy = document.getElementById('Economy'),
          myEconamyBtn = document.getElementById('EconomyInput'),
          myShowOut = document.getElementById('showOut'),
          mySearch = document.getElementById('search'),
          myPlanes = document.getElementById('planes'),
          myContainerHidden = document.getElementById('overHidden'),
          myCheckForm = document.getElementById('checkForm'),
          myloadingMain = document.getElementById('loadingMain');

     // start onload --------
     window.onload = function(){
          myloadingMain.style.display = "none";
     }
     mySearch.addEventListener('click' , function() {
          $(function () {

               "use strict";
          
               /* Preloader
               -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */
     
          
          //---
          setTimeout(function () {
               var myLoading = document.getElementById('loading');
               myLoading.style.display = "none";
          }, 8000);

     })
     }) 
          
    
     
     // end onload --------
// start input airport in---------
     myAirportIn.onclick = function() {
          myShowIn.style.display = "block";
          myShowOut.style.display = "none";
          myShowIn.style.opacity = "1";
          myShowIn.style.transition = "all 0.4s";
          myShowCounter.style.display = "none";

     }
     myInsideIn.onclick = function() {
          myShowIn.style.display = "none";
     }

     for( var i = 0 ; i < myAirportListIn.children.length ; i++) {
          myAirportListIn.children[i].onclick = function() { 
               myInsideIn.value = this.innerHTML;
               myAirportIn.value = this.innerHTML;
               myShowIn.style.display = "none";
          }
     }
     
     //end input airport in---------
     // start input airport out---------
     myAirportOut.onclick = function() {
          myShowOut.style.display = "block";
          myShowIn.style.display = "none";
          myShowOut.style.opacity = "1";
          myShowOut.style.transition = "all 0.4s";
          myShowCounter.style.display = "none";

     }
// ------------------
     myInsideOut.onclick = function() {
          myShowOut.style.display = "none";
     }
//-------------------
for( var i = 0 ; i < myAirportListOut.children.length ; i++) {
     myAirportListOut.children[i].onclick = function() { 
          myInsideOut.value = this.innerHTML;
          myAirportOut.value = this.innerHTML;
          myShowOut.style.display = "none";
     }
}

      // end input airport out---------

     myAirportIn.addEventListener('click' , function() {
          window.onscroll = function () {
               if(document.documentElement.scrollTop < 100) {
                    myShowIn.style.top = "-180px";
               }
               else {
                    myShowIn.style.top = "40px";
               }
          } 
          
     })
     myAirportOut.addEventListener('click' , function() {
          window.onscroll = function () {
               if(document.documentElement.scrollTop < 100) {
                    myShowOut.style.top = "-180px";
               }
               else {
                    myShowOut.style.top = "40px";
               }
          } 
          
     })
     //-----------------myTime in------

     myTimeOut.onclick = function () {
          myShowIn.style.display = "none";
          myShowOut.style.display = "none";
          myShowCounter.style.display = "none";
          myEconamy.style.display = "none";


     }
     myTimeIn.onclick = function () {
          myShowIn.style.display = "none";
          myShowOut.style.display = "none";
          myShowCounter.style.display = "none";
          myEconamy.style.display = "none";


     }

          
     



                    /* start search btn */
                    /* mySearch.onclick = function() {
                         myCheckForm.classList.add('trans');
                         myContainerHidden.style.overflow = "hidden";
                    }
                    */
                    /* end search btn */

     //booking page end
     
          