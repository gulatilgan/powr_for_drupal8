(function ($) {
    'use strict';
    Drupal.behaviors.powrphotoeditor_dialog = {
      attach: function (context) {
        $( "#powrphotoeditor-dialog" ).dialog();
        $( "#powrphotoeditor-dialog" ).dialog("option", "width", 500);
      }
    };
  })(jQuery);
