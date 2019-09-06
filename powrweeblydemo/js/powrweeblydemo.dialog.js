(function ($) {
    'use strict';
    Drupal.behaviors.powrweeblydemo_dialog = {
      attach: function (context) {
        $( "#powrweeblydemo-dialog" ).dialog();
        $( "#powrweeblydemo-dialog" ).dialog("option", "width", 500);
      }
    };
  })(jQuery);
