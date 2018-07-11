<?
session_start();
include "nav1.php";
$contractor = $_SESSION[contractor];
if(isset($_SESSION[contractor]) ) { 
echo "$contractor";
include "config.php";
include "lib.php";
echo"<div class='ppfull'><center><div class='header'>Contractor Page<br />Details Below.</center></div><div class='pp66'><ul><li><a class='buttonsmallx' href='cpage.php'>Dashboard</a></li>
<li><a style='text-decoration:none;' href='contdetails.php'>Personal Details</a></li>
<li><a href='contchangepassword.php'>Password Details</a></li>
<li><a href='checkin.php'>Check-in</a></li>
<li><a href='contord1.php'>New orders</a></li>
<li><a href='contord2.php'>Orders in progress</a></li>
<li><a href='contord3.php'>Completed Orders</a></li>
<li><a href='csales.php'>Your earnings</a></li>
<li><a href='contpay.php'>Request Payout</a></li>
<li><a href='contlogout.php'>Logout</a></li>
</ul></div><div class='pp55'>";
$us = cr($stp, $contractor, $action = 'enc');
       

$sql = "SELECT * FROM copro WHERE cp_userid = '$us'";
         $result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result))  { 
            $id = $row[cp_id];
$chkin = $_POST[chkin];
echo "$chkin<br />"; } 

$q = "UPDATE copro SET address = '$chkin' WHERE cp_id = '$id'";
if (mysqli_query($conn, $q))
  {
  echo "You are Checked In to work";
  }
else
  {
  echo "Error Updating table: " . mysqli_error($conn); } } 
  echo "</div></body>"; } else { 
  echo "Login"; } 
  ?>

