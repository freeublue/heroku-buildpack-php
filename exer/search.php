<?
error_reporting(0);
function input_form($input_id, $input_type, $input_label, $size) { 
$input_form = "<div class='form-group row'><div class='". $size . "'><div class='form-group'><label for='$input_id'>" . $input_label . "</label><input type='" . $input_type . "' class='form-control' name='" . $input_id . "' id='" . $input_id . "' placeholder='" . $input_label . "'></div></div></div>"; 
 echo "$input_form"; }
 ?>
 <!DOCTYPE html>
<html lang="en"><head><link href="bootstrap.min.css" rel="stylesheet"><link href="font-awesome.min.css" rel="stylesheet" type="text/css"><script src="jquery-1.9.1.js"></script><meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Search Tables</title></head><body>
    <div class="container">
      <div class="header clearfix">
       <nav>
          <ul class="nav nav-pills float-right">
            <li class="nav-item">
              <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tables.php">Jquery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="selectphp.php">PHP</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="byname.php">By Name</a>
            </li> <li class="nav-item">
              <a class="nav-link" href="byemail.php">By Email</a>
            </li><li class="nav-item">
              <a class="nav-link" href="bymobile.php">By Mobile</a>
            </li><li class="nav-item">
              <a class="nav-link" href="byage.php">By Age</a>
            </li>
          </ul>
        </nav>
        <h3 class="text-muted">Users</h3>
      </div><h4>Enter a search term and click one of the blue buttons to initiate search filter.</h4><p>Eg:083 then click Mobile</p><form id='xx' name='xx'>
 <?
 error_reporting(0);
 $idf = "searchTerm";
 $idt = "search";
 $idl = "Search";
 $ids = "col-xs-2 col-md-4";
  echo "<div class='container-fluid'>";
input_form($idf, $idt, $idl, $ids);
echo "</form>";


echo "<div onclick=sh(this.id); id='Name' class='btn btn-xs btn-primary'>Name</div>";
echo "<div onclick=sh(this.id); id='Surname' class='btn btn-xs btn-primary'>Surname</div>";
echo "<div onclick=sh(this.id); id='BirthDate' class='btn btn-xs btn-primary'>BirthDate</div>";
echo "<div onclick=sh(this.id); id='Mobile' class='btn btn-xs btn-primary'>Mobile</div>";
echo "<div onclick=sh(this.id); id='Email' class='btn btn-xs btn-primary'>Email</div>";

 echo "</div><div id='divToRefresh'></div>";
 ?>
 <script>
 var nnc;
function sh(nnc) { 

var searchf = document.getElementById("searchTerm").value;
var typ = nnc;

$.ajaxSetup({ cache: false }); 


var url = "searchresult.php?searchTerm=" + searchf + "&&type=" + typ;
$('#divToRefresh').load(url);
}
</script>