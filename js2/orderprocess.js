
    const responsive = {
    0: {
        items: 1
    },
    320: {
        items: 1
    },
    560: {
        items: 2
    },
    960: {
        items: 3
    }
}


$(document).ready(function () {

    

    // owl-crousel for blog
    $('.owl-carousel').owlCarousel({
        loop:false,
        autoplay:false,
        autoplayTimeout:35000,
        dots:true,
        nav:false,
        navText: [$('.owl-navigation .owl-nav-prev'), $('.owl-navigation .owl-nav-next')],
        responsive: responsive
   });
});


