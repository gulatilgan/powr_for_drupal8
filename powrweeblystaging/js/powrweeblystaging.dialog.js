(function ($) {
    'use strict';
    Drupal.behaviors.powrweeblystaging_dialog = {
      attach: function (context) {
        $( "#powrweeblystaging-dialog" ).dialog();
        $( "#powrweeblystaging-dialog" ).dialog("option", "width", 500);
      }
    };
  })(jQuery);
