<?php
session_start(); // Start the session

if (!isset($_SESSION["isuserloggedin"])) {
    // Redirect to the login page if the user is not logged in
    header("Location: signuplogin.php");
    exit();
}

$username = ""; // Initialize the username variable

if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>My Account - Rebliva</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
        }

        h2 {
            font-size: 24px;
        }

        p {
            font-size: 16px;
        }
    </style>
</head>
<body>
    <?php
    include 'header.php'; // Include the header with navigation links based on login status
    ?>

  <?php

  // Function to read user data from JSON file
  function getUsers() {
      $usersFile = 'users.json';

      if (file_exists($usersFile)) {
          $usersData = file_get_contents($usersFile);
          return json_decode($usersData, true);
      }

      return [];
  }

  // Function to get user data from JSON file by username
  function getUserByUsername($username) {
      $users = getUsers();

      foreach ($users as $user) {
          if ($user["username"] == $username) {
              return $user;
          }
      }

      return null;
  }
  ?>

    <div class="container main-content">
        <h2>Welcome, <?php echo $username; ?>!</h2>
        <p>Here's your account information:</p>
        <h3>Your Bio:</h3>
      <?php
      $user = getUserByUsername($_SESSION["username"]);
      $currentBio = isset($user["bio"]) ? $user["bio"] : 'No bio available.';
      echo nl2br($currentBio);
      ?>

        <h3>Update Bio:</h3>
        <form method="post" action="update_bio.php">
            <label for="bio">Bio:</label>
            <textarea name="bio" rows="4" cols="50" placeholder="Enter your new bio..."></textarea>

            <button type="submit">Submit</button>
        </form>
    </div>

</body>
</html>

