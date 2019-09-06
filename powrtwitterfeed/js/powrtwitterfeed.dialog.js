(function ($) {
    'use strict';
    Drupal.behaviors.powrtwitterfeed_dialog = {
      attach: function (context) {
        $( "#powrtwitterfeed-dialog" ).dialog();
        $( "#powrtwitterfeed-dialog" ).dialog("option", "width", 500);
      }
    };
  })(jQuery);
