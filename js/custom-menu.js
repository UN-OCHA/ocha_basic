/**
 * @file
 * Bootstrap dropdown on main menu.
 */

(function ($, Drupal) {
  Drupal.behaviors.cdMenu = {
    attach: function (context, settings) {

      // $('.cd-nav .expanded > a').on('click', function (e) {
      //
      //   var menuItem = $( e.currentTarget );
      //   if (menuItem.attr( 'aria-expanded') === 'true') {
      //     $(this).attr( 'aria-expanded', 'false');
      //   } else {
      //     $(this).attr( 'aria-expanded', 'true');
      //   }
      //   e.stopPropagation();
      //   e.preventDefault();
      // });
      //
      // // Prevent multiple dropdowns being open at once.
      // // First level.
      // $('.cd-nav > .menu > .expanded > a').on('click', function (e) {
      //   $('.cd-nav > .menu > .expanded > a').not(this).parent().removeClass('open');
      //   $(this).parent().toggleClass('open');
      // });
      // // Second level.
      // $('.cd-nav .menu .menu > .expanded > a').on('click', function (e) {
      //   $(this).parent().toggleClass('open');
      // });
      //
      // $('.dropdown').not(this).parent().removeClass('open');

    }
  };
}(jQuery, Drupal));
