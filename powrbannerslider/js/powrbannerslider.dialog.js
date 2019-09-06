(function ($) {
    'use strict';
    Drupal.behaviors.powrbannerslider_dialog = {
      attach: function (context) {
        $( "#powrbannerslider-dialog" ).dialog();
        $( "#powrbannerslider-dialog" ).dialog("option", "width", 500);
      }
    };
  })(jQuery);
