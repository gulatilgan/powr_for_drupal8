(function ($) {
    'use strict';
    Drupal.behaviors.powrecommerce_dialog = {
      attach: function (context) {
        $( "#powrecommerce-dialog" ).dialog();
        $( "#powrecommerce-dialog" ).dialog("option", "width", 500);
      }
    };
  })(jQuery);
