(function ($) {
    'use strict';
    Drupal.behaviors.powrorderform_dialog = {
      attach: function (context) {
        $( "#powrorderform-dialog" ).dialog();
        $( "#powrorderform-dialog" ).dialog("option", "width", 500);
      }
    };
  })(jQuery);
