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
    <script src="https://apis.google.com/js/platform.js" async defer></script>

    <div class="form-wrapper">
        <main class="form-side">
            <a href="#" title="Logo">
                <img src="nawroz.png" class="logo">
            </a>
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
                    <button class="my-form__button" type="button" id="signup-button">Sign Up</button>  
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
    
    <script>
        // JavaScript to toggle between login and signup forms
        document.getElementById("signup-button").addEventListener("click", function() {
            document.getElementById("login-form").style.display = "none";
            document.getElementById("signup-form").style.display = "block";
        });
    
        document.getElementById("login-button").addEventListener("click", function() {
            document.getElementById("signup-form").style.display = "none";
            document.getElementById("login-form").style.display = "block";
        });
    </script>

     
    
<?php
    
   
    if (isset($_SESSION['email'])) {
        // User is already logged in, redirect them
        header("Location: main/Home.php");
        exit();
    }
    
    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
    
        // Hardcoded admin credentials
        $admin_email = 'Manager@admin.com';
        $admin_password = '12qwaszx';
    
        // Check if the provided credentials match those of the admin
        if ($email === $admin_email && $password === $admin_password) {
            $_SESSION['email'] = $email;
            header("Location: admin.php"); // Redirect admin to admin page
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

     
    <!--  

    //     function initGoogleSignIn() {
    //     gapi.auth2.init({
    //         client_id: 'YOUR_CLIENT_ID' // Replace with your Google Client ID
    //     });
    // }

    // // Load Google Sign-In API
    // window.onload = function() {
    //     gapi.load('auth2', initGoogleSignIn);
    //     attachSigninHandler();
    // };

    // // Attach sign-in event handler to Google Sign-In button
    // function attachSigninHandler() {
    //     gapi.signin2.render('google-signin-button', {
    //         'scope': 'email profile',
    //         'width': 200,
    //         'height': 40,
    //         'longtitle': true,
    //         'theme': 'light',
    //         'onsuccess': onSignInSuccess,
    //         'onfailure': onSignInFailure
    //     });
    // }

    // // Handle sign-in success
    // function onSignInSuccess(googleUser) {
    //     var profile = googleUser.getBasicProfile();
    //     var email = profile.getEmail();
    //     var username = profile.getName(); // You may need to adjust this based on how you want to handle usernames

    //     // You can now use the email and username for further processing (e.g., sending them to the server for authentication)
    //     console.log('Logged in as: ' + email);
    //     console.log('Username: ' + username);

    //     // Simulate login process (replace with actual login logic)
    //     alert('Logged in with Google!\nEmail: ' + email + '\nUsername: ' + username);
    // }

    // // Handle sign-in failure
    // function onSignInFailure(error) {
    //     console.error('Sign-in error:', error);
    //}<div class="form-wrapper">
        <main class="form-side">
            <a href="#" title="Logo">
                <img src="nawroz.png"  class="logo">
            </a>
            <form class="my-form">
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
                <div class="socials-row">
                    <a href="#" title="Use Github">
                        <img src="google.png" alt="Google">
                        Continue with Google
                    </a>
                </div>
                <div class="divider">
                    <div class="divider-line"></div>
                    or
                    <div class="divider-line"></div>
                </div >
                <div class="login">    
                <div class="text-field">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" autocomplete="off" placeholder="you@example.com"
                        required>
                    <div class="error-message">Email in incorrect format</div>
                </div>
                <div class="text-field">
                    <label for="password">Password</label>
                    <input id="password" type="password" name="password" placeholder="Your password" title="Minimum 6 characters at 
                                                        least 1 Alphabet and 1 Number"
                        pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$" required>
                    <div class="error-message">Minimum 6 characters at
                        least 1 Alphabet and 1 Number</div>
                </div>
                <button class="my-form__button" type="submit">
                    Sign In
                </button>
                <button class="my-form__button" type="button" id="signup-button">Sign Up</button>

                 </div>
              sign-up  -->
       
            <!-- </form>

            <form class="my-form" id="signup-form" style="display: none;">
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
                    <button class="my-form__button" type="submit">Sign Up</button>
                    <button class="my-form__button" type="button" id="login-button">Back to Login</button>
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
    </div> -->
 


                   <!-- <script> 

document.getElementById("signup-button").addEventListener("click", function() {
        document.getElementById("login-form").style.display = "none";
        document.getElementById("signup-form").style.display = "block";
    });

    document.getElementById("login-button").addEventListener("click", function() {
        document.getElementById("signup-form").style.display = "none";
        document.getElementById("login-form").style.display = "block";
    });
                  
                   </script> -->
</body>
</html>