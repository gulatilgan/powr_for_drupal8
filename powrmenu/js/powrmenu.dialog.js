(function ($) {
    'use strict';
    Drupal.behaviors.powrmenu_dialog = {
      attach: function (context) {
        $( "#powrmenu-dialog" ).dialog();
        $( "#powrmenu-dialog" ).dialog("option", "width", 500);
      }
    };
  })(jQuery);
