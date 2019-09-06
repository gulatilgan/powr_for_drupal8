(function ($) {
    'use strict';
    Drupal.behaviors.powrphotowatermark_dialog = {
      attach: function (context) {
        $( "#powrphotowatermark-dialog" ).dialog();
        $( "#powrphotowatermark-dialog" ).dialog("option", "width", 500);
      }
    };
  })(jQuery);
