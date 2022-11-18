<?php 
include_once 'header.php';  

include_once 'navbar.php';  ?>

    <div class="container mt-5">
        <h4>Participants</h4>
        <table class="table table-striped">
          <thead class="bg-info">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Full Name</th>
              <th scope="col">Team</th>
              <th scope="col">QR Code</th>
          </tr>
      </thead>
      <tbody>
        <?php
        showParticipants(); 
        ?>
  </tbody>
</table>


</div>    
</body>
</html>