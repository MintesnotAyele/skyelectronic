function validateSignupForm() {
    // Get form inputs
    var username = document.forms["signupForm"]["username"].value.trim();
    var email = document.forms["signupForm"]["email"].value.trim();
    var password = document.forms["signupForm"]["password"].value.trim();

    // Validate inputs
    if (username == "") {
        alert("Please enter a username.");
        return false;
    }

    if (email == "") {
        alert("Please enter an email address.");
        return false;
    } else if (!validateEmail(email)) {
        alert("Please enter a valid email address.");
        return false;
    }

    if (password == "") {
        alert("Please enter a password.");
        return false;
    }

    return true;
}

function validateLoginForm() {
    // Get form inputs
    var email = document.forms["loginForm"]["email"].value.trim();
    var password = document.forms["loginForm"]["psw"].value.trim();

    // Validate inputs
    if (email == "") {
        alert("Please enter an email address.");
        return false;
    } else if (!validateEmail(email)) {
        alert("Please enter a valid email address.");
        return false;
    }

    if (password == "") {
        alert("Please enter a password.");
        return false;
    }

    return true;
}

function validateEmail(email) {
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
}