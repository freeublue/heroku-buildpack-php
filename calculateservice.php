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
<title>Laundry by Magic Service and Delivery Costs</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
</head>
<body>
<div id='nav'><a class='logo' href="index.php">Home</a>
<a class='logo' href="services.php">Services</a>
<a class='logo' href="prices.php">Prices</a>
<a class='logo' href="require.php">Require</a>
<a class='logo' href="offer.php">Offer</a></div>
<div class='ppfull'><center><div class='header'>Service and Delivery Costs<br />All items selected.</div><p>All prices are by the KG.</p><p>Weigh an item on your bathroom or kitchen scale to get an indication of weight.</p><p>Average for family of 4, 8-12 KGs per week</p></div></center>
<center>
<?php

$gt1 = $_POST[quant_2];
echo "quantity $gt1";
$gt1val = explode('_', $gt1);
$val1 = $gt1val[0] * $gt1val[1];

$gt2 = $_POST[quant_12];
$gt2val = explode('_', $gt2);
$val2 = $gt2val[0] * $gt2val[1];

$gt3 = $_POST[quant_22];
$gt3val = explode('_', $gt3);
$val3 = $gt3val[0] * $gt3val[1];

$gt4 = $_POST[quant_32];
$gt4val = explode('_', $gt4);
$val4 = $gt4val[0] * $gt4val[1];

$gt5 = $_POST[quant_1];
$gt5val = explode('_', $gt5);
$val5 = $gt5val[0] * $gt5val[1];

$gt6 = $_POST[quant_6];
$gt6val = explode('_', $gt6);
$val6 = $gt6val[0] * $gt6val[1];

$service = $val1 + $val2 + $val3 + $val4 + $val5 + $val6;
echo "<b>Service</b>" . ':  ' . "R $service<br />";


echo "<b>Collection and Delivery</b>" . ' : ' . "R90 <br />"; 
$total = $service + 90;
echo "<b>Total</b>" . ' : ' . "<b> R $total </b><br />";


?> 


</center><center><div class='image12'><img src='laundry.jpg' /></div></center>
</body>

