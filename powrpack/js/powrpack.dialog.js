(function ($) {
    'use strict';
    Drupal.behaviors.powrpack_dialog = {
      attach: function (context) {
        $( "#powrpack-dialog" ).dialog();
        $( "#powrpack-dialog" ).dialog("option", "width", 500);
      }
    };
  })(jQuery);
