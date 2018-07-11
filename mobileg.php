<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet"><link href="css.css" rel="stylesheet">
<!doctype html><html><head><title>Laundry By Magic</title><meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="jquery.mobile-1.4.5.min.css" /><script src="jquery-1.11.1.min.js"></script><script src="jquery.mobile-1.4.5.min.js"></script></head>
<body onload='getLocation();'>
<script>
$(function() {
  setTimeout(hideSplash, 3000);
});

function hideSplash() {
$.mobile.changePage("#one", "fade");
} </script>
<div data-role="page" data-theme="b" id="splash" style="background-color: #fff;">
<div class="splash"><center><img src="banner5.jpg" alt="splash" /></center>
</div></div>

<div data-role="page" data-theme="b" id='one'><div data-role="header">
<style>#yy {
background-image: url("bg.jpg");
background-size:100%;}
</style>
<h2>Door-to-Door Laundry Service.</h2>
</div><!-- /header -->

<div role="main" style='background-size:100%;' class="ui-content">
<img src='banner.jpg' style='border-radius:15%;' width='100%' />
<a href="#four" style='background-image:url(bg.jpg);' data-role="button" data-icon="arrow-r" data-iconpos="bottom" data-transition="flip">BOOK</a><br />
<a href="#two" style='background-image:url(bg.jpg);' data-role="button" data-icon="arrow-r" data-iconpos="bottom" data-transition="flip">QUOTE</a><br />
<a href="#popup" style='background-image:url(bg.jpg);' data-role="button" data-icon="arrow-r" data-iconpos="bottom" data-transition="pop">PRICES</a>

</div><!-- /content -->


<div data-role="footer">
<h4>&#169 Laundrybymagic 2018</h4>
<center><a href="#one" data-role="button" data-inline="true" data-icon="home" data-iconpos="bottom" data-transition="pop">Home</a>
<a href="#five" data-role="button" data-inline="true" data-icon="user" data-iconpos="bottom" data-transition="pop">Profile</a>
<a href="#six" data-role="button" data-inline="true" data-icon="info" data-iconpos="bottom" data-transition="pop">About</a>


</div><!-- /footer -->

</div><!-- /page -->

<!-- Start of second page: #two -->
<div data-role="page" id="two" data-theme="b">

	<div data-role="header">
		<h1>Quote</h1>
	</div><!-- /header -->

	<div role="main" class="ui-content">
		<h2>Calculate Costs</h2>
		<p>
<?php
include "config.php";
echo "<form action='calculateservice1.php' method='post'>";
echo "<b>Please Select the quantity in KG's of each item you require. Minimum 6kgs</b><br />";
$sq = "SELECT * FROM prices";
$res = mysqli_query($conn, $sq);
while($row = mysqli_fetch_object($res) ) { 

echo 'NAME : ' . "$row->ser_name<br />";
echo 'Price : R' . "$row->ser_pricedc $row->ser_id<br />";
echo 'Quantity :' . "$ro->ser_id<select name='quant_$row->ser_id' id='select-choice-mini' data-mini='true' data-inline='true' >";
foreach(range(0,60) as $opt)  { 
$tr = $opt . '_' . $row->ser_pricedc;
echo "<option value='$tr'>$opt</option>";
} 
echo "</select><br />"; 


} 
echo "<input type='submit' value='submit' name='submit' /></form>";
?>
</p>
		<p><a href="#one" data-direction="reverse" class="ui-btn ui-shadow ui-corner-all ui-btn-b">Back Home</a></p>

	</div><!-- /content -->

	<div data-theme="b" data-role="footer">
		
<h4>&#169 Laundrybymagic 2016</h4>
<center><a href="#one" data-role="button" data-inline="true" data-icon="home" data-iconpos="bottom" data-transition="pop">Home</a>
<a href="#five" data-role="button" data-inline="true" data-icon="user" data-iconpos="bottom" data-transition="pop">Profile</a>
<a href="#six" data-role="button" data-inline="true" data-icon="info" data-iconpos="bottom" data-transition="pop">About</a>
	</div><!-- /footer -->
</div><!-- /page two -->

