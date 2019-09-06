(function ($) {
    'use strict';
    Drupal.behaviors.powrphotofilter_dialog = {
      attach: function (context) {
        $( "#powrphotofilter-dialog" ).dialog();
        $( "#powrphotofilter-dialog" ).dialog("option", "width", 500);
      }
    };
  })(jQuery);
