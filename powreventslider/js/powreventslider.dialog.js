(function ($) {
    'use strict';
    Drupal.behaviors.powreventslider_dialog = {
      attach: function (context) {
        $( "#powreventslider-dialog" ).dialog();
        $( "#powreventslider-dialog" ).dialog("option", "width", 500);
      }
    };
  })(jQuery);
