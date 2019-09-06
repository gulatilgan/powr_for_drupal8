(function ($) {
    'use strict';
    Drupal.behaviors.powrnotificationbar_dialog = {
      attach: function (context) {
        $( "#powrnotificationbar-dialog" ).dialog();
        $( "#powrnotificationbar-dialog" ).dialog("option", "width", 500);
      }
    };
  })(jQuery);
