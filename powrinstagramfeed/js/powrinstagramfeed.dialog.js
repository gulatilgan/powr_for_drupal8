(function ($) {
    'use strict';
    Drupal.behaviors.powrinstagramfeed_dialog = {
      attach: function (context) {
        $( "#powrinstagramfeed-dialog" ).dialog();
        $( "#powrinstagramfeed-dialog" ).dialog("option", "width", 500);
      }
    };
  })(jQuery);
