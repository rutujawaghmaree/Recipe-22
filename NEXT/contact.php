<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>RECIPE HUB</title>

</head>

<body>

    <?php include '../navbar.php'; ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact Us - MyRecipes</title>
        <link rel="stylesheet" href="styles.css">
    </head>

    <body>

        <!-- Navbar -->


        <!-- Contact Section -->
        <div class="contact-container">
            <h1>Contact Us</h1>
            <p>Have a question, feedback, or a delicious recipe suggestion? We'd love to hear from you!</p>

            <div class="contact-info">
                <p><strong>Email:</strong> <a href="mailto:support@myrecipes.com">support@myrecipes.com</a></p>
                <p><strong>Phone:</strong> +1 234 567 890</p>
                <p><strong>Address:</strong> 12 Foodie Street, Smart City UlWE, FL 45678</p>
            </div>

            <!-- Social Media Links -->
            <div class="social-links">
                <p>Follow us on:</p>
                <a href="#" class="social-icon">Instagram</a> |
                <a href="#" class="social-icon">Facebook</a> |
                <a href="#" class="social-icon">Twitter</a>
            </div>

            <!-- Contact Form -->
            <form action="#" method="POST">
                <label for="name">Full Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Your Message:</label>
                <textarea id="message" name="message" rows="5" required></textarea>

                <button type="submit">Send Message</button>
            </form>
        </div>

    </body>

    </html>