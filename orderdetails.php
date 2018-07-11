<?
include "config.php";
include "lib.php";
echo "<a href='ordersbydate.php'>Orders By Date</a><a href='ordersbystatus.php'>Orders By Status</a><a href='ordersbyclieng.php'>Orders By Client</a><br />";       
$ordnum = $_REQUEST[ordnum];
$sql = "SELECT * FROM orders WHERE or_num = '$ordnum'";
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
                
               
               ?>
               
  
               