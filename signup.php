<?php
    include 'main/config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Document</title>
</head>
<body>
    <div class="form-wrapper">
        <main class="form-side">
            <a href="#" title="Logo">
                <img src="nawroz.png" class="logo">
            </a>
            
            <form class="my-form" method="post" id="signup-form">
                <div class="form-welcome-row">
                    <h1>Create an Account! &#128513;</h1>
                    <h2>Sign up for a new account!</h2>
                </div>
                <div class="login">
                    <div class="text-field">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" placeholder="Your username" required>
                    </div>
                    <div class="text-field">
                        <label for="signup-email">Email</label>
                        <input type="email" id="signup-email" name="signup-email" autocomplete="off" placeholder="you@example.com" required>
                        <div class="error-message">Email in incorrect format</div>
                    </div>
                    <div class="text-field">
                        <label for="signup-password">Password</label>
                        <input id="signup-password" type="password" name="signup-password" placeholder="Your password" title="Minimum 6 characters at least 1 Alphabet and 1 Number" pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$" required>
                        <div class="error-message">Minimum 6 characters at least 1 Alphabet and 1 Number</div>
                    </div>
                    <button class="my-form__button" type="submit" name="signup">Sign Up</button>
                    <button class="my-form__button" type="button" id="login-button" onclick="window.location.href='login.php'">Back to Login</button>                </div>
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
   

    // Handle signup form submission
    if (isset($_POST['signup'])) {
        // Registration logic
        $username = mysqli_escape_string($conn, $_POST['username']);
        $email = mysqli_escape_string($conn,$_POST['signup-email']);
        $password = mysqli_escape_string($conn, hash('sha256', $_POST['signup-password']));

        $select_users = mysqli_query($conn, "SELECT * FROM users WHERE Email = '$email'");

        if (mysqli_num_rows($select_users) > 0) {
            echo "<script>alert('User with this email already exists.');</script>";
            exit();
        }
        else {
            mysqli_query($conn, "INSERT INTO `users` (Name, Email, password) VALUES ('$username', '$email', '$password')");
            header("Location: login.php");
        }
      
    }

   
    ?>
</body>
</html>