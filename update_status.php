<?php 
include_once 'dbconnection.php';  


//include_once'../functions.php';
if (!isset($_SESSION['loggedin'])) {
    header('location:index.php');   
}


$food=$_GET['food'];
$id=$_GET['id'];


$sql="UPDATE food_status set $food='done' where user_id=$id";

updateStaus($sql,$id);

?>