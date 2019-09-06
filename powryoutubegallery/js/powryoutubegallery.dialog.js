(function ($) {
    'use strict';
    Drupal.behaviors.powryoutubegallery_dialog = {
      attach: function (context) {
        $( "#powryoutubegallery-dialog" ).dialog();
        $( "#powryoutubegallery-dialog" ).dialog("option", "width", 500);
      }
    };
  })(jQuery);
