<?php
//no DB set up file as its automatic for online and offline settings
error_reporting(0);
$dbhost = "us-cdbr-iron-east-04.cleardb.net";
$dbname = "heroku_3336584ac2bc325";
$dbuser = "b181847c700112";
$dbpass = "5982e545";
  
         
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
   
?>

