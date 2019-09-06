(function ($) {
    'use strict';
    Drupal.behaviors.powrtumblrfeed_dialog = {
      attach: function (context) {
        $( "#powrtumblrfeed-dialog" ).dialog();
        $( "#powrtumblrfeed-dialog" ).dialog("option", "width", 500);
      }
    };
  })(jQuery);
