(function ($) {
    'use strict';
    Drupal.behaviors.powrbrowsernotification_dialog = {
      attach: function (context) {
        $( "#powrbrowsernotification-dialog" ).dialog();
        $( "#powrbrowsernotification-dialog" ).dialog("option", "width", 500);
      }
    };
  })(jQuery);
