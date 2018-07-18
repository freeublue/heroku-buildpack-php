<?
session_start();
include "generategeo.php";
$foo = $_SERVER[SERVER_NAME];

if($foo === 'laundrybymagic.herokuapp.com') { 
?>
<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
<style>
@import "https://fonts.googleapis.com/css?family=Raleway:100,300,600";
td{width:50%;}
a{text-decoration:none;
color:#5385c1;}
.kk{
  margin: 0;
  padding: 0;
}
.kk li {
  margin: 0;
  padding-bottom: 12px;
padding-left: 10px;
  list-style: none;
color: navy;
  background: url('checkmark2.jpg') no-repeat 0 50%;
} 

@import "https://fonts.googleapis.com/css?family=Raleway:100,300,600";


body, input, select, textarea {
		color: #9a9a9a;
		font-family: "Raleway", Arial, Helvetica, sans-serif;
		font-size: 13pt;
		font-weight: 300;
		line-height: 1.65;} 

#nav{width:100%;
background-repeat:no-repeat;
height:600px;
background-image: url("banner.jpg");}
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
margin-left:400px;
margin-top:400px;
font-family: 'Lobster', cursive;}
.header{
font-family: "Raleway", Arial, Helvetica, sans-serif;
		font-size: 20pt;
		font-weight: 400;
color: #5385c1;}
.ppc{float:right;
width:40%;
border-bottom:1px silver dotted;
text-align:left;
padding:5px;
margin:50px 4px 4px 4px;}
.pp5{float:right;
width:40%;
border-bottom:1px silver dotted;
border-right:1px silver dotted;
text-align:left;
padding:5px;
margin:50px 4px 4px 4px;}
.pp4{clear:left;
width:100%;
border-bottom:1px silver dotted;
border-right:1px silver dotted;
text-align:left;
padding:5px;
margin:50px 4px 4px 4px;}
.ppl{float:left;
width:45%;
border-bottom:1px silver dotted;
text-align:left;
padding:5px;
margin:50px 4px 4px 4px;}
.pp{float:left;
height:500px;
width:30%;
border-right:1px silver dotted;
text-align:left;
padding:5px;
margin:4px;}
p{color:#5a5a5a;
font-size:18px;
font-family: "Raleway", Arial, Helvetica, sans-serif;}
.medimg1{border:#5385c1 25px solid;
border-radius:40%;
float:right;}
.medimg2{border:#5385c1 25px solid;
border-radius:40%;
float:left;}
.hh{
color:#5a5a5a;
font-style:italic;
font-weight:400;
font-size:18px;
font-family: "Raleway", Arial, Helvetica, sans-serif;
clear:left;
padding:4px;
width:300px;}
</style>
<?php
$tin = "Door to Door Laundry Service Laundry By Magic";
$ke = "laundry on demand, online laundry, laundry service, wash clothes, door to door laundry, get laundry, laundry, wash, iron, dry clothes, clean clothes, clean curtains, clean linen, launder linen, wash bedding, laundry service";
$de = "laundry service to wash and iron";
include "meta.php";
?>
<body>
<div id='nav'><a class='logo' href="index.php">Home</a>

<a class='logo' href="register.php">Register</a>
<a class='logo' href="login.php">Login</a>
<a class='logo' href="prices.php">Prices</a>
<a class='logo' href="require.php">Require</a>
<a class='logo' href="offer.php">Offer</a><br /><h1>Laundry By Magic</h1></div>
<table cellpadding='6' width='auto'><tr><td class='pp' width='30%'valign='top'><div class='header'>BOOK A WASH.<br />Instant online calculator. No hidden price shocks. Pay online.</div><p>Our drivers collect from your door, organise cleaning then return the laundered items back to your door.</p><br /><a href="map/geo5.php" class="buttonsmall">Book</a></td>

<td class='pp' valign='top'><div class='header'>GET A QUOTE.<br />Unsure about pricing? No problem get a quote instantly.</div><p>Before you make a booking let our online calculator offer you peace of mind.</p><br /><a href="quote.php" class="buttonsmall">Quote</a></td>

<td class='pp' valign='top'><div class='header'>FAIR PRICES.<br />Equitable, transparent, pricing</div><p>Transparent pricing based on weight. Never pay more per kg</p><br /><a href="prices.php" class="buttonsmall">Prices</a></td></tr></table><table>

<tr><td class='pp1' valign='top'><div class='header'>Empower people with your choice.</div></center><img class='medimg2' width='300px' src='images/pic01.jpg' /><center><div class='hh'>By entrusting us with your laundry you are empowering and employing people who might otherwise have very limited income. You are assising small business and helping the economy GROW.</div></td><td></td>
<td class='pp1' valign='top'><div class='header'>Focus on Life not Laundry</div><img class='medimg1' width='300px' src='images/pic02.jpg' /><div class='hh'>Allow us to sort your laundry! Our low prices mean that you can focus on things that matter to you and forget about the laundry. We deliver door-to-door with a 24hr turnaround timeframe.</div></td></tr></table>

<div class='pp4'><table width='100%'><tr><td>

<a href='addcontractor.php'>Apply to become a Contractor</a><br />
<a href='termsofservice.php'> TandC </a></td><td>

<form action='nlet.php' method='post'><b>Name</b><br /><input type='text' name='name' /><br /><b>Email</b><br /><input type='text' name='ema' /><br /><input type='submit' name='submit' value='GET IT!' /></form><br /></td></tr></table></div>

</body>
<? } else { 
echo " "; } 
