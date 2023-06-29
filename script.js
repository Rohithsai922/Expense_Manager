function validateForm() {
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirmPassword").value;
    if (password !== confirmPassword) {
        alert("Passwords do not match");
        return false;
    }

    var mobileNumber = document.getElementById("mobileNumber").value;
    
    // Check if phone number is valid
    var phoneRegex = /^[0-9]{10}$/; // Regular expression for 10-digit numeric phone number
    if (!phoneRegex.test(mobileNumber)) {
        alert("Please enter a valid 10-digit mobile number");
        return false;
    }
    return true;
}
