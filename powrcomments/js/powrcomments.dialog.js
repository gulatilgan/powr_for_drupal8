(function ($) {
    'use strict';
    Drupal.behaviors.powrcomments_dialog = {
      attach: function (context) {
        $( "#powrcomments-dialog" ).dialog();
        $( "#powrcomments-dialog" ).dialog("option", "width", 500);
      }
    };
  })(jQuery);
