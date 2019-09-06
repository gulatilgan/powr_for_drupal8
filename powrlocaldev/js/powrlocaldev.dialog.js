(function ($) {
    'use strict';
    Drupal.behaviors.powrlocaldev_dialog = {
      attach: function (context) {
        $( "#powrlocaldev-dialog" ).dialog();
        $( "#powrlocaldev-dialog" ).dialog("option", "width", 500);
      }
    };
  })(jQuery);
