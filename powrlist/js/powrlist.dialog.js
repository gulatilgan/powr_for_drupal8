(function ($) {
    'use strict';
    Drupal.behaviors.powrlist_dialog = {
      attach: function (context) {
        $( "#powrlist-dialog" ).dialog();
        $( "#powrlist-dialog" ).dialog("option", "width", 500);
      }
    };
  })(jQuery);
