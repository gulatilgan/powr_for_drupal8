(function ($) {
    'use strict';
    Drupal.behaviors.powrreviews_dialog = {
      attach: function (context) {
        $( "#powrreviews-dialog" ).dialog();
        $( "#powrreviews-dialog" ).dialog("option", "width", 500);
      }
    };
  })(jQuery);
