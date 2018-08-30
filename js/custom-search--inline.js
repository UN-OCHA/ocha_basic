/**
 * @file
 * Bootstrap dropdown on search and inline search.
 */

(function ($, Drupal) {
  Drupal.behaviors.cdSearchInline = {
    attach: function (context, settings) {
      $(document).ready(function(){

        // Apply focus to input when dropdown is shown.
        $('.cd-search--inline').on('shown.bs.dropdown', function () {
          $(this).find('#edit-search-api-views-fulltext').focus();
        });

        $('.cd-search--inline').on('hidden.bs.dropdown', function () {
          $(this).find('#edit-search-api-views-fulltext').blur();
        });

        // Add class on submit button when input has focus.
        $('.cd-search--inline .cd-search--inline__input').on('focus', function(e) {
          $(this).parents().find('.cd-search--inline__submit').addClass('js-has-focus');
        });

        $('.cd-search--inline .cd-search--inline__input').on('blur', function(e) {
          $(this).parents().find('.cd-search--inline__submit').removeClass('js-has-focus');
        });

        $('.cd-search--inline .cd-search--inline__input').on('focus', function(e){
          $(this).parents().addClass('js-has-focus');
        });

        $('.cd-search--inline .cd-search--inline__input').on('blur', function(e){
          $(this).parents().removeClass('js-has-focus');
        });

      });
    }
  };
}(jQuery, Drupal));
