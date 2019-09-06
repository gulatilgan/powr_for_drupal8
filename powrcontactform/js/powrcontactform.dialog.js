(function ($) {
    'use strict';
    Drupal.behaviors.powrcontactform_dialog = {
      attach: function (context) {
        $( "#powrcontactform-dialog" ).dialog();
        $( "#powrcontactform-dialog" ).dialog("option", "width", 500);
      }
    };
  })(jQuery);
