document.addEventListener("DOMContentLoaded", function () {
    const loginForm = document.querySelector("form");

    loginForm.addEventListener("submit", function (event) {
        event.preventDefault(); // Prevent default form submission

        const username = document.getElementById("username").value.trim();
        const password = document.getElementById("password").value.trim();

        if (username === "" || password === "") {
            alert("Please fill in both fields.");
            return;
        }

        // Dummy authentication (replace with backend API call)
        if (username === "admin" && password === "12345") {
            alert("Login successful! Redirecting...");
            window.location.href = "http://127.0.0.1:5500/NEXT/abc.html#"; // Redirect to dashboard
        } else {
            alert("Invalid username or password. Please try again.");
        }
    });
});

