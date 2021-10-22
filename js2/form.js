let allForm = select('.all-form');
let readyBtn = select('.ready-btn');
let verify = select('.verify');
let vIDspot = select('#vID');
let gpsValidation = select('.gps-validation');
let textLocation = select('.form-text-box');
let myTextArea = select('.form-text-area');
let fullNameError = select('.fullNameError');
let telNumError = select('.telNumError');
let locationError = select('.locationError');
var readyV = 0;

function showForm(){
    if (readyV == 0){
    allForm.style.display="block";
    allForm.style.bottom="0vh";
      readyBtn.innerHTML='<p>pick again</p><i class="fas fa-chevron-up">';  
    readyV=1;}
    else {
          allForm.style.display="none";
         allForm.style.bottom="150vh";
        readyBtn.innerHTML='<p>ready to order</p><i class="fas fa-hands">';
    readyV=0;    
    }
       emptyOrder.innerHTML = "";
    console.log("im ready as fuck too");

}

function validateForm(){
    console.log("fun called");
return validateForm2();
}

function validateForm2(){
    console.log("fun2 called");debugger;
    
    let nameV = select('#fullName');
    let telV = select('#telNumber');
    let locV = select('#locationText');
    var result = true;
      
    if (nameV.checkValidity()==false) {
        fullNameError.innerHTML= nameV.validationMessage;
        result=false;
    }
    else {
        fullNameError.innerHTML="";
    }
    if (telV.checkValidity()==false) {
        telNumError.innerHTML=telV.validationMessage;;
        result= false;
    }
    else {
        telNumError.innerHTML="";
    }
   if (locV.checkValidity()==false) {
        locationError.innerHTML=locV.validationMessage;;
        result= false;
    }
    else {
        locationError.innerHTML="";
    }
   if (result!=false) {
        vIDspot.innerHTML=" "+ randomID() +" ";
        verify.style.display="block";
    }
    
    return result;
}


function orderDone(){
  console.log("all done");
}



function getLocation() {
    
    if (navigator.geolocation) {
 navigator.geolocation.getCurrentPosition(showPosition, showError);
       
    } else { 
        gpsValidation.innerHTML = "Geolocation is not supported by this browser.<br>Please fill out the next form.";
         textLocation.style.display="block";
    }
}

function showPosition(position) {
     textLocation.style.display="block";
    myTextArea.innerHTML = "Latitude: " + position.coords.latitude + 
    "<br>Longitude: " + position.coords.longitude;
}

function showError(error) {
    switch(error.code) {
        case error.PERMISSION_DENIED:
            gpsValidation.innerHTML = "User denied the request for Geolocation.<br>Please fill out the next form.";
            break;
        case error.POSITION_UNAVAILABLE:
            gpsValidation.innerHTML = "Location information is unavailable.<br>Please fill out the next form.";
            break;
        case error.TIMEOUT:
            gpsValidation.innerHTML = "The request to get user location timed out.<br>Please fill out the next form.";
            break;
        case error.UNKNOWN_ERROR:
            gpsValidation.innerHTML = "An unknown error occurred.<br>Please fill out the next form.";
            break;
    }
     textLocation.style.display="block";
}



 function randomID() {
    let n = document.forms["userForm"]["fullName"].value;
    n = n.slice(0,2);
            var x = new Date();
            var b = Number(x);
            var c = b.toString();
            var d = c.slice(-6);
     const randNum= n+d;
           return randNum ;
     console.log(randNum);
        }