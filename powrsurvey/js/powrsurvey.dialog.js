(function ($) {
    'use strict';
    Drupal.behaviors.powrsurvey_dialog = {
      attach: function (context) {
        $( "#powrsurvey-dialog" ).dialog();
        $( "#powrsurvey-dialog" ).dialog("option", "width", 500);
      }
    };
  })(jQuery);
