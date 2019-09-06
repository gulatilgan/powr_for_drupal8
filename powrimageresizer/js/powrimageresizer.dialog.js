(function ($) {
    'use strict';
    Drupal.behaviors.powrimageresizer_dialog = {
      attach: function (context) {
        $( "#powrimageresizer-dialog" ).dialog();
        $( "#powrimageresizer-dialog" ).dialog("option", "width", 500);
      }
    };
  })(jQuery);
