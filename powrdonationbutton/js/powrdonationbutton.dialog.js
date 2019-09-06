(function ($) {
    'use strict';
    Drupal.behaviors.powrdonationbutton_dialog = {
      attach: function (context) {
        $( "#powrdonationbutton-dialog" ).dialog();
        $( "#powrdonationbutton-dialog" ).dialog("option", "width", 500);
      }
    };
  })(jQuery);
