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
.buttonsmall{
height:30px;
width:250px;
padding:10px;
background: #5385c1;
color:white;}
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
font-family: "Raleway", Arial, Helvetica, sans-serif;}</style><!DOCTYPE html >
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <title>Laundry by Magic, Contractors available in Area</title>

</head>
<body>
<div id='nav'><a class='logo' href="../index.php">Home</a>
<a class='logo' href="../services.php">Services</a>
<a class='logo' href="../prices.php">Prices</a>
<a class='logo' href="../require.php">Require</a>
<a class='logo' href="../offer.php">Offer</a></div>
<div class='ppfull'><center><div class='header'>Available Contractors<br />See if we have service in your area.</div><p>Collection and Delivery vehicles in Blue<br />Launderers in Red. Click for details</p></div></center>
<?php
$lat = $_POST['lat'];
$lon = $_POST['lon'];
?>
<script>
var lat = "<?php echo $lat;?>";
var lon = "<?php echo $lon;?>";
</script>
<center>
<script src="../geoff.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8iLOdr3AXEf8PcwCbnSUq48e0jrEMbKc"
            type="text/javascript"></script>
    <script type="text/javascript">
    //<![CDATA[

    var customIcons = {
      driver: {
        icon: 'http://labs.google.com/ridefinder/images/mm_20_blue.png'
      },
      Laundry: {
        icon: 'http://labs.google.com/ridefinder/images/mm_20_red.png'
      }
    };




    function load() {
      var map = new google.maps.Map(document.getElementById("map"), {
        center: new google.maps.LatLng(lat, lon),
        zoom: 14,
        mapTypeId: 'roadmap'
      });
      var infoWindow = new google.maps.InfoWindow;

      // Change this depending on the name of your PHP file
      downloadUrl("geomarker.xml", function(data) {
        var xml = data.responseXML;
var natt = att.split('|');
        
        for (i in natt) {
var markers = natt[i].split(',');
       var name = markers[0];
          
          var type = markers[4];
          var link = markers[3];
          
          var servicesoffered = markers[5];
          
          
          var rating = markers[6];

          var point = new google.maps.LatLng(
              parseFloat(markers[1]),
              parseFloat(markers[2]));
          var html = "<table><tr><td><h4>" + name + "</h4></td></tr><tr><td>" + servicesoffered + "</td></tr><tr><td>Stars" + rating + "</td></tr><td><td><a href='" + link + "'class=\"buttonsmall\" />Book a Wash</a></td></tr></table>";
          var icon = customIcons[type] || {};
          var marker = new google.maps.Marker({
            map: map,
            position: point,
            icon: icon.icon
          });
          bindInfoWindow(marker, map, infoWindow, html);
        }
      });
    }

    function bindInfoWindow(marker, map, infoWindow, html) {
      google.maps.event.addListener(marker, 'click', function() {
        infoWindow.setContent(html);
        infoWindow.open(map, marker);
      });
    }

    function downloadUrl(url, callback) {
      var request = window.ActiveXObject ?
          new ActiveXObject('Microsoft.XMLHTTP') :
          new XMLHttpRequest;

      request.onreadystatechange = function() {
        if (request.readyState == 4) {
          request.onreadystatechange = doNothing;
          callback(request, request.status);
        }
      };

      request.open('GET', url, true);
      request.send(null);
    }

    function doNothing() {}

    //]]>

  </script>

  </head>

  <body onload="load()">
    <div id="map" style="width: 800px; height: 500px"></div>
    <?
    include "../config.php";
    

$sql = 'SELECT * FROM copro';
         $result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) { 
            $img = $row[cp_img];
            $name = $row[cp_name];
            $fname = $row[cp_fname];
            $descp = $row[cp_desc];
            $rate = $row[cp_rating];
            $service = $row[cp_services_offered];
            
            echo "<br /><br /><center><table cellpadding='2'>";
            echo "<tr><td rowspsn='2'><img src='$img' width='100px' /></td></tr>";
            echo "<tr><td>Name</td><td>$name</td></tr>";
            echo "<tr><td>Contractor</td><td>$fname</td></tr>";
            echo "<tr><td>Rating</td><td>$rate</td></tr>";
            echo "<tr><td>Equipment</td><td>$service</td></tr>";
            echo "<tr><td>Description</td><td>$descp</td></tr>";
            echo "<tr><td>Select this service</td><td><a href='../ordercontractor.php?id=$row[cp_id]'>Select</a></td></tr>";
            echo "</table></center><br />";
              } } 
              ?>
  </body>

</html>
