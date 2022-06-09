var mybutton = document.getElementById("myBtn");

// window.onscroll = function () {
//   scrollFunction();
// };

// function scrollFunction() {
if (document.body.scrollTop > 50 || document.body.scrollTop < 50) {
  mybutton.style.display = "block";
  $(".navbar_main_div").addClass(".sticky_nav");
  $(".navbar_butn").addClass(".ticky_butn");
} else {
  // mybutton.style.display = "none";
  $(".navbar_main_div").removeClass(".sticky_nav");
  $(".navbar_butn").removeClass(".sticky_butn");
}
// }

// function topFunction() {
//   document.body.scrollTop = 0;
//   document.documentElement.scrollTop = 0;
// }
