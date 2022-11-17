<?php 
include_once 'dbconnection.php';  


//include_once'../functions.php';
if (!isset($_SESSION['loggedin'])) {
    header('location:index.php');   
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <title>BIC Hackathon</title>
</head>
<body style="background: #58c6f5;">

    <?php include_once 'navbar.php' ?>

    <div class="container mt-5">
        <div class="text-center">
            BIC hackathon v2.0 token verifier
            <h1>Utsav Mahato</h1>
            <span>Participant</span>
        </div>
        <div class="row mt-5">
            <div class="col-md-3 text-center border p-5 bg-white">
                <h2>Breakfast</h2>
                <?php
                $id=$_GET['id'];

                $coupon_date=date("d/m/Y");
                $sql="SELECT * FROM food_status where breakfast='done' and coupon_date='$coupon_date' and user_id='$id'" ;
                getStatus($sql,"breakfast",$id);
                ?>
            </div>

            <div class="col-md-3 text-center border p-5 bg-white">
                <h2>Lunch</h2>   

                <?php
                $sql="SELECT * FROM food_status where lunch='done' and coupon_date='$coupon_date' and user_id='$id' " ;
                getStatus($sql,"lunch",$id);
                ?>
            </div>

            <div class="col-md-3 text-center border p-5 bg-white">
                <h2>Snacks</h2>   
                <?php 
                $sql="SELECT * FROM food_status where snacks='done' and coupon_date='$coupon_date' and user_id='$id' " ;
                getStatus($sql,"snacks",$id);
                ?>
            </div>
            
            <div class="col-md-3 text-center border p-5 bg-white">
                <h2>Dinner</h2> 

                <?php 
                $sql="SELECT * FROM food_status where dinner='done' and coupon_date='$coupon_date' and user_id='$id' " ;
                getStatus($sql,"dinner",$id);
                ?>  
            </div>

        </div>

    </div>    
</body>
</html>