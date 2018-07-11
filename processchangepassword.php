<?
session_start();
include "nav1.php";
$contractor = $_SESSION[contractor];
if(isset($_SESSION[contractor]) ) { 
include "config.php";
include "lib.php";


echo"<div class='ppfull'><center><div class='header'>Contractor Page<br />Details Below.</center></div><div class='pp66'><ul style='list-style:none;'><li><a class='buttonsmallx' href='cpage.php'>Dashboard</a></li>
<li><a class='buttonsmallx' href='contdetails.php'>Personal Details</a></li>
<li><a class='buttonsmallx' href='contchangepassword.php'>Password Details</a></li>
<li><a class='buttonsmallx' href='checkin.php'>Check-in</a></li>
<li><a class='buttonsmallx' href='contord1.php'>New orders</a></li>
<li><a class='buttonsmallx' href='contord2.php'>Orders in progress</a></li>
<li><a class='buttonsmallx' href='contord3.php'>Completed Orders</a></li>
<li><a class='buttonsmallx' href='csales.php'>Your earnings</a></li>
<li><a class='buttonsmallx' href='contpay.php'>Request Payout</a></li>
<li><a class='buttonsmallx' href='contlogout.php'>Logout</a></li>
</ul></div><div class='pp55'><p>";
 $newps = $_POST[newps];
$newpsagain = $_POST[newpsagain];

if($newps != $newpsagain) { 
echo "passwords do not match"; } else { 
$oldps = crypt($_POST[oldps]);
$cont = $_SESSION[contractor];
echo "$cont<br />";
$us = cr($stp, $cont, $action = 'enc');
$sql = "SELECT * FROM copro WHERE cp_userid = '$us'";
         $result = mysqli_query($conn, $sql);

            while($row = mysqli_fetch_assoc($result))  { 
$id = $row[cp_id];
$passs = $row[cp_pass];

if($passs == crypt($_POST['oldps'], $passs)) { 
echo "Your password has been updated"; 
$newps2 = crypt($newps); 

$sqq = "UPDATE copro SET cp_pass = '$newps2' WHERE cp_id = '$id'"; 
$res = mysqli_query($conn, $sqq);
} } } } else { 
echo "Please Login"; } 





  


?>