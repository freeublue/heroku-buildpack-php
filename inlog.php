<?php
session_start();
$foo = $_SERVER[SERVER_NAME];

if($foo === 'laundrybymagic.herokuapp.com') { 
$mobile = $_POST[mobile];
$pass = $_POST[password];

include "config.php";
include "lib.php";
$us = base64_encode(numm($mobile) );
$q = "SELECT * FROM cust WHERE cu_phone_mobile = '$us'";
$res = mysqli_query($conn, $q);
while($ro = mysqli_fetch_assoc($res)) { 


$numrows = count($ro[cu_phone_mobile]);

$ref = $ro[cu_ps];
echo "ref $ref";
} 
if ($numrows == 1) { 
$q = "SELECT * FROM str WHERE ca = '$ref'";
$re = mysqli_query($conn, $q);
while($ro = mysqli_fetch_assoc($re) ) { 


$ps = $ro[pf];

 } 

} 
if($ps == crypt($_POST['password'], $ps)) { 

$_SESSION[customer] = $mobile;

echo "<a style='width:300px;height:200px;position:absolute;top:200px;left:300px;background:black;color:white;border:1px solid gray;border-radius:15%;padding:30px;font-size:40px;' href='ypage.php'>Click Here To Proceed to your account</a>"; 


} else { 
echo "No that is not correct please try again or use <a href='lostpassword.php'>Lost Password</a>";

 } } else { 
echo " "; } 