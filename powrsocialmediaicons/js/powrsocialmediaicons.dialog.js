(function ($) {
    'use strict';
    Drupal.behaviors.powrsocialmediaicons_dialog = {
      attach: function (context) {
        $( "#powrsocialmediaicons-dialog" ).dialog();
        $( "#powrsocialmediaicons-dialog" ).dialog("option", "width", 500);
      }
    };
  })(jQuery);
