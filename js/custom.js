jQuery(document).ready(function(e) {
    e(".slides").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true
  });


  $("#nav-icon").click(function(e) {
      $('#nav-icon').toggleClass('active');
      $('body').toggleClass('fix');
      $('.menu-top-nav-container').css({left: '-100%'});
      if ( $( '#nav-icon' ).hasClass( "active" ) ) {
        $( '.menu-top-nav-container' ).css({left: 0});
      }
      e.preventDefault();
   });


});
