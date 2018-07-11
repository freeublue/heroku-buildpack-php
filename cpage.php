<?
session_start();
include "nav1.php";

$contractor = $_SESSION[contractor];
if(isset($_SESSION[contractor]) ) { 
include "config.php";
include "lib.php";
echo "$contractor";
$us = cr($stp, $contractor, $action = 'enc');
       

$sql = "SELECT * FROM copro WHERE cp_userid = '$us'";
         $result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result))  { 
            $id = $row[cp_id];
            echo "id $id";
$chkin = $row[address]; }} 
if($chkin == 'Y') { 
$status = 'You are checked in to accept work'; } else { 
$status = 'You must check in to accept work'; } 



echo "<div class='ppfull'><center><div class='header'>Contractor Page $id<br />Details Below.</div><p>Every hour you work adds to your income.</p></div></center>
<center><div class='header1'>Orders and Earnings</div></center>
<center><p></p></center><div class='pp66'><ul style='list-style:none;'><li><a class='buttonsmallx' href='cpage.php'>Dashboard</a></li>
<li><a class='buttonsmallx' href='contdetails.php'>Personal Details</a></li>
<li><a class='buttonsmallx' href='contchangepassword.php'>Password Details</a></li>
<li><a class='buttonsmallx' href='checkin.php'>Check-in</a></li>
<li><a class='buttonsmallx' href='contord1.php'>New orders</a></li>
<li><a class='buttonsmallx' href='contord2.php'>Orders in progress</a></li>
<li><a class='buttonsmallx' href='contord3.php'>Completed Orders</a></li>
<li><a class='buttonsmallx' href='csales.php'>Your earnings</a></li>
<li><a class='buttonsmallx' href='contpay.php'>Request Payout</a></li>
<li><a class='buttonsmallx' href='contlogout.php'>Logout</a></li>
</ul></div><div class='pp55'><div class='header1'>$status</div><p><a href='checkin.php' class='buttonsmall'>Change Status</a></p></div>
<div class='image12'><center><img  src='images/pic01.jpg' /></center></div></center>
</body>"; } 
else { 
echo "Please Login";
} 
?>
