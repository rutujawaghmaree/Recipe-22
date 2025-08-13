

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Signup</title>
    <link rel="stylesheet" href="./log.css">
</head>
<body>
    
<header>
        <div class="container">
            <h1 class="logo">RECIPE HUB</h1>
            <nav>
         
                <ul class="nav_list">
                <li><a class="login" href="../index.php">HOME</a></li>
               

                    <?php if (isset($_SESSION['user_id'])): ?>
                        <li><a class="login" href="../logout.php">LOGOUT</a></li>
                    <?php else: ?>
                        <li><a class="login" href="../login/login.php">LOGIN</a></li>
                        <li><a class="login" href="../login/signup.php">SIGN UP</a></li>
                    <?php endif; ?>
                </ul>
            </nav>
        </div>
    </header>
    
    <h1>REGISTRATION</h1>

    <section class="hero">
        <div class="hero-section">
            <h2>Create an Account</h2>
            <form action="register.php" method="POST">
                <input type="text" name="fullname" placeholder="Full Name" required>
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="password" name="confirm_password" placeholder="Confirm Password" required>
                <button type="submit">Register</button>
            </form>
            <p>Already have an account? <a href="login.php">Login here</a></p>
        </div>
    </section>
</body>
</html>
