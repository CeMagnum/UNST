// var mybutton = document.getElementById("myBtn");

// window.onscroll = function () {
//   scrollFunction();
// };

// function scrollFunction() {
//   if (document.body.scrollTop > 50 || document.body.scrollTop < 50) {
//     mybutton.style.display = "block";
//     $(".navbar_main_div").addClass(".sticky_nav");
//     $(".navbar_butn").addClass(".ticky_butn");
//   } else {
//     // mybutton.style.display = "none";
//     $(".navbar_main_div").removeClass(".sticky_nav");
//     $(".navbar_butn").removeClass(".sticky_butn");
//   }
// }
// window.onscroll = function () {
//   scrollFunction();
// };

$(document).ready(function () {
  $(window).scroll(function () {
    // sticky navbar on scroll script
    if (this.scrollY > 20) {
      $(".navbar_main_div").removeClass("sticky_nav");
      $(".navbar_butn").removeClass("sticky_butn");
    } else {
      $(".navbar_main_div").addClass("sticky_nav");
      $(".navbar_butn").addClass("sticky_butn");
    }
  });
});
