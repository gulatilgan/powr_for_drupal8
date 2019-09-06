(function ($) {
    'use strict';
    Drupal.behaviors.powrwixdev_dialog = {
      attach: function (context) {
        $( "#powrwixdev-dialog" ).dialog();
        $( "#powrwixdev-dialog" ).dialog("option", "width", 500);
      }
    };
  })(jQuery);
