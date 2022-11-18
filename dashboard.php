<?php 
include_once 'header.php';  

include_once 'navbar.php';  ?>

    <div class="container mt-5">
        <div class="row mt-5 gx-5">

            <div class="col-lg-3 text-center">
                <a href="participants.php" class="text-white">
                    <div class="p-5 bg-primary">
                        <i class="fas fa-users fa-2xl"></i> <br>
                        <?php echo Counter('Participant'); ?> Participants
                    </div>
                </a>
            </div>
            <div class="col-lg-3  text-center">
                <a href="mentor.php" class="text-white"><div class="p-5 bg-success">
                    <i class="fas fa-chalkboard-teacher"></i> <br>
                        <?php echo Counter('Mentor'); ?> mentors
                </div>
            </a>
            </div>
            <div class="col-lg-3  text-center ">
               <a href="judge.php" class="text-white"> <div class="p-5 bg-info">
                    <i class="fas fa-gavel"></i><br>
                        <?php echo Counter('Judge'); ?> Judges
                </div>
            </a>
            </div>
            <div class="col-lg-3  text-center">
                <a href="staff.php" class="text-white"><div class="p-5 bg-danger">
                    <i class="fas fa-clipboard-user"></i><br>
                        <?php echo Counter('Staff'); ?> Staffs
                </div>
            </a>
            </div>
        </div>
    </div>


</div>    
</body>
</html>