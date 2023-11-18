<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user input
    $username = $_POST["login-username"];
    $password = $_POST["login-password"];

    // Retrieve the stored user data (including the hashed password) from your storage
    $users = getUsers();

    // Find the user by username
    $user = null;
    foreach ($users as $storedUser) {
        if ($storedUser["username"] == $username) {
            $user = $storedUser;
            break;
        }
    }

    // Check if the user exists and the password is correct
    if ($user && password_verify($password, $user["password"])) {
        // Set session variables
        $_SESSION["username"] = $username;
        $_SESSION["isuserloggedin"] = true;

        // Password is correct, redirect to account page
        header("Location: account.php");
        exit();
    } else {
        // Invalid username or password, show an error message
        $errorMessage = "Invalid username or password";
    }
}

function getUsers() {
    $usersFile = 'users.json';

    if (file_exists($usersFile)) {
        $usersData = file_get_contents($usersFile);
        return json_decode($usersData, true);
    }

    return [];
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Login - Rebliva</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <p>Username: <?php echo $_SESSION["username"]; ?></p>
    </div>
</body>
</html>
