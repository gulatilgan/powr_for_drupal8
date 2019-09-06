(function ($) {
    'use strict';
    Drupal.behaviors.powrsalespop_dialog = {
      attach: function (context) {
        $( "#powrsalespop-dialog" ).dialog();
        $( "#powrsalespop-dialog" ).dialog("option", "width", 500);
      }
    };
  })(jQuery);
