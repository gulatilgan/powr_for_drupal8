(function ($) {
    'use strict';
    Drupal.behaviors.powrrecommendedproducts_dialog = {
      attach: function (context) {
        $( "#powrrecommendedproducts-dialog" ).dialog();
        $( "#powrrecommendedproducts-dialog" ).dialog("option", "width", 500);
      }
    };
  })(jQuery);
