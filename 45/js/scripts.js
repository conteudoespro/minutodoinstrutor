$(document).ready(function(){
    $('.owl-carousel').owlCarousel({
      loop:true,
      margin:50,
      nav:true,
      responsive:{
          0:{
              items:1
          },
          1100:{
              items:2
          },
          1600:{
              items:3
          }
      }
  })
});