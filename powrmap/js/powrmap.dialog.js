(function ($) {
    'use strict';
    Drupal.behaviors.powrmap_dialog = {
      attach: function (context) {
        $( "#powrmap-dialog" ).dialog();
        $( "#powrmap-dialog" ).dialog("option", "width", 500);
      }
    };
  })(jQuery);
