(function ($) {
    'use strict';
    Drupal.behaviors.powrpricetable_dialog = {
      attach: function (context) {
        $( "#powrpricetable-dialog" ).dialog();
        $( "#powrpricetable-dialog" ).dialog("option", "width", 500);
      }
    };
  })(jQuery);
