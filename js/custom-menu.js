/**
 * @file
 * Bootstrap dropdown on main menu.
 */

(function ($, Drupal) {
  Drupal.behaviors.cdMenu = {
    attach: function (context, settings) {
      $('.cd-dropdown .expanded a').on('click', function (e) {
        $(this).parent().toggleClass('open');
        e.stopPropagation();
        e.preventDefault();
      });
    }
  };
}(jQuery, Drupal));
