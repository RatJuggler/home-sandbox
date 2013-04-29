function calcTimeDifference(oldTime, newTime) {
  var msDiff = newTime.getTime() - oldTime.getTime();
  var oResult = new Object();
  oResult.days = Math.floor(msDiff/1000/60/60/24);
  msDiff -= oResult.days*1000*60*60*24;
  oResult.hours = Math.floor(msDiff/1000/60/60);
  msDiff -= oResult.hours*1000*60*60;
  oResult.minutes = Math.floor(msDiff/1000/60);
  msDiff -= oResult.minutes*1000*60;
  oResult.seconds = Math.floor(msDiff/1000);
  return oResult;
}

function pad(n) {
  return n<10 ? '0'+n : n;
}

function getStartTime() {
  oTime = calcTimeDifference(new Date(Date.parse('<?php echo $dtFile; ?>')), new Date());
  return pad(oTime.days) + ':' + pad(oTime.hours) + ':' + pad(oTime.minutes) + ':' + pad(oTime.seconds);
}

function cookieWarning() {
  var cookieStatus = $.cookie('cookie-warning');
  if (typeof cookieStatus === 'undefined') {
    $("#cookie-warning a").click(function () {
      $("#cookie-warning").slideUp();
      $.cookie('cookie-warning', 'shown', {expires: 7});
    });
    $("#cookie-warning").slideDown();
  }
}

function themeChange(newTheme) {
  $('link[title="Theme"]').attr('href', newTheme);
}

!function ($) {
  $(function() {
    // First check the theme cookie in case the theme is different to the default.
    var theme = $.cookie('theme');
    if (typeof theme !== 'undefined') {
      themeChange(theme);
    }
    // Show the cookie warning if required.
    cookieWarning();
    // Start the carousel.
    $('#ratCarousel').carousel('cycle');
    // Start the counter.
    $('#counter').countdown({since: getStartTime(), format: 'YMDHMS'});
    // Turn on the theme change links.
    $('.theme-change').click(function() {
      var newTheme = $(this).attr('rel');
      themeChange(newTheme);
      $.cookie('theme', newTheme, {expires: 7});
    });
    // Set the contact form validation.
    $('#contact-form').validate({
/*            rules: {
        name: {minlength: 2, maxlength: 64, required: true},
        email: {email: true, maxlength: 128, required: true},
        subject: {required: true},
        message: {minlength: 9, maxlength: 256, required: true}
      },*/
      messages: {
        name: {
          minlength: "How about your full name?",
          required: "Please enter your name."
        },
        email: "Please enter a valid email address.",
        subject: "You need to pick one.",
        message: {
          minlength: "What are you trying to say?",
          maxlength: "I was hoping for a comment, not an essay.",
          required: "Please enter a short statement reflecting your thoughts."
        }
      },
      highlight: function(element) {
        $(element).closest('.control-group').removeClass('success').addClass('error');
      },
      success: function(element) {
        $(element).closest('.control-group').removeClass('error').addClass('success');
      },
      submitHandler: function(form) {
        $('#contact-form-submit').button('loading');
        $('#contact-form-cancel').prop('disabled', true);
        $('#contact-form-close').prop('disabled', true);
        $("#contact-form :input").prop("disabled", true);
        $(form).ajaxSubmit({
          url: "contactemail.php", type: "post", resetForm: true,
          success: function() {
            $('#contact-form-modal').modal('hide');
            $("#contact-form :input").prop("disabled", false);
            $('#contact-form-close').prop('disabled', false);
            $('#contact-form-cancel').prop('disabled', false);
            $('#contact-form-submit').button('reset');
          },
          error: function(jqXHR, status, thrown) {
            $('#error-text').html(document.createTextNode('Status: ' + status + '\nError: ' + thrown + '\njqXHR: ' + JSON.stringify(jqXHR)));
            $('#error-modal').modal('show');
          }
        });
      }
    });
  });
} (window.jQuery);
