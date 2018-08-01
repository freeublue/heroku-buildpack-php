<?
require "style.php";
?>
<!DOCTYPE html>
<html lang="en"><head><link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet"><link href="bootstrap.min.css" rel="stylesheet"><link href="font-awesome.min.css" rel="stylesheet" type="text/css"><script src="https://code.jquery.com/jquery-3.3.1.js"></script><script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script><meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>User Tables</title>
  <!-- Bootstrap core CSS-->
  <link href="bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="sb-admin.css" rel="stylesheet">
</head><body><a class='logo' href="index.php">Add User</a>
<a class='logo' href="tables.php">Select JS</a>
<a class='logo' href="byname.php">By Name</a>
<a class='logo' href="selectphp.php">Select PHP</a><br /><hr>
<div class='container-fluid'>
<!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i>Users</div>
        <div class="card-body">
          <div class="table-responsive">
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

              
              
        $stm = "SELECT * FROM users";
       $res = mysqli_query($conn, $stm);
if (mysqli_num_rows($res) > 0) {
            while($ro = mysqli_fetch_assoc($res)) { 
            $idd[] = $ro[id];
            
  }} 
  $records = count($idd);
 
  
  include "paginate.php";
  
  
       $stmt = "SELECT * FROM users ORDER BY email DESC LIMIT $nu, 10";
       $result = mysqli_query($conn, $stmt);
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
               

               } } 
               ?>
              
             
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Project 2018</small>
        </div>
      </div></div>
    </footer>
    