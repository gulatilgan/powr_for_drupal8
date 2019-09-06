(function ($) {
    'use strict';
    Drupal.behaviors.powrpoll_dialog = {
      attach: function (context) {
        $( "#powrpoll-dialog" ).dialog();
        $( "#powrpoll-dialog" ).dialog("option", "width", 500);
      }
    };
  })(jQuery);
