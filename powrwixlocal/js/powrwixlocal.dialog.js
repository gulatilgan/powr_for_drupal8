(function ($) {
    'use strict';
    Drupal.behaviors.powrwixlocal_dialog = {
      attach: function (context) {
        $( "#powrwixlocal-dialog" ).dialog();
        $( "#powrwixlocal-dialog" ).dialog("option", "width", 500);
      }
    };
  })(jQuery);
