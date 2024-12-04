<?php 

$con =mysqli_connect("localhost","root","","project");

$id = $_GET['id'];


$query="delete from register where id= $id";

$result=mysqli_query($con,$query);

if(!$result){
    $error ="Not Registered";
}
else{
    $message="Registered Successfully";
    header("location:view-profile.php");
}

?>