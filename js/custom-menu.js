/**
 * @file
 * Bootstrap dropdown on main menu.
 */

(function ($, Drupal) {
  Drupal.behaviors.cdMenu = {
    attach: function (context, settings) {

      // Media query event handler.
      if (matchMedia) {
        const mq = window.matchMedia("(max-width: 1023px)");
        mq.addListener(WidthChange);
        WidthChange(mq);
      }

      function WidthChange(mq) {
        if (mq.matches) {
          // Toggle mobile menu.
          $('.cd-site-header__nav-toggle', context).once('cdMenu').on('click', function() {
            $('.cd-site-header__nav-holder').toggleClass('open');
          });

          // Close mobile menu when another dropdown is opened.
          if ($('.cd-ocha, .cd-global-header__language-switcher, .cd-search').hasClass('open') {
            if ($('.cd-nav:visible').length > 0 ) {
              $('.cd-site-header__nav-holder').removeClass('open');
            }
          }
        } else {
          $('.cd-site-header__nav-holder').removeClass('open');
        }
      }

    }
  };
}(jQuery, Drupal));
