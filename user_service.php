<?php
include_once("db.php");
include_once("user_data_access.php");

function addNewUser($name,$email)
{
    if($name=="" || $email==""){

}
    $user=array("name"=>$name,"email"=>$email);
    return addUser($user);
}
function updateUser($id,$name,$email)
{
    $user=array("id"=>$id,"name"=>$name,"email"=>$email);
    return editUser($user);
}
function removeUser($id)
{
    return deleteUser($id);
}
function loadAllUser()
{
    return getAllUser();
}
function loadUser($id)
{
    return getUserById($id);
}
?>