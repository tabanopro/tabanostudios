<?php
  session_start()
?>
<!DOCTYPE html>
<html>
<head>
    <title>Rebliva Home</title>
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
</head>
<body>


  <?php include 'header.php';?>

  <div class="container">
      <h1>Welcome to Rebliva</h1>
      <p>Your content goes here...</p>
      <a href="learn_more.php" class="button">Learn More</a>
  </div>
    </div>
</body>
</html>
