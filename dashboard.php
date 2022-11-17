<?php include_once 'dbconnection.php'  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/c910f89d79.js" crossorigin="anonymous"></script>
    <title>BIC Hackathon</title>
</head>
<body style="background: #58c6f5;">

    <?php include_once 'navbar.php' ?>

    <div class="container mt-5">
        <div class="row mt-5 gx-5">

            <div class="col-lg-3 text-center">
                <a href="participants.php" class="text-white">
                    <div class="p-5 bg-primary">
                        <i class="fas fa-users fa-2xl"></i> <br>
                        10 Participants
                    </div>
                </a>
            </div>
            <div class="col-lg-3  text-center">
                <a href="mentor.php" class="text-white"><div class="p-5 bg-success">
                    <i class="fas fa-chalkboard-teacher"></i> <br>
                    5 mentors
                </div>
            </a>
            </div>
            <div class="col-lg-3  text-center ">
               <a href="judge.php" class="text-white"> <div class="p-5 bg-warning">
                    <i class="fas fa-gavel"></i><br>
                    3 Judges
                </div>
            </a>
            </div>
            <div class="col-lg-3  text-center">
                <a href="staff.php" class="text-white"><div class="p-5 bg-danger">
                    <i class="fas fa-clipboard-user"></i><br>
                    4 Staffs
                </div>
            </a>
            </div>
        </div>
    </div>


</div>    
</body>
</html>