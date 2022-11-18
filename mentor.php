<?php 
include_once 'header.php';  

include_once 'navbar.php';  ?>

<div class="container mt-5">
  <h4>Mentor</h4>
  <table class="table bg-light table-striped">
    <thead class="bg-info">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Full Name</th>
        <th scope="col">QR Code</th>
      </tr>
    </thead >
    <tbody >

     <?php
     showUser("mentor"); 
     ?>
   </tbody>
 </table>


</div>    
</body>
</html>