<?php

include_once("user_data_access.php");


session_start();
?>
<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    
        echo "File is up.";
        $uploadOk = 0;
    }



?>
<!DOCTYPE html>
<html>
<body>




<?php


 $_SESSION["blood"]=$_POST["blood"];


 $_SESSION["gender"]=$_POST["gender"];
 

 $_SESSION["password"]=$_POST["password"];


?>



<?php




$name= $_SESSION["name"];
$email=$_SESSION["email"];
$date=$_SESSION["date"];
$gender=$_SESSION["gender"];
$password=$_SESSION["password"];
$blood=$_SESSION["blood"];

function addNewUser($name,$email,$date,$gender,$password,$blood)
{
    if($name=="" || $email==""){

}
    $user=array("name"=>$name,"email"=>$email,"date"=>$date,"gender"=>$gender,"password"=>$password,"blood"=>$blood);
    return addUser($user);
}

addNewUser($name,$email,$date,$gender,$password,$blood);








    
	
?>

</body>
</html>