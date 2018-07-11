<?
session_start();
$foo = $_SERVER[SERVER_NAME];

if($foo === 'laundrybymagic.herokuapp.com') { 
include "nav1.php";
$customer = $_SESSION[customer];
if(isset($_SESSION[customer]) ) { 
include "config.php";
include "lib.php";
echo "$contractor";
$us = base64_encode(numm($customer) );
       

$sql = "SELECT * FROM cust WHERE cu_phone_mobile = '$us'";
         $result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result))  { 
            $id = $row[cu_id];
            echo "id $id<br />";
            $fname = base64_decode($row[cu_fname]);
 } } 



echo "<div class='ppfull'><center><div class='header'>Client $fname<br />Details Below.</div><p>Check your order status.</p></div></center>
<center><div class='header1'>Orders</div></center>
<center><p></p></center><div class='pp66'><ul style='list-style:none;'><li><a class='buttonsmallx' href='ypage.php'>Dashboard</a></li>
<li><a class='buttonsmallx' href='addcustomer.php'>Collection Details</a></li>
<li><a class='buttonsmallx' href='custchangepassword.php'>Password Details</a></li>
<li><a class='buttonsmallx' href='ord1.php'>New orders</a></li>
<li><a class='buttonsmallx' href='ord2.php'>Orders in progress</a></li>
<li><a class='buttonsmallx' href='ord3.php'>Completed Orders</a></li>

<li><a class='buttonsmallx' href='contlogout.php'>Logout</a></li>
</ul></div><div class='pp55'><div class='header1'>$status</div><p><a href='map/geo5.php' class='buttonsmall'>Book A Wash</a></p></div>
<div class='image12'><center><img  src='images/pic01.jpg' /></center></div></center>
</body>"; } 
else { 
echo "Please Login";
} } else { 
echo " "; } 
?>
