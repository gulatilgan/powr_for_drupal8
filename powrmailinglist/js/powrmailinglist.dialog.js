(function ($) {
    'use strict';
    Drupal.behaviors.powrmailinglist_dialog = {
      attach: function (context) {
        $( "#powrmailinglist-dialog" ).dialog();
        $( "#powrmailinglist-dialog" ).dialog("option", "width", 500);
      }
    };
  })(jQuery);
