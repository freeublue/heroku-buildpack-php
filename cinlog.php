<?php
session_start();
$foo = $_SERVER[SERVER_NAME];
if(EMPTY($_POST["mobile"]) ) { 
echo "Uername must be supplied"; } 
elseif(EMPTY($_POST["password"]) ) { 
echo "Password must be supplied"; } else { 
$mobile = $_POST[mobile];
$pass = trim($_POST[password]);


include "config.php";
include "lib.php";

$us = cr($stp, $mobile, $action = 'enc');
$q = "SELECT * FROM copro WHERE cp_userid = '$us'";
$res = mysqli_query($conn, $q);
if(mysqli_num_rows($res) > 0) { 
while($ro = mysqli_fetch_assoc($res)) { 

$ps = $ro[cp_pass];
 } } 

if($ps == crypt($_POST['password'], $ps)) { 

$_SESSION[contractor] = $mobile;

echo "<a style='width:300px;height:200px;position:absolute;top:200px;left:300px;background:black;color:white;border:1px solid gray;border-radius:15%;padding:30px;font-size:40px;' href='cpage.php'>Click Here To Proceed to your account</a>"; 


} else { 
echo "Incorrect please try again"; } } 



?>

