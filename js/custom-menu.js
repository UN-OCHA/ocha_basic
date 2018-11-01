/**
 * @file
 * Bootstrap dropdown on main menu.
 */

(function ($, Drupal) {
  Drupal.behaviors.cdMenu = {
    attach: function (context, settings) {

      // Media query event handler.
      if (matchMedia) {
        const mq = window.matchMedia("(min-width: 1024px)");
        mq.addListener(WidthChange);
        WidthChange(mq);
      }

      function WidthChange(mq) {
        if (mq.matches) {

          $('.cd-nav').show();

        } else {

          // Toggle mobile menu.
          $('.cd-site-header__nav-toggle').on('click', function (e) {
            $('.cd-nav').toggle();
          });

          // When lang switcher or ocha menu is open, close mobile menu.
          $('.cd-language-switcher, .cd-ocha').on('show.bs.dropdown', function () {
            $('.cd-nav').hide();
          });

        }
      }

    }
  };
}(jQuery, Drupal));
