document.addEventListener("DOMContentLoaded", () => { 
const params = new URLSearchParams(window.location.search); 
const error = params.get("error"); 
if (error === "username") showError("username", "Username already exists."); 
if (error === "email") showError("email", "Email already exists."); 
if (error === "both") { showError("username", "Username already exists."); 
showError("email", "Email already exists."); }
alert("dela");
});

function validateForm() {
    let valid = true;
    const fields = ["username", "email", "password", "confirm-password"];

    fields.forEach(field => {
        if (!validateField(field)) valid = false;
    });

    return valid;
}

function showError(inputId, message) {
    const input = document.getElementById(inputId);
    const errorSpan = document.getElementById(inputId + "-error");

    input.classList.add("error");
    errorSpan.textContent = message;
    errorSpan.classList.add("show");
}

function clearError(inputId) {
    const input = document.getElementById(inputId);
    const errorSpan = document.getElementById(inputId + "-error");

    input.classList.remove("error");
    errorSpan.textContent = "";
    errorSpan.classList.remove("show");
}
