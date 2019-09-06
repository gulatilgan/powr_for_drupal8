(function ($) {
    'use strict';
    Drupal.behaviors.powrflickrgallery_dialog = {
      attach: function (context) {
        $( "#powrflickrgallery-dialog" ).dialog();
        $( "#powrflickrgallery-dialog" ).dialog("option", "width", 500);
      }
    };
  })(jQuery);
