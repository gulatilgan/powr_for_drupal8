(function ($) {
    'use strict';
    Drupal.behaviors.powrhitcounter_dialog = {
      attach: function (context) {
        $( "#powrhitcounter-dialog" ).dialog();
        $( "#powrhitcounter-dialog" ).dialog("option", "width", 500);
      }
    };
  })(jQuery);
