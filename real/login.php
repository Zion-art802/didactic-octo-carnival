<?php

session_start();

// session_destroy();
// print_r($_SESSION);

if (isset($_SESSION['user'])) {
    // echo "ok";

    header("location: ./home.php");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="box form-box">
            <header>Login</header>
            <form action="logInProcess" method="post">
                <div class="field input">
                <input type="email" placeholder="Email" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email']: "" ?>"><br>
                </div>

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" placeholder="Password" name="password"><br>
                </div>

                <div class="field">
                    <input type="submit" name="submit" class="btn" value="Login" required >
                </div>
                <div class="links">
                    Don't have an account? <a href="register.php">Signup</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>