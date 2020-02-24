<?php

session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php

include_once("user_data_access.php");


$_SESSION["name"] = $_POST["name"];
echo "<br>";

echo $_SESSION["name"];

echo "<br>";

$_SESSION["email"] = $_POST["email"];

echo "<br>";
echo $_SESSION["email"];

echo "<br>";
$_SESSION["date"] = $_POST["d1"]."/".$_POST["d2"]."/".$_POST["d3"];
echo "<br>";

echo $_SESSION["date"];
echo "<br>";


?>

<?php
$genderErr= $pErr= $bloodErr="";
$gender = $password = $date = $blood="";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  

  if (empty($_POST["password"]))
  {
    $pErr = "passsword is required";
  }
  else
  {
    $degree = $_POST["password"];
  }

  if (empty($_POST["gender"]))
  {
    $genderErr = "Gender is required";
  }
  else 
  {
    $gender = $_POST["gender"];
  }
  if (empty($_POST["blood"])) 
  {
    $bloodErr = "blood is required";
  } 
  else
  {
    $blood = $_POST["blood"];
  }
}


?>


<form method="post" action="page3.php">
 Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload"> <br>
Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
   Password:
  <input type="text" name="password">
  
  <span class="error">* <?php echo $pErr;?></span>
  <br><br>
  
   BloodGroup:
   <select name="blood">
  <option value="A+">A+</option>
  <option value="B+">B+</option>
  <option value="AB+">AB+</option>
  <option value="O+">O+</option>
  <option value="A-">A-</option>
  <option value="B-">B-</option>
  <option value="AB-">AB-</option>
  <option value="O-">O-</option>
  </select>
  
  
  <span class="error">* <?php echo $bloodErr;?></span>
  <br><br>
  
  
  <input type="submit" name="submit" value="Submit">  
</form>





<a href="tc.php"> see session </a>

</body>
</html>