(function ($) {
    'use strict';
    Drupal.behaviors.powrchat_dialog = {
      attach: function (context) {
        $( "#powrchat-dialog" ).dialog();
        $( "#powrchat-dialog" ).dialog("option", "width", 500);
      }
    };
  })(jQuery);
