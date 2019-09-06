(function ($) {
    'use strict';
    Drupal.behaviors.powrpinterestfeed_dialog = {
      attach: function (context) {
        $( "#powrpinterestfeed-dialog" ).dialog();
        $( "#powrpinterestfeed-dialog" ).dialog("option", "width", 500);
      }
    };
  })(jQuery);
