(function ($) {
    'use strict';
    Drupal.behaviors.powrholidaycountdown_dialog = {
      attach: function (context) {
        $( "#powrholidaycountdown-dialog" ).dialog();
        $( "#powrholidaycountdown-dialog" ).dialog("option", "width", 500);
      }
    };
  })(jQuery);
