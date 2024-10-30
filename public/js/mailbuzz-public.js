(function ($) {
  "use strict";

  $(function () {
    if (getCookie("mb-open") == "false") {
      $(".mb-modal-container").removeClass("is-open");
    } else {
      $(".mb-modal-container").addClass("is-open");
    }

    if (!getCookie("mb-subscribed")) {
      $(".mb-modal-container").show();
    }

    $(".mb-js-trigger").click(function (e) {
      e.preventDefault();
      $(".mb-modal-container").toggleClass("is-open");
      createCookie("mb-open", $(".mb-modal-container").hasClass("is-open"), 3);
    });

    $("#mb-popup-form").submit(function (e) {
      e.preventDefault();

      $("#mb-popup-form button").prop("disabled", true);

      var formData = {
        email: $("#mb-popup-form input[name='email']").val(),
        ref: $("#mb-popup-form input[name='ref']").val(),
      };

      $.ajax({
        type: "POST",
        url: $("#mb-popup-form")[0].action,
        data: formData,
        dataType: "json",
        encode: true,
        crossDomain: true,
      }).done(function (data) {
        if (data.message) $(".mb-popup__message").show().html(data.message);

        if (data.status === "ok") {
          $("#mb-popup-form").hide();
          createCookie("mb-subscribed", true, 90);
          return;
        }

        $("#mb-popup-form button").prop("disabled", false);
      });
    });
  });
})(jQuery);

function createCookie(name, value, days) {
  var expires;

  if (days) {
    var date = new Date();
    date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
    expires = "; expires=" + date.toGMTString();
  } else {
    expires = "";
  }
  document.cookie =
    encodeURIComponent(name) +
    "=" +
    encodeURIComponent(value) +
    expires +
    "; path=/";
}

function getCookie(cname) {
  let name = cname + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(";");
  for (let i = 0; i < ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == " ") {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}
