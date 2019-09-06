(function ($) {
    'use strict';
    Drupal.behaviors.powraboutus_dialog = {
      attach: function (context) {
        $( "#powraboutus-dialog" ).dialog();
        $( "#powraboutus-dialog" ).dialog("option", "width", 500);
      }
    };
  })(jQuery);
