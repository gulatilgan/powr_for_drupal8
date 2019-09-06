(function ($) {
    'use strict';
    Drupal.behaviors.powrstagingdev_dialog = {
      attach: function (context) {
        $( "#powrstagingdev-dialog" ).dialog();
        $( "#powrstagingdev-dialog" ).dialog("option", "width", 500);
      }
    };
  })(jQuery);
