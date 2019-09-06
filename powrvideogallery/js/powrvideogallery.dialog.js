(function ($) {
    'use strict';
    Drupal.behaviors.powrvideogallery_dialog = {
      attach: function (context) {
        $( "#powrvideogallery-dialog" ).dialog();
        $( "#powrvideogallery-dialog" ).dialog("option", "width", 500);
      }
    };
  })(jQuery);
