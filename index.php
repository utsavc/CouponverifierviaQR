<?php include_once 'dbconnection.php' ;

//include_once'../functions.php';
if (isset($_SESSION['loggedin'])) {
    header('location:dashboard.php');   
}  

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <title>BIC Hackathon</title>
</head>
<body style="background: #58c6f5;">
    <div class="container mt-5">
        <div class="row m-2">



            <div class="col-lg-8 bg-white p-5 rounded m-auto">
                <div class="text-center">
                    <img src="bg.jpg" class="rounded" style="height: 50px;">
                    
                </div>
                <div class="text-center mb-4" id="typed-strings">
                    <p>BIC Hackathon Coupon Verifier</p>
                    <p>Login to Continue</p>
                </div>
                <div class="text-center text-info">                    
                    <span id="typed"></span>
                </div>
                <form action="" method="post" autocomplete="off">
                  <div class="mb-3">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="mb-3">
                    <label >Password</label>
                    <input type="password" name="password" class="form-control">
                </div>

                <?php
                if (isset($_GET['error'])) {
                    msg('Error Username or Password','danger');
                }
                ?>

                <button type="submit" name="login" class="btn btn-sm btn-primary">Log in</button>
            </form>
        </div>

    </div>
</div>

<script>
    var typed = new Typed('#typed', {
      stringsElement: '#typed-strings',
      loop: true,
      loopCount: Infinity,
      typeSpeed:60,
      backSpeed:10,
      fadeOut: true,
      fadeOutClass: 'typed-fade-out',
      fadeOutDelay: 500,
  });
</script>


</div>    
</body>
</html>

<?php 
if(isset($_POST['login'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $val=userLogin($username,$password);
    if($val==true){
        $_SESSION['loggedin']=true;
        header('location:dashboard.php');
    }else{
        header('location:index.php?error');
    }
}
?>