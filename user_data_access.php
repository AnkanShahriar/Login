<?php


function executeNonQuery($query)
{
	$servername = "localhost";
$username = "root";
$password ="";
$dbname = "userdb";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql =$query;

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}

?>


<?php


function addUser($user)
{
    $query="INSERT INTO users(name,email,date,gender,password,blood) VALUES('$user[name]','$user[email]','$user[date]','$user[gender]','$user[password]','$user[blood]')";
     executeNonQuery($query);
}
function editUser($user)
{
    $query="UPDATE users SET name='$user[name]',email='$user[email]' WHERE id=$user[id]";
    return executeNonQuery($query);
}
function deleteUser($id)
{
    $query="DELETE FROM users WHERE id=$id";
    return executeNonQuery($query);
}
function getUserById($id)
{
    $query="SELECT * FROM users WHERE id=$id";
    $result=executeQuery($query);
    $user=null;
    if($result){
        $user=mysqli_fetch_assoc($result);
    }
    return $user;
}

function getAllUser()
{
    $query="SELECT * FROM users";
    $result=executeQuery($query);
    $userList=array();
    if($result){
       for ($i=0; $row =mysqli_fetch_assoc($result) ; $i++) { 
           $userList[$i]=$row;
       }
    }
    return $userList;
}

?>


