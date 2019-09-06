(function ($) {
    'use strict';
    Drupal.behaviors.powremaillistsignup_dialog = {
      attach: function (context) {
        $( "#powremaillistsignup-dialog" ).dialog();
        $( "#powremaillistsignup-dialog" ).dialog("option", "width", 500);
      }
    };
  })(jQuery);
