(function ($) {
    'use strict';
    Drupal.behaviors.powrwixuilocal_dialog = {
      attach: function (context) {
        $( "#powrwixuilocal-dialog" ).dialog();
        $( "#powrwixuilocal-dialog" ).dialog("option", "width", 500);
      }
    };
  })(jQuery);
