(function ($) {
    'use strict';
    Drupal.behaviors.powrformbuilder_dialog = {
      attach: function (context) {
        $( "#powrformbuilder-dialog" ).dialog();
        $( "#powrformbuilder-dialog" ).dialog("option", "width", 500);
      }
    };
  })(jQuery);
