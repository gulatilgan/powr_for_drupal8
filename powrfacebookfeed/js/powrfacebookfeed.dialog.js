(function ($) {
    'use strict';
    Drupal.behaviors.powrfacebookfeed_dialog = {
      attach: function (context) {
        $( "#powrfacebookfeed-dialog" ).dialog();
        $( "#powrfacebookfeed-dialog" ).dialog("option", "width", 500);
      }
    };
  })(jQuery);
