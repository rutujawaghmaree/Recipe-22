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


    <h1>Login</h1>
    <form method="POST" action="">
        <section class="hero" >
        <input class="login-input" type="text" name="username" placeholder="Username" required > 
        <br>
        <input class="login-input" type="password" name="password" placeholder="Password" required>
        <br>
        <button type="submit">Login</button>
        </section>
    </form>
</body>
</html>
