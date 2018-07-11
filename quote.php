<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
<style>
@import "https://fonts.googleapis.com/css?family=Raleway:100,300,600";


body, input, select, textarea {
		color: #9a9a9a;
		font-family: "Raleway", Arial, Helvetica, sans-serif;
		font-size: 13pt;
		font-weight: 300;
		line-height: 1.65;} 
th{
padding:5px;
font-family: Arial Rounded MT Bold,Helvetica Rounded,Arial,sans-serif; 
font-size:20px;
color:white;
Background: #5385c1;
Border: 1px solid #5385c1;
 text-align: center;
border-top-left-radius: 2em 0.5em;
border-top-right-radius: 2em 0.5em;
border-bottom-right-radius: 0em;
border-bottom-left-radius: 0em;}
tr{border-radius:15%;}
td{background: white;
 text-align: center;
color:#5385c1;;
border-bottom:1px dotted #5385c1;
border-left: 1px solid #5385c1;
padding:4px;
font-family: Verdana,Geneva,sans-serif; 

}
table{border-radius:15%;
margin-bottom:25px;
width:400px;
border-bottom: 2px solid #5385c1;}
#nav{width:100%;
height:50px;

background:white;}
a{text-decoration:none;}
.logo{height:30px;
float:right;
margin:2px;
width:100px;
padding:10px;
background:#5385c1;
border-radius:15%;
color:white;}
.buttonsmall{
height:30px;
width:250px;
padding:10px;
background: #5385c1;
color:white;}
h1{color:white;
margin-left:500px;
margin-top:400px;
font-family: 'Lobster', cursive;}
.header1{
font-family: "Raleway", Arial, Helvetica, sans-serif;
		font-size: 20pt;
		font-weight: 400;
text-align:center;
color: #5385c1;}
.header{
font-family: "Raleway", Arial, Helvetica, sans-serif;
		font-size: 20pt;
		font-weight: 400;
color: #5385c1;}
.ppfull{clear:left;
width:100%;
border-bottom:1px silver dotted;
text-align:left;
padding:5px;
margin:40px;}
.pp{float:left;
width:30%;
border-right:1px silver dotted;
text-align:left;
padding:5px;
margin:4px;}
.image12{
width:100%;
}
p{color:#5a5a5a;
font-size:18px;
font-family: "Raleway", Arial, Helvetica, sans-serif;}</style>

<!DOCTYPE HTML><html><head>
<title>Laundry by Magic Calculate Costs</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
</head>
<body>
<div id='nav'><a class='logo' href="index.php">Home</a>
<a class='logo' href="services.php">Services</a>
<a class='logo' href="prices.php">Prices</a>
<a class='logo' href="require.php">Require</a>
<a class='logo' href="offer.php">Offer</a></div>
<div class='ppfull'><center><div class='header'>Calculate Costs<br />Select quantity and type.</div><p>All prices are by the KG.</p><p>Weigh an item on your bathroom or kitchen scale to get an indication of weight.</p><p>Duvets, sheets(fitted and flat) and pillow cases from one double and two single beds (3 beds) weigh approximately 6kgs</p></div></center>
<center>


<?php
include "config.php";
echo "<form action='calculateservice.php' method='post'>";
echo "<b>Please Select the quantity in KG's of each item you require. Minimum 6kgs</b><br />";
$q = "SELECT * FROM prices";
$res = mysqli_query($conn, $q);
while($ro = mysqli_fetch_assoc($res) ) { 

echo 'NAME : ' . "$ro[ser_name] <br />";
echo 'Price : R' . "$ro[ser_pricedc] <br />";
echo 'Quantity :' . "$ro[ser_id]<select name='quant_$ro[ser_id]'>";
foreach(range(0,60) as $opt)  { 
$tr = $opt . '_' . $ro[ser_pricedc];
echo "<option value='$tr'>$opt</option>";
} 
echo "</select><br />"; 


} 
echo "<input type='submit' value='submit' name='submit' /></form>";
?>

</center><center><div class='image12'><img src='laundry.jpg' /></div></center>
</body>
