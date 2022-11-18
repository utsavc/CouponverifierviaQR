<?php 
include_once 'header.php';  

include_once 'navbar.php'; ?>

    <div class="container mt-5">
        <div class="text-center">
            <?php 
            getDetails($_GET['id']);
            ?>
        </div>
        <div class="row mt-5">
            <div class="col-md-3 text-center">
                <div class="bg-info p-5 text-white">
                    <h2>Breakfast</h2>
                    <?php
                    $id=$_GET['id'];

                    $coupon_date=date("d/m/Y");
                    $sql="SELECT * FROM food_status where food='breakfast' and coupon_date='$coupon_date' and user_id='$id'" ;
                    getStatus($sql,"breakfast",$id);
                    ?>
                </div>
            </div>

            <div class="col-md-3 text-center">
                <div class="bg-primary p-5 text-white">
                    <h2>Lunch</h2>   

                    <?php
                    $sql="SELECT * FROM food_status where food='lunch' and coupon_date='$coupon_date' and user_id='$id' " ;
                    getStatus($sql,"lunch",$id);
                    ?>
                </div>
            </div>

            <div class="col-md-3 text-center">
                <div class="bg-warning p-5 text-white">
                    <h2>Snacks</h2>   
                    <?php 
                    $sql="SELECT * FROM food_status where food='snacks' and coupon_date='$coupon_date' and user_id='$id' " ;
                    getStatus($sql,"snacks",$id);
                    ?>
                </div>
            </div>
            
            <div class="col-md-3 text-center">
                <div class="p-5 text-white" style="background-color: #23a4db">
                    <h2>Dinner</h2> 

                    <?php 
                    $sql="SELECT * FROM food_status where food='dinner' and coupon_date='$coupon_date' and user_id='$id' " ;
                    getStatus($sql,"dinner",$id);
                    ?> 
                </div> 
            </div>

        </div>

    </div>    
</body>
</html>