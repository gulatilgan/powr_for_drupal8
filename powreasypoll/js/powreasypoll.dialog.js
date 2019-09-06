(function ($) {
    'use strict';
    Drupal.behaviors.powreasypoll_dialog = {
      attach: function (context) {
        $( "#powreasypoll-dialog" ).dialog();
        $( "#powreasypoll-dialog" ).dialog("option", "width", 500);
      }
    };
  })(jQuery);
