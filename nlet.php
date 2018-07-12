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
<title>Itsasmartsolve</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
</head>
<body>
<div id='nav'><a class='logo' href="index.php">Home</a>
<a class='logo' href="prices.php">Prices</a>
<a class='logo' href="require.php">Require</a>
<a class='logo' href="offer.php">Offer</a></div>
<div class='ppfull'><center><div class='header'>Newsletter</div><p>Subscription</p></div></center>
<center>
<?php
include "config.php";
include "lib.php";

$ema1 = $_POST[ema];
 $str = trim($_POST[name]);
 $str1 = str_replace(' ', '', $str);
 $y = ctype_alpha($str1);
 echo "$str ";
$ema6 = cr($stp, $_POST["ema"], $action = "enc");
$sq = "SELECT * FROM nleta WHERE nl_ema = '$ema6'";
$result = mysqli_query($conn, $sq);
if (mysqli_num_rows($result) > 0) { 

echo "That address already exists, select another";
 } 
 
elseif(EMPTY($_POST[name]) ) { 
echo "PLEASE SUPPLY A NAME"; } 
elseif(EMPTY($_POST[ema])) { 
echo "PLEASE SUPPLY EMAIL";

} 
 elseif($y != 1) { 
echo "Name must contain letters only.<br />"; 
        } 

else {

$name = $_POST[name];

$ema2 = $_POST[ema];
$ema = cr($stp, $_POST["ema"], $action = "enc");
$qs = "INSERT INTO nleta(nl_name, nl_ema, nl_status) VALUES('$name', '$ema', '1')";
$res = mysqli_query($conn, $qs);
echo "Thank you for your subscription. Please click on the link which has been sent to your email to confirm";


 } 
?>


</center><center><div class='image12'><img src='images/pic01.jpg' /></div></center>
</body>
