(function ($) {
    'use strict';
    Drupal.behaviors.powrweather_dialog = {
      attach: function (context) {
        $( "#powrweather-dialog" ).dialog();
        $( "#powrweather-dialog" ).dialog("option", "width", 500);
      }
    };
  })(jQuery);
