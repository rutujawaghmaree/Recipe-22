<?php if (session_status() === PHP_SESSION_NONE) session_start(); ?>




<header>
        <div class="container">
            <h1 class="logo">RECIPE HUB</h1>
            <nav>
                <div class="menu-icon">&#9776;</div>
                <ul class="nav_list">
                <li><a href="../index.php">HOME</a></li>
                <li><a href="../NEXT/support.php">SUPPORT</a></li>
                <li><a href="../NEXT/contact.php">CONTACT</a></li>
                <li><a href="../NEXT/about.php">ABOUT US</a></li>


                    <?php if (isset($_SESSION['user_id'])): ?>
                        <li><a href="../logout.php">LOGOUT</a></li>
                    <?php else: ?>
                        <li><a href="../login/login.php">LOGIN</a></li>
                        <li><a href="../login/signup.php">SIGN UP</a></li>
                    <?php endif; ?>
                </ul>
            </nav>
        </div>
    </header>