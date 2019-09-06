(function ($) {
    'use strict';
    Drupal.behaviors.powrvimeogallery_dialog = {
      attach: function (context) {
        $( "#powrvimeogallery-dialog" ).dialog();
        $( "#powrvimeogallery-dialog" ).dialog("option", "width", 500);
      }
    };
  })(jQuery);
