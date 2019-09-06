(function ($) {
    'use strict';
    Drupal.behaviors.powrplancomparison_dialog = {
      attach: function (context) {
        $( "#powrplancomparison-dialog" ).dialog();
        $( "#powrplancomparison-dialog" ).dialog("option", "width", 500);
      }
    };
  })(jQuery);
