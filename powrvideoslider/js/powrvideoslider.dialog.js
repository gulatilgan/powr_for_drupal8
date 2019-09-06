(function ($) {
    'use strict';
    Drupal.behaviors.powrvideoslider_dialog = {
      attach: function (context) {
        $( "#powrvideoslider-dialog" ).dialog();
        $( "#powrvideoslider-dialog" ).dialog("option", "width", 500);
      }
    };
  })(jQuery);
