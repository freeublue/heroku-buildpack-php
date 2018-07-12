<?
session_start();
?>
<style>
b{float:left;
color:gray;
font-size:20px;}
input{float:right;}
</style>
<?
include "config.php";
$foo = $_SERVER[SERVER_NAME];
include "nav1.php";

include "lib.php";

if(isset($_SESSION[customer]) ) { 

$customer= $_SESSION[customer];
$usno = base64_encode(numm($customer) );
$sqlc = "SELECT * FROM cust WHERE cu_phone_mobile = '$usno'";
$result = mysqli_query($conn, $sqlc);
while($row = mysqli_fetch_assoc($result) ) { 
$newcustid = $row[cu_id]; 
echo "$newcustid<br />"; } 
$sql = "SELECT * FROM cust WHERE cu_id = '$newcustid'";
$res = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($res ) ) { 
echo "$row[cu_id]<br />"; 
$sp_fname ='cu_fname';
$pl_fname ='First Name';
$sp_lname ='cu_lname';
$pl_lname = 'Surname';
$sp_contacttitle = 'cu_contact_title';
$pl_contacttitle = 'Contact title eg:Mrs';
$sp_email = 'cu_email';
$pl_email = 'Email';
$sp_address_streetnum = 'cu_address_streetnum';
$pl_streetnum = 'Street number';
$sp_address_streetname = 'cu_address_streetname';
$pl_streetname = 'Street Name';
$sp_address_buildingnum = 'cu_address_buildingnum';
$pl_buildingnum = 'Building or Unit number';
$sp_address_buildingname = 'cu_address_buildingname';

$pl_buildingname = 'Building or development name';
$sp_address_suburb = 'cu_address_suburb';
$pl_suburb = 'Suburb';
$sp_address_town = 'cu_address_town';
$pl_town = 'City or Town';
$sp_address_province = 'cu_address_province';

$sp_address_postalcode = 'cu_address_postalcode';
$pl_postalcode = 'Postal Code';

$sp_phone_land = 'cu_phone_land';
$pl_phone_land = 'Alternate phone number';


$sp_phone_fax = 'cu_phone_fax';

$sp_descp = 'cu_descp';
$r = 20;
$c= 20;



$sp_newsletter = 'cu_newsletter';
$submitvalue = 'Add Customer'; 
$spx_fname = base64_decode($row[cu_fname]); 
$spx_lname = base64_decode($row[cu_lname]);
$spx_contacttitle = base64_decode($row[cu_contact_title]);
$spx_email = base64_decode($row[cu_email]);
$spx_address_streetnum = $row[cu_address_streetnum];
$spx_address_streetname = base64_decode($row[cu_address_streetname]);
$spx_address_buildingnum = $row[cu_address_buildingnum];
$spx_address_buildingname = base64_decode($row[cu_address_buildingname]);
$spx_address_suburb = base64_decode($row[cu_address_suburb]);
$spx_address_town = base64_decode($row[cu_address_town]);
$spx_address_province = base64_decode($row[cu_address_province]);
$spx_address_postalcode = base64_decode($row[cu_address_postalcode]);
$spx_address_town = base64_decode($row[cu_address_town]);

$spx_phone_land = nummr(base64_decode($row[cu_phone_land]));
$spx_phone_mobile = nummr(base64_decode($row[cu_phone_mobile]));
$orid = $_REQUEST[orid];
echo "<hr class='featurette-divider'><div id='ppfull'><center><hr><p><h2 class='featurette-heading'><span class='text-muted'>Check your delivery details.</span></h2></p>
          <p><div class='col-sm-4' style='background:black;color:white;font-size:24px;border:silver dotted 2px;text-align:center;float:left;width:33.3%;' >Order</div><div class='col-sm-4' style='background:gray;color:white;font-size:24px;border:silver dotted 2px;text-align:center;float:left;width:33.3%;'>Delivery details</div><div class='col-sm-4' style='background:black;color:white;font-size:24px;border:silver dotted 2px;text-align:center;float:left;width:33.3%;'>Payment</div></p><br /><p valign='left'>";
echo "<table cellspacing='2'>";
echo "<tr><td><b>Customer First Name</b><td>$spx_fname</td></tr>"; 
echo "<tr><td><b>Customer Last Name</b><td>$spx_lname</td></tr>"; 
 
echo "<tr><td><b>Customer  Contact Title</b><td>$spx_contacttitle</td></tr>"; 
echo "<tr><td><b>Customer  Email</b><td>$spx_email</td></tr>"; 
echo "<tr><td><b>Customer  Street Number</b><td>$spx_address_streetnum</td></tr>"; 
echo "<tr><td><b>Customer  Street Name</b><td>$spx_address_streetname</td></tr>"; 
echo "<tr><td><b>Customer  Building Number</b><td>$spx_address_buildingnum</td></tr>"; 
echo "<tr><td><b>Customer  Building Name</b><td>$spx_address_buildingname</td></tr>"; 
echo "<tr><td><b>Customer  Suburb</b><td>$spx_address_suburb</td></tr>"; 
echo "<tr><td><b>Customer Province</b><td>$spx_address_province</td></tr>"; 
echo "<tr><td><b>Customer Postal Code</b><td>$spx_address_postalcode</td></tr>"; 


echo "<tr><td><b>Customer Phone Land</b><td>$spx_phone_land</td></tr>"; 
 
echo "<tr><td><b>Customer  Phone Mobile</b><td>$spx_phone_mobile</td></tr>"; 


echo "</table></p><hr><p>";

 
echo "<form onsubmit='return validateForm();' class='form-inline' name='rform' action='processcollectiondets.php' method='post'>";

echo "<h2>Add Your Delivery Profile</h2>";

echo "<br /><b>Customer First Name</b><br />";
echo "<input type='text' name='cu_fname' placeholder='$pl_fname' value='$spx_fname' />";

echo "<br /><b>Customer Last Name</b><br />";
echo "<input type='text' name='cu_lname' placeholder='$pl_lname' value='$spx_lname'/>";

echo "<br /><b>Customer Contact Title</b><br />";
echo "<input type='text' name='cu_contact_title' placeholder='Contact title eg Mrs' value='$spx_contacttitle' />";
echo "<br /><b>Customer Email</b><br />";
echo "<input type='text' name='cu_email' placeholder='$pl_email' value='$spx_email' />";
echo "<br /><b>CustomerStreet Number</b><br />";
textv($sp_address_streetnum, $spx_address_streetnum, $pl_streetnum);
echo "<br /><b>Customer Street Name</b><br />";
textv($sp_address_streetname, $spx_address_streetname, $pl_streetname);
echo "<br /><b>Customer Building Number</b><br />";
textv($sp_address_buildingnum, $spx_address_buildingnum, $pl_buildingnum);
echo "<br /><b>Customer Building Name</b><br />";
textv($sp_address_buildingname, $spx_address_buildingname, $pl_buildingname);
echo "<br /><b>Customer Suburb</b><br />";
textv($sp_address_suburb, $spx_address_suburb, $pl_suburb);
echo "<br /><b>Customer Town</b><br />";
textv($sp_address_town, $spx_address_town, $pl_town);
echo "<br /><b>Customer Province</b><br />";
echo "<select name='$sp_address_province'>";
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
echo "<br /><b>Customer Postalcode</b><br />";
textv($sp_address_postalcode, $spx_address_postalcode, $pl_postalcode);
echo "<br /><b>Customer Phone Number Landline</b><br />";
textv($sp_phone_land, $spx_phone_land, $pl_phone_land);
echo "<input type='text' name='orid' value='$orid' />";
echo "<br /><b>Collectio Date</b><br />";
echo "<input type='date' name='collection_date' /><br />";
echo "<br /><b>Collectio Time</b><br />";
echo "<select name='collection_time'>
<option value='6-8'>6:00AM - 8:00AM</option>
<option value='8-10'>8:00AM - 10:00AM</option>
<option value='10-12'>10:00AM - 12:00AM</option>
<option value='14-16'>2:00PM - 4:00PM</option>
<option value='16-18'>4:00PM - 6:00PM</option>
<option value='18-20'>6:00PM - 8:00PM</option>
</select><br />";
echo "<input type='hidden' name='cust' value='$newcustid' />";
echo "<br /><b>Newsletter Preference</b><br />";
echo "<select name='cu_newsletter'>
<option value='y'>Yes</option><option value='n'>No</option></select>";




echo "<br /><input type='submit' name='submit' value='submit' /></form></p></center></div>";
include "footer.php";

 } } else { 
 echo "<a href='login.php'>You must be logged in to complete this process</a>";
 } 


?>