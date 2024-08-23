<?php
    session_start(); // Start the session
    if(!isset($_SESSION['userid'])) {
        header("Location: login.php"); // Redirect to login if not logged in
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Success</title>
</head>
<body style="background-color: #343a40; color: white; text-align: center;">
    <h1>Welcome, <?php echo $_SESSION['userid']; ?>!</h1>
    <p>Login successful!</p>
    <a href="login.php" style="color: yellow; font-weight: bold;">Logout</a>
    
</body>
</html>
