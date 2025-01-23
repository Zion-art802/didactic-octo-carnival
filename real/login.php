<?php
session_start();

// Check if user session exists, redirect to home page if true
if (isset($_SESSION['user'])) {
    header("Location: home.php");
    exit(); // Added exit to stop further script execution
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
            <form action="logInProcess.php" method="post">
                <div class="field input">
                    <input type="email" placeholder="Email" name="email" 
                        value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>" required>
                </div>

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" placeholder="Password" name="password" required>
                </div>

                <div class="field">
                    <input type="submit" name="submit" class="btn" value="Login">
                </div>

                <div class="links">
                    Don't have an account? <a href="register.php">Signup</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
