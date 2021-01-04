function signupValidation() {
    var valid = true;

    $("#username").removeClass("error-field");
    $("#email").removeClass("error-field");
    $("#password").removeClass("error-field");
    $("#confirm-password").removeClass("error-field");

    var UserName = $("#username").val();
    var email = $("#email").val();
    var Password = $('#signup-password').val();
    var ConfirmPassword = $('#confirm-password').val();
    var emailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;

    $("#username-info").html("").hide();
    $("#email-info").html("").hide();

    if (UserName.trim() == "") {
        $("#username-info").html("This field is required").css("color", "#ee0000").show();
        $("#username").addClass("error-field");
        valid = false;
    }
    if (email == "") {
        $("#email-info").html("This field is required").css("color", "#ee0000").show();
        $("#email").addClass("error-field");
        valid = false;
    } else if (email.trim() == "") {
        $("#email-info").html("Invalid email address.").css("color", "#ee0000").show();
        $("#email").addClass("error-field");
        valid = false;
    } else if (!emailRegex.test(email)) {
        $("#email-info").html("Invalid email address.").css("color", "#ee0000")
            .show();
        $("#email").addClass("error-field");
        valid = false;
    }
    if (Password.trim() == "") {
        $("#signup-password-info").html("This field is required").css("color", "#ee0000").show();
        $("#signup-password").addClass("error-field");
        valid = false;
    }
    if (ConfirmPassword.trim() == "") {
        $("#confirm-password-info").html("This field is required").css("color", "#ee0000").show();
        $("#confirm-password").addClass("error-field");
        valid = false;
    }
    if (Password != ConfirmPassword) {
        $("#error-msg").html("Both passwords must be same.").show();
        valid = false;
    }
    if (valid == false) {
        $('.error-field').first().focus();
        valid = false;
    }
    return valid;
}