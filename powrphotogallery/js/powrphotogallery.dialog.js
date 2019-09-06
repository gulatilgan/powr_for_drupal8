(function ($) {
    'use strict';
    Drupal.behaviors.powrphotogallery_dialog = {
      attach: function (context) {
        $( "#powrphotogallery-dialog" ).dialog();
        $( "#powrphotogallery-dialog" ).dialog("option", "width", 500);
      }
    };
  })(jQuery);
