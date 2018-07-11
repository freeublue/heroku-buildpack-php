<?
$cont = $_REQUEST[id];
include "nav.php";
include "config.php";
       

echo "<span></span>
      <hr class='featurette-divider'>

      <div class='row featurette'>
        <div class='col-md-7'>
          <h2 class='featurette-heading'>Delivery. <span class='text'>Orders placed after  1:30pm collected the following day.</span></h2>
          <p class='lead'>Orders placed before 1:30pm collected the same day</p>
        </div>
        <div class='col-md-5'><img class='featurette-image img-responsive center-block' data-src='holder.js/500x500/auto' src='banner4.jpg' alt='Generic placeholder image'>
        </div>
      </div>
<div class='container'>
<h2>Selection</h2>
<div class='row'>";


echo "<div class='col-sm-4' style='background:gray;color:white;font-size:24px;border:silver dotted 2px;text-align:center;' >Order</div><div class='col-sm-4' style='background:black;color:white;font-size:24px;border:silver dotted 2px;text-align:center;'>Delivery details</div><br />";
$sql = "SELECT * FROM copro WHERE cp_id = '$cont'";
         $result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) { 
            $img = $row[cp_img];
            $name = $row[cp_name];
            $fname = $row[cp_fname];
            $descp = $row[descp];
            $rate = $row[cp_rating];
            $equip = $row[cp_equip]; } }
            echo "<hr class='featurette-divider'><div class='row featurette'><div class='col-md-7'><h2 class='featurette-heading'>Order<span class='text-muted'>Order details.</span></h2><p class='lead'>";
echo "<hr class='featurette-divider'><div class='row featurette'><div class='col-md-2' align='left'><h2 class='featurette-heading'>Order<span class='text-muted'>Check your order details.</span></h2><p class='lead'><br /></P><p>";
$or_clientid = 2;
$gt1 = $_POST[quant_2];
echo "quantity $gt1";
$gt1val = explode('_', $gt1);
$val1 = $gt1val[0] * $gt1val[1];

$gt2 = $_POST[quant_12];
$gt2val = explode('_', $gt2);
$val2 = $gt2val[0] * $gt2val[1];

$gt3 = $_POST[quant_22];
$gt3val = explode('_', $gt3);
$val3 = $gt3val[0] * $gt3val[1];

$gt4 = $_POST[quant_32];
$gt4val = explode('_', $gt4);
$val4 = $gt4val[0] * $gt4val[1];

$gt5 = $_POST[quant_1];
$gt5val = explode('_', $gt5);
$val5 = $gt5val[0] * $gt5val[1];

$gt6 = $_POST[quant_6];
$gt6val = explode('_', $gt6);
$val6 = $gt6val[0] * $gt6val[1];
echo "quantity 1 $gt1 2 $gt2 3 $gt3 4 $gt4";
$service = $val1 + $val2 + $val3 + $val4 + $val5 + $val6;
echo "<b>Service</b>" . ':  ' . "R $service<br />";


echo "<b>Collection and Delivery</b>" . ' : ' . "R90 <br />"; 
$total = $service + 90;
echo "<b>Total</b>" . ' : ' . "<b> R $total </b><br />";

echo "<a href='confirmorder.php'>Confirm</a>
$q = "INSERT INTO orders(or_clientid,
or_num,
or_servicetype,
or_quantity,
or_price,
or_status,
or_fo,
or_contractorid1) values('$or_clientid', '$or_num', '$or_servicetype', '$or_quantity', '$or_price', '$or_status', '$or_fo', '$or_contractorid1')";


