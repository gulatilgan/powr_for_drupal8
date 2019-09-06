(function ($) {
    'use strict';
    Drupal.behaviors.powrfileembed_dialog = {
      attach: function (context) {
        $( "#powrfileembed-dialog" ).dialog();
        $( "#powrfileembed-dialog" ).dialog("option", "width", 500);
      }
    };
  })(jQuery);
