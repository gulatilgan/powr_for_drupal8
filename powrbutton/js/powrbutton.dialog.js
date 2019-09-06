(function ($) {
    'use strict';
    Drupal.behaviors.powrbutton_dialog = {
      attach: function (context) {
        $( "#powrbutton-dialog" ).dialog();
        $( "#powrbutton-dialog" ).dialog("option", "width", 500);
      }
    };
  })(jQuery);
