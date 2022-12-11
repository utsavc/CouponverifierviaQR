<?php 
include_once 'header.php';  

include_once 'navbar.php';  ?>

    <div class="container mt-5">
        <div class="row mt-5">

            <div class="col-lg-3"></div>

            <div class="col-lg-6 p-5" style="background: lightblue;">
                <form action="" method="post" autocomplete="off">
                  <div class="mb-3">
                    <label>Full Name</label>
                    <input type="text" name="username" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label >Team</label>
                    <input type="text" name="team" class="form-control">
                </div>

                <div class="mb-3">
                    <select class="form-select" name="designation" required>
                        <option value="Participant">Participant</option>
                        <option value="Staff">Staff</option>
                        <option value="Mentor">Mentor</option>
                        <option value="Judge">Judge</option>
                        <option value="volunteer">Volunteer</option>
                        <option value="coreTeam">Core Team</option>
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