<?
session_start();
include "nav1.php";
if(isset($_SESSION[contractor]) ) { 
include "config.php";
include "lib.php";

$cont = $_SESSION[contractor];
echo "$cont<br />";
$us = cr($stp, $cont, $action = 'enc');
$sql = "SELECT * FROM copro WHERE cp_userid = '$us'";
         $result = mysqli_query($conn, $sql);

            while($row = mysqli_fetch_assoc($result))  { 
$id = $row[cp_id]; 
$type = $row[type]; } 

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

$sql = "SELECT * FROM orders WHERE or_status = '5' AND or_contractorid1 = '$id' OR or_contractorid2 = '$id' ORDER BY 'or_num' DESC";
         $result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) { 
            if($type == 'Laundry') { 
                
               
               
               $vata= $row[or_price] -($row[or_price] / 1.15);
               
               $comma = ($row[or_price]/1.15) * 0.14;
$pp = ($row[or_price] - $comma)-$vata;
$pp = ceil($pp);
            
            $pr[] = $row[or_price];
            $qant[] = $row[or_quantity];
            $total = $pp * $row[or_quantity];
            $tota[] = $row[or_price] * $row[or_quantity];
               
               echo "Service: " . $row["or_servicetype"] . "<br>";
               echo "Order Number: " . $row["or_num"] . "<br>";
               echo "Quantity: " . $row[or_quantity] . "<br>"; 
               echo "Price: " . $pp . "<br>";
               echo "Total: " . $total . "<br />";
               
               echo "Date: " . $row[or_date] . "<br>"; 
               echo "Time : " . $row[or_time] . "<br>"; 
               echo "<hr>"; } } 


               
               $tot1 = array_sum($tota);
               
               $vat= $tot1 -($tot1 / 1.15);
               
               $comm = ($tot1/1.15) * 0.14;
$tot = ($tot1 - $comm)-$vat;
$tot = ceil($tot);
               echo "<hr>";
               echo "$tot";
               echo "<hr>"; } else { 
               } 
echo "</p></div></div></body>"; } 
else { 
echo "Please Login"; } 
?>