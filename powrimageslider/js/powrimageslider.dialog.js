(function ($) {
    'use strict';
    Drupal.behaviors.powrimageslider_dialog = {
      attach: function (context) {
        $( "#powrimageslider-dialog" ).dialog();
        $( "#powrimageslider-dialog" ).dialog("option", "width", 500);
      }
    };
  })(jQuery);
