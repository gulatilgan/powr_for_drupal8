(function ($) {
    'use strict';
    Drupal.behaviors.powrfaq_dialog = {
      attach: function (context) {
        $( "#powrfaq-dialog" ).dialog();
        $( "#powrfaq-dialog" ).dialog("option", "width", 500);
      }
    };
  })(jQuery);
