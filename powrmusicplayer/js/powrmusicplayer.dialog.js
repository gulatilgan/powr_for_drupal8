(function ($) {
    'use strict';
    Drupal.behaviors.powrmusicplayer_dialog = {
      attach: function (context) {
        $( "#powrmusicplayer-dialog" ).dialog();
        $( "#powrmusicplayer-dialog" ).dialog("option", "width", 500);
      }
    };
  })(jQuery);
