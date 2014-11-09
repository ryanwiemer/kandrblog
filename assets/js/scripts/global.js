//Respsonsive Nav
var nav = responsiveNav(".site-header__nav", { // Selector
  animate: true, // Boolean: Use CSS3 transitions, true or false
  transition: 284, // Integer: Speed of the transition, in milliseconds
  label: "&#xf0c9;", // String: Label for the navigation toggle
  insert: "before", // String: Insert the toggle before or after the navigation
  customToggle: "", // Selector: Specify the ID of a custom toggle
  closeOnNavClick: false, // Boolean: Close the navigation when one of the links are clicked
  openPos: "relative", // String: Position of the opened nav, relative or static
  navClass: "site-header__nav", // String: Default CSS class. If changed, you need to edit the CSS too!
  navActiveClass: "js-nav-active", // String: Class that is added to  element when nav is active
  jsClass: "js", // String: 'JS enabled' class which is added to  element
  init: function(){}, // Function: Init callback
  open: function(){}, // Function: Open callback
  close: function(){} // Function: Close callback
});

//Loading classes
$(window).load(function() {
  $("body").removeClass("loading");
  $("body").addClass("loaded");
});

$(document) .ready(function() {
  //Check if current page and return false on links
  $('.active a').click(function() {
    return false;
  });
  $('.post__active .post__title a').click(function() {
    return false;
  });
  //Search JS
  $(".site-header__nav ul li:last-child").click(
    function() {
    $(".search-form").addClass("search-form--fullscreen");
    $(".search-form__field").focus();
  });
  $(".search-form__close").click(
    function(){
      $(".search-form").removeClass("search-form--fullscreen");
  });
});
