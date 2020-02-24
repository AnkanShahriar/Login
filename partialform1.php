<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  



<?php

include_once("user_data_access.php");


$nameErr = $emailErr = $dateErr ="";
$name = $email = $date="";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if (empty($_POST["name"]))
  {
    $nameErr = "Name is required";
  }
  else
  {
    $name = $_POST["name"];
  }
  
  if (empty($_POST["email"]))
  {
    $emailErr = "Email is required";
  }
  else
  {
    $email = $_POST["email"];
  }
    
  if (empty($_POST["d1"]) || empty($_POST["d2"])|| empty($_POST["d3"]))
  {
    $dateErr = "Date is required";
  } 
  else 
  {
    $date = $_POST["d1"]."/".$_POST["d2"]."/".$_POST["d3"];
  }


}


?>

<h2>My Form </h2>
<p><span class="error">*Please fill up the form</span></p>
<form method="post" action="partialform2.php">  
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="email" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Date: <input type="text" name="d1">/day <input type="text" name="d2"> /month <input type="text" name="d3"> /year
  <span class="error">*<?php echo $dateErr;?></span>
  <br><br>

 
  
  
  <input type="submit" name="submit" value="Submit">  
</form>








</body>
</html>

