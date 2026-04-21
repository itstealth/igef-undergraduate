//rank-slider
$("#rank-slider").owlCarousel({
  //autoPlay: 5000, //Set AutoPlay to 5 seconds
  autoplay: false,
  //smartSpeed: 2000, // Default is 250
  items: 5, //Set Testimonial items
  loop: false,
  margin: 15,
  singleItem: true,
  touchDrag: true,
  mouseDrag: true,
  pagination: false,
  nav: false,
  dots: true,
  navText: ["<i class='fal fa-angle-left'></i>", "<i class='fal fa-angle-right'></i>"],
  responsiveClass:true,
  responsive:{
    0:{
        items:2,
        autoplay: true,
    },
    480:{
        items:2,
        autoplay: true,
    },
    568:{
        items:2,
        autoplay: true,
    },
    600:{
        items:3,
        autoplay: true,
    },
    667:{
        items:3,
        autoplay: true,
    },
    1000:{
        items:5
    }
  }   
  
}); 

