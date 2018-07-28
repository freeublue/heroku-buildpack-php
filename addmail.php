<?php
include "config.php";
include "lib.php";

$ema1 = $_REQUEST[mail];
 $str = trim($_REQUEST[nam]);
 $str1 = str_replace(' ', '', $str);
 $y = ctype_alpha($str1);
 echo "$str ";
$ema6 = cr($stp, $_REQUEST["mail"], $action = "enc");
$sq = "SELECT * FROM nleta WHERE nl_ema = '$ema6'";
$result = mysqli_query($conn, $sq);
if (mysqli_num_rows($result) > 0) { 

echo "That address already exists, select another";
 } 
 
elseif(EMPTY($_REQUEST[nam]) ) { 
echo "PLEASE SUPPLY A NAME"; } 
elseif(EMPTY($_REQUEST[mail])) { 
echo "PLEASE SUPPLY EMAIL";

} 
 elseif($y != 1) { 
echo "Name must contain letters only.<br />"; 
        } 

else {

$name = $_REQUEST[nam];

$ema2 = $_REQUEST[mail];
$ema = cr($stp, $_REQUEST["mail"], $action = "enc");
$qs = "INSERT INTO nleta(nl_name, nl_ema, nl_status) VALUES('$name', '$ema', '1')";
$res = mysqli_query($conn, $qs);
echo "Thank you for your subscription. Please click on the link which has been sent to your email to confirm";


 } 
 ?>