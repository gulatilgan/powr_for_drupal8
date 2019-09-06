(function ($) {
    'use strict';
    Drupal.behaviors.powreventgallery_dialog = {
      attach: function (context) {
        $( "#powreventgallery-dialog" ).dialog();
        $( "#powreventgallery-dialog" ).dialog("option", "width", 500);
      }
    };
  })(jQuery);
