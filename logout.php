
<?php
//date_default_timezone_set('Asia/Kathmandu');
//echo date("d/m/Y")."<br />";
session_start();
session_destroy();
header('location:index.php');
?> 
