(function ($) {
    'use strict';
    Drupal.behaviors.powrtabs_dialog = {
      attach: function (context) {
        $( "#powrtabs-dialog" ).dialog();
        $( "#powrtabs-dialog" ).dialog("option", "width", 500);
      }
    };
  })(jQuery);
