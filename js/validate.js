function loginValidation() {
    var valid = true;
    $("#username").removeClass("error-field");
    $("#password").removeClass("error-field");

    var UserName = $("#username").val();
    var Password = $('#login-password').val();

    $("#username-info").html("").hide();

    if (UserName.trim() == "") {
        $("#username-info").html("This field is required").css("color", "#ee0000").show();
        $("#username").addClass("error-field");
        valid = false;
    }
    if (Password.trim() == "") {
        $("#login-password-info").html("This field is required.").css("color", "#ee0000").show();
        $("#login-password").addClass("error-field");
        valid = false;
    }
    if (valid == false) {
        $('.error-field').first().focus();
        valid = false;
    }
    return valid;
}