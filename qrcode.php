<?php 
include_once 'header.php';  

include_once 'navbar.php'; 

//declare(strict_types=1);

include_once 'dbconnection.php';

$id=$_GET['id'];

use chillerlan\QRCode\QRCode;
use chillerlan\QRCode\QROptions;

require_once('vendor/autoload.php');

$options = new QROptions(
  [
    'eccLevel' => QRCode::ECC_L,
    'outputType' => QRCode::OUTPUT_MARKUP_SVG,
    'version' => 5,
  ]
);

$url="https://www.facebook.com/devendra.aanand?id=".$id;


$qrcode = (new QRCode($options))->render($url);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>Create QR Codes in PHP</title>
  <link rel="stylesheet" href="/css/styles.min.css">
</head>
<body>
  <div class="container mt-5 text-center">
    <img src='<?= $qrcode ?>' alt='QR Code' width='200' height='200'> <br> <br>

    <a href="home.php?id=<?php echo $_GET['id'] ?>" class="btn btn-sm btn-primary">Check Status</a>
  </div>
</body>
</html>
