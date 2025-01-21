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
    <title>Register</title>
</head>
<body>


        <?php
    require_once "./db/signupProcess";
        ?>

    <div class="container">
        <div class="box form-box">
            <header>Sign Up</header>
            <form action="" method="post">
                <div class="field input">
                <input type="text" placeholder="Firstname" name="firstname" value="<?php echo isset($_POST['firstname']) ? $_POST['firstname']: "" ?>">
                </div>

                <div class="field input">
                <input type="text" placeholder="Lastname" name="lastname" value="<?php echo isset($_POST['lastname']) ? $_POST['lastname']: "" ?>"><br>
                </div>

                <div class="field input">
                <input type="text" placeholder="Username" name="username" value="<?php echo isset($_POST['username']) ? $_POST['username']: "" ?>"><br>
                </div>

                <div class="field input">
                <input type="email" placeholder="Email" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email']: "" ?>"><br>
                </div>

                <div class="field input">
                <input type="password" placeholder="Password" name="password"><br>
                </div>

                
                <div class="field input">
                <input type="password" placeholder="Confirm Password" name="confirm"><br>
                </div>

                <div class="field">
                    <input type="submit" name="submit" class="btn" value="Sign In" required >
                </div>
                <div class="links">
                   Already a member? <a href="login.php">Login</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>