<?php 
include 'C:\Users\barha\Desktop\Advance web\main\config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>
<body>
 
    <div class="form-wrapper">
        <main class="form-side">
           
            <form class="my-form" id="login-form" method="POST">
                <div class="form-welcome-row">
                    <h1>Welcome back! &#128079;</h1>
                    <h2>Login with your account!</h2>
                </div>
                <div class="socials-row">
                    <a href="#" title="Use Apple">
                        <img src="apple.png" alt="Apple">
                        Continue with Apple
                    </a>
                </div>
                <div id="google-signin-button" class="socials-row">
                    <a href="#" title="Use Github">
                        <img src="google.png" alt="Google">
                        Continue with Google
                    </a>
                </div>
                <div class="divider">
                    <div class="divider-line"></div>
                    or
                    <div class="divider-line"></div>
                </div>
                <div class="login">
                    <div class="text-field">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" autocomplete="off" placeholder="you@example.com" required>
                        <div class="error-message">Email in incorrect format</div>
                    </div>
                    <div class="text-field">
                        <label for="password">Password</label>
                        <input id="password" type="password" name="password" placeholder="Your password" title="Minimum 6 characters at least 1 Alphabet and 1 Number" pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$" required>
                        <div class="error-message">Minimum 6 characters at least 1 Alphabet and 1 Number</div>
                    </div>
                    <button class="my-form__button" type="submit" name="login">Sign In</button>
                    <button class="my-form__button" type="button" onclick="window.location.href='signup.php'" id="signup-button">Sign Up</button>  
                </div>
            </form>
        
        </main>
        <aside class="info-side">
            <div class="blockquote-wrapper">
                <img src="cr7.png" alt="Returns" class="returns">
                <blockquote>
                    buy your favorite products at the best prices
                </blockquote>
                <div class="author">
                    <img src="ball.png" alt="Avatar" class="avatar">
                    <span class="author-name">@8arham</span>
                </div>
            </div>
        </aside>
    </div>
  
     
    
<?php
    
   
    // if (isset($_SESSION['email'])) {
    //     // User is already logged in, redirect them
    //     header("Location: main/Home.php");
    //     exit();
    // }
    
    if (isset($_POST['login'])) {
        $email = $_POST['email'];

        $password = hash('sha256', $_POST['password']);
    
        // Hardcoded admin credentials
        $admin_email = 'Manager@admin.com';
     
        // Check if the provided credentials match those of the admin
        if ($email === $admin_email  ) {
            $_SESSION['email'] = $email;
            header("Location: main/Admin/home.php"); // Redirect admin to admin page
            exit();
        }
    
        // If not admin, proceed with checking against database
        $sql = "SELECT * FROM users WHERE Email='$email' AND password='$password'";
        $result = $conn->query($sql);
    
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $_SESSION['email'] = $email;
            header("Location: main/Home.php");
            exit();
        } else {
            echo "<script>alert('Invalid email or password. Please try again.');</script>";
        }
    }
    
    $conn->close();
    ?>

    </script>

   
</body>
</html>