 <!DOCTYPE html>
<html lang="en"><head><link href="bootstrap.min.css" rel="stylesheet"><link href="font-awesome.min.css" rel="stylesheet" type="text/css"><script src="jquery-1.9.1.js"></script><meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Search Tables</title></head><body><h4><a href='search.php'>Search Another</a></h4>
  <?php
  error_reporting(0);
include "config.php";
$nu = $_GET[nu];
$searchTerm = $_REQUEST["searchTerm"];
$type = $_REQUEST["type"];

if($type === 'Name') { 
$stm = "SELECT * FROM users WHERE name LIKE '%$searchTerm%' LIMIT $nu, 10"; 
$stmx = "SELECT COUNT(*) FROM users WHERE name LIKE '%$searchTerm%'"; }
elseif($type === 'Surname') { 

$stm = "SELECT * FROM users WHERE surname LIKE '%$searchTerm%' LIMIT $nu, 10";
$stmx = "SELECT COUNT(*) FROM users WHERE surname LIKE '%$searchTerm%'"; } 
elseif($type === 'BirthDate') { 
$stm = "SELECT * FROM users WHERE birthdate LIKE '%$searchTerm%' LIMIT $nu, 10";
$stmx = "SELECT COUNT(*) FROM users WHERE birthdate LIKE '%$searchTerm%'"; }
elseif($type === 'Mobile') { 
$searchTerm = 0;
$stm = "SELECT * FROM users WHERE mobile LIKE '$searchTerm%' LIMIT $nu, 10";
 $stmx = "SELECT COUNT(*) FROM users WHERE mobile LIKE '%$searchTerm%'";}
elseif($type === 'Email') { 
$stm = "SELECT * FROM users WHERE email LIKE '%$searchTerm%' LIMIT $nu, 10";
$stmx = "SELECT COUNT(*) FROM users WHERE email LIKE '%$searchTerm%'"; } else {
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
error_reporting(0);

              
              

       $res = mysqli_query($conn, $stmx);
if (mysqli_num_rows($res) > 0) {
            while($ro = mysqli_fetch_assoc($res)) { 
            $records = $ro["COUNT(*)"];
            
  }} 

 require "paging.php";
 
  include "pagx.php";
  

       
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
               echo "</table></div></div>";
               include "pagx.php";
               } else { echo "no result"; } 
               
               ?>
              
             
              </tbody>
            </table>
          </div>
        </div> 
                <div class="footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Project 2018</small>
        </div>
      </div>
    </footer>


            