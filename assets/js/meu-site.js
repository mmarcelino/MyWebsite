/* --------------------------------------------------------
     404 'Go Back' button
-------------------------------------------------------- */

function goBack() {
  window.history.back();
}

/* --------------------------------------------------------
     Play video on hover
-------------------------------------------------------- */

jQuery('.video-background').mouseover(function(){
      $('video', this).get(0).play();
  }).mouseout(function(){
      $('video', this).get(0).pause();
});


/* --------------------------------------------------------
     Scroll to top button
-------------------------------------------------------- */

// jQuery(document).ready(function($){
//   var offset = 400;
//   var speed = 250;
//   var duration = 500;

//   $(window).scroll(function(){
//     if ($(this).scrollTop() < offset) {
//               $('.topbutton') .fadeOut(duration);
//     } else {
//               $('.topbutton') .fadeIn(duration);
//     }
//   });

//   $('.topbutton').on('click', function(){
//     $('html, body').animate({scrollTop:0}, speed);
//     return false;
//   });

// });

/* --------------------------------------------------------
     Underline active desktop menu links
-------------------------------------------------------- */

$(function($) {
  let url = window.location.href;
  $('.navbar > div > span > a').each(function() {
    if (this.href === url) {
      $(this).closest('a').addClass('active');
    }
  });
});

/* --------------------------------------------------------
     Underline active mobile menu links
-------------------------------------------------------- */

// $(function($) {
//   let url = window.location.href;
//   $('.overlay-content a').each(function() {
//     if (this.href === url) {
//       $(this).closest('a').addClass('active-mobile');
//     }
//   });
// });

/* --------------------------------------------------------
     Mobile nav - Width
-------------------------------------------------------- */

function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
