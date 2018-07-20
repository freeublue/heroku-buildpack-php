<?
session_start();
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
<li><a class='buttonsmallx' href='ord1.php'>Confirmed orders. Not checkedout</a></li>
<li><a class='buttonsmallx' href='ord2.php'>Checkedout unpaid</a></li>
<li><a class='buttonsmallx' href='ord3.php'>Paid. Awaiting delivery</a></li>
<li><a class='buttonsmallx' href='ord4.php'>Tacking on current orders</a></li>
<li><a class='buttonsmallx' href='ord5.php'>Past orders</a></li>

<li><a class='buttonsmallx' href='logout.php'>Logout</a></li>
</ul></div><div class='pp55'><div class='header1'>Order Details</div><p>";
$sql = "SELECT * FROM orders WHERE or_clientid = '$id' AND or_status = '2'";
         $result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) { 
            $ornum = $row[or_num];
            $tot[] = $row[or_quantity] * $row[or_price];
            echo "<b>Clientid </b> $row[or_clientid]<br />";
            echo "<b>Order number </b> $row[or_num]<br />";
            echo "<b>Date </b> $row[or_date]<br />";
            echo "<b>Time </b> $row[or_clientid]<br />";
            echo "<b>Service Type </b> $row[or_servicetype]<br />";
            echo "<b>Quantity </b> $row[or_quantity]<br />";
            echo "<b>Price </b> $row[or_price]<br />";
            echo "<b>Status </b> $row[or_status]<br />";
            echo "<hr>";
            
            
             
               
               
               
               
               } } 
               $total = (array_sum($tot)) + 90;
               echo "<h4>Total</h4>$total";
echo "</p></div>
<div class='image12'><center><img  src='images/pic01.jpg' /></center></div></center>
</body>"; } 
else { 
echo "Please Login";
} 
?>





