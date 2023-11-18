<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user input
    $username = $_POST["signup-username"];
    $password = $_POST["signup-password"];

    // Check if the username already exists
    if (isUsernameTaken($username)) {
        $errorMessage = "Username already exists. Please choose another.";
    } else {
        // Hash the password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Save the user data (including the hashed password) to your storage (e.g., JSON file or database)
        $user = [
            "username" => $username,
            "password" => $hashedPassword,
            "isadmin" => false
            // other user data...
        ];

        // Save the user to your storage (e.g., JSON file or database)
        // For simplicity, this example uses a JSON file
        $users = getUsers();
        $users[] = $user;
        saveUsers($users);

        // Set session variables
        $_SESSION["username"] = $username;
        $_SESSION["isuserloggedin"] = true;

        // Redirect to account page after signup
        header("Location: account.php");
        exit();
    }
}

function isUsernameTaken($username) {
    $users = getUsers();

    foreach ($users as $user) {
        if ($user["username"] == $username) {
            return true; // Username is already taken
        }
    }

    return false; // Username is available
}

function getUsers() {
    $usersFile = 'users.json';

    if (file_exists($usersFile)) {
        $usersData = file_get_contents($usersFile);
        return json_decode($usersData, true);
    }

    return [];
}

function saveUsers($users) {
    $usersFile = 'users.json';
    file_put_contents($usersFile, json_encode($users));
}
?>



<!DOCTYPE html>
<html>
<head>
    <title>Sign Up - Rebliva</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Sign Up</h2>
        <p>Username: <?php echo $_SESSION["username"]; ?></p>
    </div>
</body>
</html>
