<?php
include "config.php";

$searchTerm = $_REQUEST["searchTerm"];
$type = $_REQUEST["type"];
echo "$type $searchTerm";
if($type === 'Name') { 
$stm = "SELECT * FROM users WHERE name LIKE '%$searchTerm%'"; }
elseif($type === 'Surname') { 
$searchTerm = 'Her';
$stm = "SELECT * FROM users WHERE surname LIKE '%$searchTerm%'"; } 
elseif($type === 'birtDate') { 
$stm = "SELECT * FROM users WHERE birthdate LIKE '%$searchTerm%'"; }
elseif($type === 'Mobile') { 
$stm = "SELECT * FROM users WHERE mobile LIKE '%$searchTerm%'"; }
elseif($type === 'Email') { 
$stm = "SELECT * FROM users WHERE email LIKE '%$searchTerm%'"; } else {
echo "We dont have that type";
} 
?>
<div id='container'><div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Mobile</th>
                  <th>Date of Birth</th>
                  <th>Age</th>
                  <th>Start Date</th>
                  <th>Email</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Name</th>
                  <th>Mobile</th>
                  <th>Date of Birth</th>
                  <th>Age</th>
                  <th>Start Date</th>
                  <th>Email</th>
                </tr>
              </tfoot>
              <tbody>
              <?php
              

include "config.php";

              
              
        $stmx = "SELECT COUNT(*) FROM users";
       $res = mysqli_query($conn, $stmx);
if (mysqli_num_rows($res) > 0) {
            while($ro = mysqli_fetch_assoc($res)) { 
            $records = $ro["COUNT(*)"];
            
  }} 

 
  
  include "paginate.php";
  

       
       $result = mysqli_query($conn, $stm);
if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) { 
    
$now = date("Y-m-d");
$agx = date_diff(date_create($row["birthdate"]), date_create($now));
$ag = $agx->format('%y');



            echo "<tr>";
            
               echo "<td>" . $row["name"]. ' ' . $row["surname"] . "</td>";
               
               echo "<td>" . $row["mobile"] . "</td>"; 
               echo "<td>" . $row["birthdate"] . "</td><td>" . $ag . "</td><td>" . $row["ins_time"] . "</td><td>" . $row["email"] . "</td>"; 
               echo "</tr>";
               

               } 
               } else { echo "no result"; } 
               ?>
              
             
              </tbody>
            </table>
          </div>
        </div> 


            