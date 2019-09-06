(function ($) {
    'use strict';
    Drupal.behaviors.powrmediagallery_dialog = {
      attach: function (context) {
        $( "#powrmediagallery-dialog" ).dialog();
        $( "#powrmediagallery-dialog" ).dialog("option", "width", 500);
      }
    };
  })(jQuery);
