@@ .. @@
 <head>
     <meta charset="UTF-8">
     <title>Signup</title>
     <link rel="stylesheet" href="./log.css">
+    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
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
     
-    <h1>REGISTRATION</h1>
-
     <section class="hero">
-        <div class="hero-section">
-            <h2>Create an Account</h2>
-            <form action="register.php" method="POST">
-                <input type="text" name="fullname" placeholder="Full Name" required>
-                <input type="text" name="username" placeholder="Username" required>
-                <input type="password" name="password" placeholder="Password" required>
-                <input type="password" name="confirm_password" placeholder="Confirm Password" required>
-                <button type="submit">Register</button>
+        <div class="login-container">
+            <div class="login-header">
+                <h1>Join Recipe Hub!</h1>
+                <p>Create your account to discover amazing recipes</p>
+            </div>
+            
+            <form action="register.php" method="POST" class="login-form">
+                <div class="input-group">
+                    <input class="login-input" type="text" name="fullname" placeholder="Full Name" required>
+                    <span class="input-icon">👤</span>
+                </div>
+                
+                <div class="input-group">
+                    <input class="login-input" type="text" name="username" placeholder="Username" required>
+                    <span class="input-icon">@</span>
+                </div>
+                
+                <div class="input-group">
+                    <input class="login-input" type="password" name="password" placeholder="Password" required>
+                    <span class="input-icon">🔒</span>
+                </div>
+                
+                <div class="input-group">
+                    <input class="login-input" type="password" name="confirm_password" placeholder="Confirm Password" required>
+                    <span class="input-icon">🔐</span>
+                </div>
+                
+                <button type="submit" class="login-btn">Create Account</button>
             </form>
-            <p>Already have an account? <a href="login.php">Login here</a></p>
-        </div>
+            
+            <div class="login-footer">
+                <p>Already have an account? <a href="login.php">Sign in here</a></p>
+            </div>
+        </div>
     </section>
 </body>
 </html>