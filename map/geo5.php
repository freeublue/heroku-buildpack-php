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
<title>Laundry by Magic Contactors in Your Area</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
</head>
<body>
<div id='nav'><a class='logo' href="../index.php">Home</a>
<a class='logo' href="../services.php">Services</a>
<a class='logo' href="../prices.php">Prices</a>
<a class='logo' href="../require.php">Require</a>
<a class='logo' href="../offer.php">Offer</a></div>
<div class='ppfull'><center><div class='header'>View Contractors<br />See if we have service in your area.</div><p>Click the view contractors button after location agreement, <br />then click view after your location has appeared in co-ordinates.</p></div></center>
<center>
<div id='demo'>Co-ordinates</div>
<button onclick='getLocation();'>View Available Contractors in your area</button>
<form action='availp.php' name='myform' method='post'><input type='text' value='' name='lat' /><input type='text' value='' name='lon' />
<input type='submit' name='submit' value='View' /></form>

</center><center><div class='image12'><img src='laundry.jpg' /></div></center>
</body>
<script>
var x = document.getElementById("demo");
function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else {
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}
function showPosition(position) {
    x.innerHTML = "Latitude: " + position.coords.latitude + 
    "<br>Longitude: " + position.coords.longitude; 
myform.lat.value = position.coords.latitude;
myform.lon.value = position.coords.longitude;
}
</script>
