<?
session_start();
include "nav1.php";
$contractor = $_SESSION[contractor];
echo "$contractor";
include "config.php";
include "lib.php";

echo "<div class='ppfull'><center><div class='header'>Contractor Page<br />Details Below.</div><p>Every hour you work adds to your income.</p></div></center>
<center><div class='header1'>Orders and Earnings</div></center>
<center><p></p></center><div class='pp66'><ul style='list-style:none;'><li><a class='buttonsmallx' href='cpage.php'>Dashboard</a></li>
<li><a class='buttonsmallx' href='contdetails.php'>Personal Details</a></li>
<li><a class='buttonsmallx' href='contchangepassword.php'>Password Details</a></li>
<li><a class='buttonsmallx' href='checkin.php'>Check-in</a></li>
<li><a class='buttonsmallx' href='contord1.php'>New orders</a></li>
<li><a class='buttonsmallx' href='contord2.php'>Orders in progress</a></li>
<li><a class='buttonsmallx' href='contord3.php'>Completed Orders</a></li>
<li><a class='buttonsmallx' href='csales.php'>Your earnings</a></li>
<li><a class='buttonsmallx' href='contpay.php'>Request Payout</a></li>
<li><a class='buttonsmallx' href='contlogout.php'>Logout</a></li>
</ul></div><div class='pp55'>";       
$us = cr($stp, $contractor, $action = 'enc');
$sql = "SELECT * FROM copro WHERE cp_userid = '$us'";
         $result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result))  { 
            $img = $row[cp_img];
            $name = $row[cp_name];
            
            $descp = $row[cp_desc];
            
            $service = $row[cp_services_offered];
            $town = cr($stp, $row[cp_town], $action = 'inc');
            $streetno = $row[cp_streetno];
            $streetname = cr($stp, $row[cp_streetname], $action = 'inc');
            $buildingno = $row[cp_buildingno];
            $buildingname = $row[cp_buildingname];
            $suburb = cr($stp, $row[cp_suburb], $action = 'inc');
            $province = $row[cp_state];
            $zip = cr($stp, $row[cp_zip], $action = 'inc');
            
            
            
            echo "<img src='$img' width='100px' /><br />";
            echo "$name<br />";
            
            echo "<b>Services</b>$service<br />";
            
echo "<form action='processcontaddress.php' name='rform' onsubmit='return validateForm();' method='post'>";
echo "<input type='text' name='cp_name' value='$name' placeholder='Business Name' /><br />";
echo "<input type='text' name='cp_streetno' value='$streetno' placeholder='Street Number' /><br />";
echo "<input type='text' name='cp_streetname' value='$streetname' placeholder='Street Name' /><br />";
echo "<input type='text' name='cp_buildingno' value='$buildingno' placeholder='Building Number' /><br />";
echo "<input type='text' name='cp_buildingname' value='$buildingname' placeholder='Building Name' /><br />";
echo "<input type='text' name='cp_suburb' value='$suburb' placeholder='Suburb' /><br />";
echo "<input type='text' name='cp_town' value='$town' placeholder='Town' /><br />";
echo "<select name='cp_state'>";
echo "<option value='Gauteng'>Gauteng</option>";
echo "<option value='Eastern_Cape'>Eastern Cape</option>";
echo "<option value='Free_State'>Free State</option>";
echo "<option value='Kwazulu_Natal'>Kwazulu Natal</option>";
echo "<option value='Limpopo'>Limpopo</option>";
echo "<option value='Mpumalanga'>Mpumalanga</option>";
echo "<option value='Northern_Cape'>Northern Cape</option>";
echo "<option value='North_West'>North West</option>";
echo "<option value='Western_Cape'>Western Cape</option>";
echo "</select><br />";
echo "<input type='text' name='cp_zip' value='$zip' placeholder='Zip' /><br />";
echo "<label for='Descp'>In one paragraph describe yourself and your work ethic</label><br />";
echo "<textarea rows='20' cols='40' name='cp_desc'>$descp</textarea><br />";
echo "<input type='text' name='cp_car_reg' placeholder='Car Registration Number' /><br />";
echo "<br /><b>Select Services</b></br >";

echo "<input type='checkbox' name='services[]' value='wash_dry' />Wash Dry<br />";
echo "<input type='checkbox' name='services[]' value='wash_dry_fold' />Wash, Dry, Fold<br />";
echo "<input type='checkbox' name='services[]' value='wash_dry_iron_fold' />Wash, Dry, Iron, Fold<br />";
echo "<input type='checkbox' name='services[]' value='iron' />Iron<br />";
echo "<input type='checkbox' name='services[]' value='hand_wash' />Hand Wash<br />";
echo "<input type='checkbox' name='services[]' value='dry_clean' />Dry Clean<br />";
echo "<input type='checkbox' name='services[]' value='steam_clean' />Steam Clean<br />";
echo "<input type='checkbox' name='services[]' value='stain_remove' />Stain Removal<br />";
echo "<input type='checkbox' name='services[]' value='driving' />Driving<br />";

echo "<input type='text' name='id' value='$row[cp_id]' /><br />"; 
echo "<input type='submit' name='submit' value='submit' />"; 
echo "</form></div>";

} } 

?>

</body>


