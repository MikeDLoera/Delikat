$(document).ready(function () {
  $("#pass").on("keypress", function (e) {
    if (e.keyCode == 13 || e.which == 13) {
      $("#loginForm").submit();
    }
  });

  $("#user").focus();
});
