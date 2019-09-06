(function ($) {
    'use strict';
    Drupal.behaviors.powrpopup_dialog = {
      attach: function (context) {
        $( "#powrpopup-dialog" ).dialog();
        $( "#powrpopup-dialog" ).dialog("option", "width", 500);
      }
    };
  })(jQuery);
