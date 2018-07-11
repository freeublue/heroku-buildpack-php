<?
include "config.php";
       

$sql = 'SELECT * FROM cust';
         $result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
               echo "Name: " . $row["cu_phone_mobile"] . $row["cu_ps"]. "<br>"; 
               $na = base64_decode($row[cu_lname]);
               echo "name $na<br />";

               } } 
               
$sql = 'SELECT * FROM str';
         $result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
               echo "Name: ca" . $row["ca"] . $row["pf"]. "<br>"; } } 
               
               ?>