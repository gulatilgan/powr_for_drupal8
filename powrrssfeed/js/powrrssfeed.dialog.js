(function ($) {
    'use strict';
    Drupal.behaviors.powrrssfeed_dialog = {
      attach: function (context) {
        $( "#powrrssfeed-dialog" ).dialog();
        $( "#powrrssfeed-dialog" ).dialog("option", "width", 500);
      }
    };
  })(jQuery);
