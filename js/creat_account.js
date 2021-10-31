$("#confirm_password").keyup(function () {
  if ($("#password").val() != $("#confirm_password").val()) {
    $("#match").removeAttr("hidden");
    $("#match").html("Passwords do not match!");
    $("#match").css("color", "red");
  } else {
    $("#match").removeAttr("hidden");
    $("#match").html("Passwords match :)");
    $("#match").css("color", "green");
  }
  if ($("#confirm_password").val() == "") {
    $("#match").prop("hidden", true);
  }
});
