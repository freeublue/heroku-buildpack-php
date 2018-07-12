<?
session_start();
include "nav1.php";

if(isset($_SESSION[customer]) ) { 
include "config.php";
include "lib.php";
$customer= $_SESSION[customer];
$usno = base64_encode(numm($customer) );
$sqlc = "SELECT * FROM cust WHERE cu_phone_mobile = '$usno'";
$result = mysqli_query($conn, $sqlc);
while($row = mysqli_fetch_assoc($result) ) { 
$newcustid = $row[cu_id]; 
echo "customer id $newcustid<br />"; } 

$sqp = "SELECT * FROM cust WHERE cu_id = '$newcustid'";
$res = mysqli_query($conn, $sqp);

while($row = mysqli_fetch_assoc($res ) ) { 
echo "$row[cu_id]<br />"; } 

echo "<div id='ppfull'><center>";
          echo "<p class='lead'><div class='col-sm-4' style='background:black;color:white;font-size:24px;border:silver dotted 2px;text-align:center;float:left;width:33.3%;' >Order</div><div class='col-sm-4' style='background:gray;color:white;font-size:24px;border:silver dotted 2px;text-align:center;float:left;width:33.3%;'>Delivery details</div><div class='col-sm-4' style='background:black;color:white;font-size:24px;border:silver dotted 2px;text-align:center;float:left;width:33.3%;'>Payment</div></p><br /><hr><p>";


$tv = "SELECT * FROM ordnum";
$resr = mysqli_query($conn, $tv);
while($ro = mysqli_fetch_assoc($resr)) { 
$ordnumq[] = $ro[ordnum];


} 
$ordnum = array_pop($ordnumq);
echo $ordnum;
$client_id = $newcustid;
$val = $_POST;
$or_status = 1;
$or_day = date("Y-m-d");
$or_time = date("H:i:s");

$nv1 = array_slice($val, 0, -1);
$contractor = array_pop($nv1);
echo "<br />contractor $contractor";
$nv = array_slice($val, 0, -2);
$newval = count($nv);

$barray = array_values($nv);


for($i=0;$i<4;$i++) { 



$ncf = explode('|', $barray[$i]);

$price = $ncf[0] * $ncf[1];
$message = $ncf[2] . '@' . 'R ' . $price . "<br />";
$tot[] = $price;
if($ncf[0] == 0) { 
echo " "; } 
else { 
echo "$message<br />";
$q = "INSERT INTO orders(or_clientid, or_num, or_servicetype, or_quantity, or_price, or_status, or_fo, or_contractorid1, or_date, or_time) values('$newcustid', '$ordnum', '$ncf[2]', '$ncf[0]', '$ncf[1]', '$or_status', '$ncf[3]', '$contractor', '$or_day', '$or_time')"; 
$res = mysqli_query($conn, $q); 
echo " "; 
 } } 
 $total = array_sum($tot);
 echo "<b>Service</b>" . ':  ' . "R $total<br />";


echo "<b>Collection and Delivery</b>" . ' : ' . "R90 <br />"; 
$totalx = $total + 90;
echo "<b>Total</b>" . ' : ' . "<b> R $totalx </b><br />";
 echo "<a href='collectiondets.php?orid=$ordnum'>Add or Change Collection Adress</a>";
$newordnum = $ordnum+1;
$sdq = "INSERT INTO ordnum(ordnum) values('$newordnum')";
if (mysqli_query($conn, $sdq))
  {
  echo "Info added successfully";
  }
else
  {
  echo "Error Inserting table: " . mysqli_error($conn); } 
  
 } else { 
echo "<a href='login.php'>You must be logged in to complete this process</a>"; } 

?>