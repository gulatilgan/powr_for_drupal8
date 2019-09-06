(function ($) {
    'use strict';
    Drupal.behaviors.powryahoolocal_dialog = {
      attach: function (context) {
        $( "#powryahoolocal-dialog" ).dialog();
        $( "#powryahoolocal-dialog" ).dialog("option", "width", 500);
      }
    };
  })(jQuery);
