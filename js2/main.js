        //Select element function
const select = function (element) {
    return document.querySelector(element);
};

let menutoggle = select('.menu-toggle');
let body = select('body');
let load = select('#loading');
let everything = select('#everything');

        //adding click event to menutoggle
menutoggle.addEventListener('click', function () {
    body.classList.toggle('open');
});

        //12s timer for the loading to disapear 

function loaded() {
     load.classList.toggle('nosee');
     everything.classList.toggle('see');
};



        //12s timer for everything to apear  
    
      AOS.init();   //animate on scroll function call.
 