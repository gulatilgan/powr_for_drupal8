(function ($) {
    'use strict';
    Drupal.behaviors.powrjobboard_dialog = {
      attach: function (context) {
        $( "#powrjobboard-dialog" ).dialog();
        $( "#powrjobboard-dialog" ).dialog("option", "width", 500);
      }
    };
  })(jQuery);
