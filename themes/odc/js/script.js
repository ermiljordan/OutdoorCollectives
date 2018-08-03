(function( $ ) {
  var homeClass = $("body").hasClass("home");
  console.log('hello');
  if(homeClass) {
    $("#masthead").addClass("reverse-header");
    $(window).scroll(function() {
      var scroll = $(window).scrollTop();
      var height = $(window).height();
      if(scroll >= height & (homeClass)) {
        $("#masthead").removeClass("reverse-header");
      } else {
        $("#masthead").addClass("reverse-header")
      }
    })
  }
})( jQuery );