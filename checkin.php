<?
session_start();
include "nav1.php";
if(isset($_SESSION[contractor]) ) { 
$contractor = $_SESSION[contractor];
echo "$contractor";

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
</ul></div><div class='pp55'><form action='processcheckin.php' method='post'>
<select name='chkin'>
<option value='Y'>Check-In</option>
<option value='N'>Check-Out</option>
</select>
<input type='submit' name='submit' value='submit' /></form></div></div></body>"; } 
else { 
echo "Please Login"; } 
?>