(function ($) {
    'use strict';
    Drupal.behaviors.powrgraph_dialog = {
      attach: function (context) {
        $( "#powrgraph-dialog" ).dialog();
        $( "#powrgraph-dialog" ).dialog("option", "width", 500);
      }
    };
  })(jQuery);
