(function ($) {
    'use strict';
    Drupal.behaviors.powrmicroblog_dialog = {
      attach: function (context) {
        $( "#powrmicroblog-dialog" ).dialog();
        $( "#powrmicroblog-dialog" ).dialog("option", "width", 500);
      }
    };
  })(jQuery);
