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
            
            $fname = base64_decode($row[cu_fname]);
 } } 

$ordnum = $_REQUEST[ordnum];


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
$sql = "SELECT * FROM paytb WHERE pa_or_num = '$ordnum'";
         $result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) { 
            $email = base64_decode($row[pa_email]);
            $streetname = base64_decode($row[pa_address_streetname]);
               echo "Order Number: " . $row[pa_or_num]. "<br>";
               
               echo "Reference Number: " . $row["pa_ref"] . "<br>";
               echo "Payment Type: " . $row[pa_type] . "<br>"; 
               echo "Price: " . $row[pa_price] . "<br>"; 
               
               echo "Client Name: " . $row[pa_fname] . "<br>"; 
               echo "Email: " . $email . "<br>"; 
               echo "Address : " . $row[pa_address_streetnum] . $streetname . "<br>"; 
               echo "Paid Type " . $row[pa_allocate_fees_status] . "<br />";
                echo "Paid Amount " . $row[pa_amount] . "<br />";
               echo "<br />";
               echo "<hr>";
               
               
               } } 
               
               
               
echo "</p></div>
<div class='image12'><center><img  src='images/pic01.jpg' /></center></div></center>
</body>"; } 
else { 
echo "Please Login";
} 
?>





