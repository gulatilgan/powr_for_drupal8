(function ($) {
    'use strict';
    Drupal.behaviors.powrpaypalbutton_dialog = {
      attach: function (context) {
        $( "#powrpaypalbutton-dialog" ).dialog();
        $( "#powrpaypalbutton-dialog" ).dialog("option", "width", 500);
      }
    };
  })(jQuery);
