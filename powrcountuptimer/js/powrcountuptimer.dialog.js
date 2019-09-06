(function ($) {
    'use strict';
    Drupal.behaviors.powrcountuptimer_dialog = {
      attach: function (context) {
        $( "#powrcountuptimer-dialog" ).dialog();
        $( "#powrcountuptimer-dialog" ).dialog("option", "width", 500);
      }
    };
  })(jQuery);
