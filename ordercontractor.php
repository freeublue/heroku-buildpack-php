<?
session_start();
?>
<style>
#logf{
display:none;}
</style>
<?
$service = $_REQUEST[id];
include "nav1.php";
include "config.php";
       

echo "<span></span>
      <div id='ppfull'><center><hr class='featurette-divider'><p>

     
          <h2 class='featurette-heading'>Delivery. <span class='text'>Orders placed after  1:30pm collected the following day.</span></h2>
          <p>Orders placed before 1:30pm collected the same day</p>
        
        <img src='banner4.jpg' style='border-radius:50%;width:200px;' /><p>You must be logged in to complete this action <div id='login' style='background:grey;width:150px;height:50px;border-radius:20%;color:black;text-align:center;' onclick='logg()'>Login</div><p><div id='logf'>

      <form name='rform' onsubmit='return validateForm();' action='inlog.php' method='post' class='form-signin'>
        <h2 class='form-signin-heading'>Please sign in</h2>
        <label>Mobile Number</label>
        <input type='input' name='mobile' placeholder='Mobile number' required autofocus>
        <label>Password</label>
        <input type='password' name='password' placeholder='Password' required>
        <button style='background:grey;width:150px;height:50px;border-radius:20%;color:black;text-align:center;' type='submit'>SIGN IN</button>
      </form>

    </div> <!-- /container -->
       
</p><h2>Selection</h2>";


echo "<div class='col-sm-4' style='background:gray;color:white;font-size:24px;border:silver dotted 2px;text-align:center;float:left;width:33.3%;' >Order</div><div class='col-sm-4' style='background:black;color:white;font-size:24px;border:silver dotted 2px;text-align:center;float:left;width:33.3%;'>Delivery details</div></p><hr><p>";
$sql = "SELECT * FROM copro WHERE cp_id = '$service'";
         $result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) { 
            $img = $row[cp_img];
            $name = $row[cp_name];
            $fname = $row[cp_fname];
            $descp = $row[cp_desc];
            $rate = $row[cp_rating];
            $equip = $row[cp_equip];
            echo "</p><hr class='featurette-divider'><p><h2 class='featurette-heading'>Order Details.</span></h2><p valign='right'>";
            
            echo "<table cellspacing='2' cellpadding='2'><th><td></td><td></td></th>";
            echo "<tr><td rowspsn='2'><img src='$img' width='100px' /></td></tr>";
            echo "<tr><td>Name</td><td>$name</td></tr>";
            echo "<tr><td>Contractor</td><td>$fname</td></tr>";
            echo "<tr><td>Rating</td><td>$rate</td></tr>";
            echo "<tr><td>Equipment</td><td>$equip</td></tr>";
            echo "<tr><td>Description</td><td>$descp</td></tr>";
            echo "<tr><td>Change this service</td><td><a href='map/geo5.php'>Change Service</a></td></tr>";
            echo "</table></p>"; } 
    echo "<hr class='featurette-divider'><h2 class='featurette-heading'>Order<span class='text-muted'></span></h2><p>";        
            
echo "<form action='orderservice1.php' method='post'>";
echo "<b>Please Select the quantity in KG's of each item you require. Minimum 6kgs</b><br />";
$q = "SELECT * FROM prices";
$res = mysqli_query($conn, $q);
while($ro = mysqli_fetch_assoc($res) ) { 

echo 'NAME : ' . "$ro[ser_name] <br />";
echo 'Price : R' . "$ro[ser_pricedc] <br />";
echo 'Quantity :' . "<select name='quant_$ro[ser_id]'>";
foreach(range(0,60) as $opt)  { 
$tr = $opt . '|' . $ro[ser_pricedc] . '|' . $ro[ser_name] . '|' . $ro[ser_id];
echo "<option value='$tr'>$opt</option>";
} 
echo "</select><br />"; 


} 
echo "<input type='hidden' name='contid' value='$service' />";
echo "<input type='submit' value='submit' name='submit' /></form></p></center>"; } 
include "footer.php";
?>
<script>
function logg() { 
document.getElementById("logf").style.display = "block";

} 
</script>

              
              