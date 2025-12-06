document.addEventListener("DOMContentLoaded", () => {
    const params = new URLSearchParams(window.location.search);
    const error = params.get("error");

    if (error === "notfound") {
        showError("login-identifier", "Account does not exist.");
    }
    if (error === "wrongpassword") {
        showError("login-password", "Incorrect password.");
		document.getElementById("login-password").classList.add("shake");
		setTimeout(() => {
    document.getElementById("login-password").classList.remove("shake");
}, 350);
    }
});


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
