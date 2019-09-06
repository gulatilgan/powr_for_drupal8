(function ($) {
    'use strict';
    Drupal.behaviors.powrcountdowntimer_dialog = {
      attach: function (context) {
        $( "#powrcountdowntimer-dialog" ).dialog();
        $( "#powrcountdowntimer-dialog" ).dialog("option", "width", 500);
      }
    };
  })(jQuery);
