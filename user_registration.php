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
    <script src="https://use.fontawesome.com/162d843413.js"></script>
    <title>BIC Hackathon</title>
</head>
<body style="background: #58c6f5;">

    <?php include_once 'navbar.php' ?>

    <div class="container mt-5">
        <div class="row mt-5">

            <div class="col-lg-3"></div>

            <div class="col-lg-6 bg-white p-5">
                <form action="" method="post" autocomplete="off">
                  <div class="mb-3">
                    <label>Full Name</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="mb-3">
                    <label >Team</label>
                    <input type="text" name="team" class="form-control">
                </div>

                <div class="mb-3">
                    <select class="form-select" name="designation">
                        <option value="Participant">Participant</option>
                        <option value="Staff">Staff</option>
                        <option value="Mentor">Mentor</option>
                        <option value="Judge">Judge</option>
                    </select>
                </div>

                <button type="submit" name="register" class="btn btn-sm btn-primary">Submit</button>
            </form>
        </div>

        <div class="col-lg-3"></div>
    </div>
</div>


</div>    
</body>
</html>

<?php 
if(isset($_POST['register'])){
    $username=$_POST['username'];
    $team=$_POST['team'];
    $staff=$_POST['designation'];
    $val=userInsert($username,$team,$staff);
    if($val==true){
     echo '<script>alert("Registered!!")</script>';
 }else{
    header('location:user_registration.php?error');
}
}
?>