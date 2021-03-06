jQuery (function ($) {
  $("div.ai-rotate").each (function () {
    var rotate_options = $(".ai-rotate-option", this);
    var random_index = Math.floor (Math.random () * rotate_options.length);

    var d = new Date();
    var n = d.getMilliseconds();
    if (n % 2) random_index = rotate_options.length - random_index - 1;

    rotate_options.hide ();
    var option = $(rotate_options [random_index]);
    option.css ({"display": "", "visibility": "", "position": "", "width": "", "height": "", "top": "", "left": ""}).removeClass ('ai-rotate-option').removeClass ('ai-rotate-options');
    $(this).css ({"position": ""}).removeClass ('ai-rotate');

    var option_name = '';
    var debug_block_frame = $(this).closest ('.ai-debug-block');
    if (typeof debug_block_frame != "undefined") {
      var option_name = atob (option.data ('name'));
      debug_block_frame.find ('span.ai-option-name').html (' - ' + option_name);
    }

    var tracking_updated = false;
    var adb_show_wrapping_div = $(this).closest ('.ai-adb-show');
    if (typeof adb_show_wrapping_div != "undefined") {
      if (typeof adb_show_wrapping_div.data ("ai-tracking") != "undefined") {
        var data = JSON.parse (atob (adb_show_wrapping_div.data ("ai-tracking")));
        if (typeof data !== "undefined" && data.constructor === Array) {
          data [1] = random_index + 1;
          data [3] = option_name;
          adb_show_wrapping_div.data ("ai-tracking", btoa (JSON.stringify (data)))
          tracking_updated = true;
        }
      }
    }

    if (!tracking_updated) {
      var wrapping_div = $(this).closest ('div[data-ai]');
      if (typeof wrapping_div.data ("ai") != "undefined") {
        var data = JSON.parse (atob (wrapping_div.data ("ai")));
        if (typeof data !== "undefined" && data.constructor === Array) {
          data [1] = random_index + 1;
          data [3] = option_name;
          wrapping_div.data ("ai", btoa (JSON.stringify (data)))
        }
      }
    }
  });
});

