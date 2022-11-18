<?php 
include_once 'dbconnection.php';  


//include_once'../functions.php';
if (!isset($_SESSION['loggedin'])) {
    header('location:index.php');   
}


$food=$_GET['food'];
$id=$_GET['id'];


$coupon_date=date("d/m/Y");
$sql="INSERT into food_status set food='$food',user_id=$id,coupon_date='$coupon_date'";


updateStaus($sql,$id);

?>