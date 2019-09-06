(function ($) {
    'use strict';
    Drupal.behaviors.powrdigitaldownload_dialog = {
      attach: function (context) {
        $( "#powrdigitaldownload-dialog" ).dialog();
        $( "#powrdigitaldownload-dialog" ).dialog("option", "width", 500);
      }
    };
  })(jQuery);
