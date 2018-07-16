(function ($) {
  Drupal.behaviors.exampleModule = {
    attach: function (context, settings) {

      $('.cd-dropdown .expanded a').on('click', function(e){
        $(this).parent().toggleClass('open');
        e.stopPropagation();
        e.preventDefault();
      });

    }
  };
}(jQuery));
