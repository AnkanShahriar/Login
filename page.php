<?php

session_start();
?>

<?php
  $_SESSION["uname"]=$_POST["name"];
  $_SESSION["pass"]=$_POST["password"];


?>