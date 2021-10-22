

function goToLocation(id){ 
    var locCode = id.nextElementSibling.innerHTML;
   locCode = String(locCode);
    var popupBox = document.getElementById(locCode)
    popupBox.style.display = "block";
    
    window.onclick = function(event) {
    if (event.target == popupBox) {
        popupBox.style.display = "none";}
}
                         }
function gpsClose(id){
    let popupBox = document.getElementById(id);
    popupBox.style.display = "none";
}
