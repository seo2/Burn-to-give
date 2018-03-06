

// ===== Scroll to Top ====
              $(window).scroll(function() {
                  if ($(this).scrollTop() >= 400) {        // If page is scrolled more than 50px
                      $('#return-to-top').fadeIn(500);    // Fade in the arrow
                  } else {
                      $('#return-to-top').fadeOut(1000);   // Else fade out the arrow
                  }
              });

              $('#return-to-top').click(function() {      // When arrow is clicked
                  $('body,html').animate({
                      scrollTop : 0                       // Scroll to top of body
                  }, 500);
              });


$('.slider-iconos').owlCarousel({
    loop:true,
   // stagePadding: 50,
   autoWidth:true,
    lazyLoad: true,
    margin:10,
    nav:true,
    center: false,
    dots: false,
   // autoWidth: true,
    autoplay: true,
   // responsiveClass:true,
   // responsive: true,
   responsive:{
        0:{
            items:1,
            margin: 5
        },
        430:{
            items:2
        },
        768:{
            items:5
        }
    }
})

function openNav() {
    document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
    document.getElementById("myNav").style.width = "0%";
}





