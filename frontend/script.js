function validateRegistration() {

    let email = document.forms[0]["email"].value;

    if (email === "") {
        alert("Email cannot be empty");
        return false;
    }

    return true;
}
