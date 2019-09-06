(function ($) {
    'use strict';
    Drupal.behaviors.powrresume_dialog = {
      attach: function (context) {
        $( "#powrresume-dialog" ).dialog();
        $( "#powrresume-dialog" ).dialog("option", "width", 500);
      }
    };
  })(jQuery);
