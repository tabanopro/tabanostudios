<?php
session_start();

// Function to update user bio in JSON file
function updateUserBio($username, $newBio) {
    $users = getUsers();

    foreach ($users as &$user) {
        if ($user["username"] == $username) {
            $user["bio"] = $newBio;
            break;
        }
    }

    file_put_contents('users.json', json_encode($users));
}

// Function to read user data from JSON file
function getUsers() {
    $usersFile = 'users.json';

    if (file_exists($usersFile)) {
        $usersData = file_get_contents($usersFile);
        return json_decode($usersData, true);
    }

    return [];
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user input
    $newBio = $_POST["bio"];
    $username = $_SESSION["username"];

    // Update user bio
    updateUserBio($username, $newBio);

    // Redirect back to the account page after updating bio
    header("Location: account.php");
    exit();
}
?>