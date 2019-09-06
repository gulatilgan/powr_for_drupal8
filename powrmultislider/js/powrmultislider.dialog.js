(function ($) {
    'use strict';
    Drupal.behaviors.powrmultislider_dialog = {
      attach: function (context) {
        $( "#powrmultislider-dialog" ).dialog();
        $( "#powrmultislider-dialog" ).dialog("option", "width", 500);
      }
    };
  })(jQuery);
