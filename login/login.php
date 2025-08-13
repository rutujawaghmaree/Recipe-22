<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->bind_result($id, $hashedPassword);
    $stmt->fetch();

    if (password_verify($password, $hashedPassword)) {
        $_SESSION['user_id'] = $id;
        header("Location: ../index.php");
        exit;
    } else {
        echo "Invalid login credentials.";
    }
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="./log.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
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


    <section class="hero">
        <div class="login-container">
            <div class="login-header">
                <h1>Welcome Back!</h1>
                <p>Sign in to access your favorite recipes</p>
            </div>
            
            <form method="POST" action="" class="login-form">
                <div class="input-group">
                    <input class="login-input" type="text" name="username" placeholder="Username" required>
                    <span class="input-icon">👤</span>
                </div>
                
                <div class="input-group">
                    <input class="login-input" type="password" name="password" placeholder="Password" required>
                    <span class="input-icon">🔒</span>
                </div>
                
                <button type="submit" class="login-btn">Sign In</button>
            </form>
            
            <div class="login-footer">
                <p>Don't have an account? <a href="signup.php">Create one here</a></p>
            </div>
        </div>
        </section>
</body>
</html>
