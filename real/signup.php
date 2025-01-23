<?php
session_start();

// Check if user session exists, redirect to home page if true
if (isset($_SESSION['user'])) {
    header("Location: ./home.php");
    exit(); // Added exit to prevent further script execution
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
require_once "./db/signupProcess.php";
?>

<div class="container">
    <div class="box form-box">
        <header>Sign Up</header>
        <form action="" method="post">
            <div class="field input">
                <input type="text" placeholder="Firstname" name="firstname" 
                       value="<?php echo isset($_POST['firstname']) ? htmlspecialchars($_POST['firstname']) : ''; ?>" required>
            </div>

            <div class="field input">
                <input type="text" placeholder="Lastname" name="lastname" 
                       value="<?php echo isset($_POST['lastname']) ? htmlspecialchars($_POST['lastname']) : ''; ?>" required>
            </div>

            <div class="field input">
                <input type="text" placeholder="Username" name="username" 
                       value="<?php echo isset($_POST['username']) ? htmlspecialchars($_POST['username']) : ''; ?>" required>
            </div>

            <div class="field input">
                <input type="email" placeholder="Email" name="email" 
                       value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>" required>
            </div>

            <div class="field input">
                <input type="password" placeholder="Password" name="password" required>
            </div>

            <div class="field input">
                <input type="password" placeholder="Confirm Password" name="confirm" required>
            </div>

            <div class="field">
                <input type="submit" name="submit" class="btn" value="Sign Up">
            </div>

            <div class="links">
                Already a member? <a href="login.php">Login</a>
            </div>
        </form>
    </div>
</div>

</body>
</html>
