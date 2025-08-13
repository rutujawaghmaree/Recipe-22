document.querySelector("form").addEventListener("submit", function (e) {
    let password = document.getElementById("password").value;
    let confirmPassword = document.getElementById("confirm_password").value;

    if (password !== confirmPassword) {
        e.preventDefault(); // Prevent form submission
        alert("Passwords do not match!");
    } else {
        e.preventDefault(); // Prevent default form action for demo
        alert("Registration Successful!");
        window.location.href = "http://127.0.0.1:5500/logggin/indexxxx.html"; // Redirect to login page
    }
});
