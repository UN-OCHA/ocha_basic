/**
 * @file
 * Bootstrap dropdown on search.
 */

(function ($, Drupal) {
  Drupal.behaviors.cdSearch = {
    attach: function (context, settings) {
      $('.cd-search__input').on('focus', function (e) {
        $(this).parents().find('.cd-search__submit').toggleClass('js-has-focus');
      });

      $('.cd-search__input').on('blur', function (e) {
        $(this).parents().find('.cd-search__submit').toggleClass('js-has-focus');
      });
    }
  };
}(jQuery, Drupal));
