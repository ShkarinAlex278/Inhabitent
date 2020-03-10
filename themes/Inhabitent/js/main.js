(function($) {
  console.log('main 1 working');
  console.log(window);
  $navHeight = 460;
  $myLogo = $('.logo');
  $logowhite =
    window.location +
    'wp-content/themes/Inhabitent/assets/images/logos/inhabitent-logo-tent-white.svg';
  $logoGreen =
    window.location.pathname +
    'wp-content/themes/Inhabitent/assets/images/logos/inhabitent-logo-tent.svg';
  console.log($navHeight);
  console.log($logoGreen);
  $(window).on('scroll', function() {
    if (window.pageYOffset > $navHeight) {
      $('nav').addClass('main-green');
      $('.logo').attr('src', $logoGreen);
      $('nav').removeClass('main-menu');
    } else {
      $('nav').removeClass('main-green');
      $('nav').addClass('main-menu');
      $('.logo').attr('src', $logowhite);
    }
  });
})(jQuery);
