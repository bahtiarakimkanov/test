$(function(){

    var $hamburger = $(".hamburger");
    $hamburger.on("click", function(e) {
      $hamburger.toggleClass("is-active");
      $(`.header__nav`).slideToggle(500)
    });




})