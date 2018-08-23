/**
 * @file
 * Bootstrap dropdown on search.
 */

(function ($, Drupal) {
  Drupal.behaviors.cdSearch = {
    attach: function (context, settings) {

      // Apply focus to input when dropdown is shown.
      $('.cd-search').on('shown.bs.dropdown', function () {
        $(this).find('#cd-search').focus();
      });

      $('.cd-search').on('hidden.bs.dropdown', function () {
        $(this).find('#cd-search').blur();
      });

      $('.cd-search__input').on('focus', function (e) {
        $(this).parents().find('.cd-search__submit').toggleClass('js-has-focus');
      });

      $('.cd-search__input').on('blur', function (e) {
        $(this).parents().find('.cd-search__submit').toggleClass('js-has-focus');
      });
    }
  };
}(jQuery, Drupal));
