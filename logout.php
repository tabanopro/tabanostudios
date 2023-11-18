<?php
  session_start();
  if ($_SESSION["isuserloggedin"]) {
    session_destroy();
    header("Location: index.php");
  
  } else {
    echo("Invalaid user.");
    session_destroy();
    header("Location: index.php");
  }
?>