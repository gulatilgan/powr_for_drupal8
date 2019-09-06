(function ($) {
    'use strict';
    Drupal.behaviors.powrscrolltotop_dialog = {
      attach: function (context) {
        $( "#powrscrolltotop-dialog" ).dialog();
        $( "#powrscrolltotop-dialog" ).dialog("option", "width", 500);
      }
    };
  })(jQuery);
