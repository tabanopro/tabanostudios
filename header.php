<?php 
  echo("<p style='background-color: black; color: white;'>This site is under testing</p>")
?> 
<header>
  <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    header {
        background-color: #333;
        color: #fff;
        padding: 10px 0;
        text-align: center;
    }

    header a {
        color: #fff;
        text-decoration: none;
        margin: 0 15px;
        padding: 0 10px; /* Add padding to create space */
        border-right: 1px solid #fff; /* Add a white border on the right side of each button */
        border-radius: 10px; /* Add rounded corners to the borders */
    }

    header a:last-child {
        border-right: none; /* Remove the border from the last menu item */
    }

    header a:hover {
        border-color: #0056b3; /* Change the border color on hover to a darker shade */
    }

    header .logo {
        font-size: 24px;
        font-weight: bold;
    }

    .container {
        width: 80%;
        margin: 0 auto;
        padding: 20px;
    }

    .main-content {
        text-align: center;
        padding: 40px;
    }

    .button {
        background-color: #007bff;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        text-decoration: none;
    }

    .button:hover {
        background-color: #0056b3;
    }

    .button.no-link {
        cursor: default; /* Change the cursor to default, making it non-clickable */
    }
  </style>
   <div class="container">
       <a href="index.php" class="logo">Tabano Studios</a>
       <a href="index.php">Home</a>
       <a href="bot.php">Blog</a>
       <a href="about.php">Projects</a>

       <?php
      //session_start(); // needs to be at the top (already implemtned)

if (isset($_SESSION["isuserloggedin"])) {
   if ($_SESSION["isuserloggedin"]) {
       // User is logged in, display the whaaccount and logout links
       echo '<a href="account.php">My Account</a>';
       echo '<a href="logout.php">Logout</a>';
   } else {
       // User is not logged in, show the login and signup links
       echo '<a href="signuplogin.php">Log in</a>';
       echo '<a href="signuplogin.php">Sign Up</a>';
   }
} else {
  // User is not logged in, show the login and signup links
  echo '<a href="signuplogin.php">Log in</a>';
  echo '<a href="signuplogin.php">Sign Up</a>';
}
       ?>
   </div>
</header>
