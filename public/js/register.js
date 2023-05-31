// HTML Attr

// Form Attr
document.getElementById("registerForm").method = "post";
var firstNameInput = document.getElementById("firstName");
var lastNameInput = document.getElementById("lastName");
var emailInput = document.getElementById("email");
var passwordInput = document.getElementById("password");
// First Name Input Attr
firstNameInput.classList = "form-control mx-1";
firstNameInput.required = true;
firstNameInput.placeholder = "First Name";
firstNameInput.autocomplete = "off";
// Last Name Input Attr
lastNameInput.classList = "form-control mx-1";
lastNameInput.required = true;
lastNameInput.placeholder = "Last Name";
lastNameInput.autocomplete = "off";
// Email Input Attr
emailInput.classList = "form-control";
emailInput.required = true;
emailInput.placeholder = "Email";
emailInput.autocomplete = "off";
// Password Input Attr
passwordInput.classList = "form-control";
passwordInput.required = true;
passwordInput.placeholder = "Password";
passwordInput.autocomplete = "off";

(function ($) {
  "use strict";

  var fullHeight = function () {
    $(".js-fullheight").css("height", $(window).height());
    $(window).resize(function () {
      $(".js-fullheight").css("height", $(window).height());
    });
  };
  fullHeight();

  $(".toggle-password").click(function () {
    $(this).toggleClass("fa-eye fa-eye-slash");
    var input = $($(this).attr("toggle"));
    if (input.attr("type") == "password") {
      input.attr("type", "text");
    } else {
      input.attr("type", "password");
    }
  });
})(jQuery);