<!-- Start of third page: #popup -->
<div data-role="page" id="popup">

	<div data-role="header" data-theme="b">
		<h1>Prices</h1>
	</div><!-- /header -->

	<div role="main" class="ui-content">
		<h2>Prices</h2>
		<p><table><th>Item</th><th>Description</th><th>Price</th>											<tr>
												<td>Wash</td>
												<td>Sort, Wash, Dry</td>
												<td>R8/kg</td>
											</tr>
											<tr>
												<td>Wash, Fold</td>
												<td>Wash, Dry, Fold</td>
												<td>R10/kg</td>
											</tr>
											<tr>
												<td>Wash, Hang</td>
												<td>Wash, Dry, Hang(no machine dry).</td>
												<td>R12/kg</td>
											</tr>
											<tr>
												<td>Wash, Dry, Iron, Fold</td>
												<td>Wash, Dry, Iron, Fold.</td>
												<td>R19.5/kg</td>
											</tr></table></p>
		<p><a href="#one" data-rel="back" class="ui-btn ui-shadow ui-corner-all ui-btn-inline ui-icon-back ui-btn-icon-left">Back Home</a></p>
	</div><!-- /content -->

	<div data-role="footer">
<h4>&#169 Laundrybymagic 2018</h4>
<center><a href="#one" data-role="button" data-inline="true" data-icon="home" data-iconpos="bottom" data-transition="pop">Home</a>
<a href="#five" data-role="button" data-inline="true" data-icon="user" data-iconpos="bottom" data-transition="pop">Profile</a>
<a href="#six" data-role="button" data-inline="true" data-icon="info" data-iconpos="bottom" data-transition="pop">About</a>
	</div><!-- /footer -->
</div><!-- /page popup -->



<!-- Start of third page: #three -->
<div data-role="page" id="three" data-theme="c">

	<div data-role="header">
		<h1>Book</h1>
	</div><!-- /header -->

	<div role="main" class="ui-content">
		<h2>Book a Wash</h2>
		<p>


</p>
		<p><a href="#four" data-direction="reverse" class="ui-btn ui-shadow ui-corner-all ui-btn-b">Back Home</a></p>

	</div><!-- /content -->

	<div data-role="footer">
		<h4>&#169 Laundrybymagic 2018</h4>
<center><a href="#one" data-role="button" data-inline="true" data-icon="home" data-iconpos="bottom" data-transition="pop">Home</a>
<a href="#five" data-role="button" data-inline="true" data-icon="user" data-iconpos="bottom" data-transition="pop">Profile</a>
<a href="#six" data-role="button" data-inline="true" data-icon="info" data-iconpos="bottom" data-transition="pop">About</a>
	</div><!-- /footer -->
</div><!-- /page three -->




<!-- Start of fourth page: #four -->
<div data-role="page" id="four" data-theme="c">

	<div data-role="header">
		<h1>Map</h1>
	</div><!-- /header -->

	<div role="main" class="ui-content">
		<h2>Map</h2>
		<p>Reload in browserbar for details.
<div id='demo'>Co-ordinates</div><center>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8iLOdr3AXEf8PcwCbnSUq48e0jrEMbKc"
            type="text/javascript"></script>
    <script type="text/javascript">
    //<![CDATA[

    var customIcons = {
      driver: {
        icon: 'http://labs.google.com/ridefinder/images/mm_20_blue.png'
      },
      laundry: {
        icon: 'http://labs.google.com/ridefinder/images/mm_20_red.png'
      }
    };




    function load() {
      var map = new google.maps.Map(document.getElementById("map"), { 

        center: new google.maps.LatLng(lat, lon),
        zoom: 13,
        mapTypeId: 'roadmap'
      });
      var infoWindow = new google.maps.InfoWindow;

      // Change this depending on the name of your PHP file
      downloadUrl("geomarker.xml", function(data) {
        var xml = data.responseXML;
        var markers = xml.documentElement.getElementsByTagName("marker");
        for (var i = 0; i < markers.length; i++) {
          var name = markers[i].getAttribute("name");
          var address = markers[i].getAttribute("address");
          var type = markers[i].getAttribute("type");
          var link = markers[i].getAttribute("link");

          var point = new google.maps.LatLng(
              parseFloat(markers[i].getAttribute("lat")),
              parseFloat(markers[i].getAttribute("lng")));
          var html = "<b>" + name + "</b> <br/><a href='" + link + "'/>Message</a>";
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

  </script><div id="map" style="width: 500px; height: 300px"></div></center></p>
		<p><a href="#one" data-direction="reverse" class="ui-btn ui-shadow ui-corner-all ui-btn-b">Back Home</a></p>

	</div><!-- /content -->

	<div data-role="footer">
		<h4>&#169 Laundrybymagic 2018</h4>
	</div><!-- /footer -->
</div><!-- /page three -->







</body></html>
<script>
var lat;
var lon;
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

lat = position.coords.latitude;
lon = position.coords.longitude;
load();
          

} </script>
