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

<link rel="stylesheet" type="text/css" href="https://js.cit.api.here.com/v3/3.0/mapsjs-ui.css?dp-version=1526040296" />
<script type="text/javascript" src="https://js.cit.api.here.com/v3/3.0/mapsjs-core.js"></script><script src="geoff.js"></script><script type="text/javascript" src="https://js.cit.api.here.com/v3/3.0/mapsjs-service.js"></script>
<script type="text/javascript" src="https://js.cit.api.here.com/v3/3.0/mapsjs-ui.js"></script>
<script type="text/javascript" src="https://js.cit.api.here.com/v3/3.0/mapsjs-mapevents.js"></script>

  <div id="map" style="width: 100%; height: 600px; background: grey" />
  <script  type="text/javascript" charset="UTF-8" >
    
/**
 * Creates a new marker and adds it to a group
 * @param {H.map.Group} group       The group holding the new marker
 * @param {H.geo.Point} coordinate  The location of the marker
 * @param {String} html             Data associated with the marker
 */
function addMarkerToGroup(group, coordinate, html) {
  var marker = new H.map.Marker(coordinate);
  // add custom data to the marker
  marker.setData(html);
  group.addObject(marker);
}

/**
 * Add two markers showing the position of Liverpool and Manchester City football clubs.
 * Clicking on a marker opens an infobubble which holds HTML content related to the marker.
 * @param  {H.Map} map      A HERE Map instance within the application
 */
function addInfoBubble(map) {
  var group = new H.map.Group();

  map.addObject(group);

  // add 'tap' event listener, that opens info bubble, to the group
  group.addEventListener('tap', function (evt) {
    // event target is the marker itself, group is a parent event target
    // for all objects that it contains
    var bubble =  new H.ui.InfoBubble(evt.target.getPosition(), {
      // read custom data
      content: evt.target.getData()
    });
    // show info bubble
    ui.addBubble(bubble);
  }, false);
  var natt = att.split('|');
        
        for (i in natt) {
var markers = natt[i].split(',');
          var name = markers[0];
          
          var type = markers[4];
          var link = markers[3];
          
          var servicesoffered = markers[5];
          var la = parseFloat(markers[1]);
          var ln = parseFloat(markers[2]);
          
          var rating = markers[6]; 
          
  addMarkerToGroup(group, {lat: la, lng: ln},
    "<div><a href=\'"+link+"\' >"+name+" </a>" +
    "</div><div>"+type+ln+"<br>Serivce "+servicesoffered+la+"</div>");
 } 



}



/**
 * Boilerplate map initialization code starts below:
 */

// initialize communication with the platform
var platform = new H.service.Platform({
  app_id: 'I9Y4iDApiDnRYg4Bcfyx',
  app_code: '8DVGvwPLV6UgKJWVU5-p3A',
  useCIT: true,
  useHTTPS: true
});
var pixelRatio = window.devicePixelRatio || 1;
var defaultLayers = platform.createDefaultLayers({
  tileSize: pixelRatio === 1 ? 256 : 512,
  ppi: pixelRatio === 1 ? undefined : 320
});

// initialize a map - this map is centered over Europe
var map = new H.Map(document.getElementById('map'),
  defaultLayers.normal.map,{
  center: {lat: lat, lng: lng},
  zoom: 14,
  pixelRatio: pixelRatio
});

// MapEvents enables the event system
// Behavior implements default interactions for pan/zoom (also on mobile touch environments)
var behavior = new H.mapevents.Behavior(new H.mapevents.MapEvents(map));

// create default UI with layers provided by the platform
var ui = H.ui.UI.createDefault(map, defaultLayers);

// Now use the map as required...
addInfoBubble(map);
  </script>

    <?
    echo "</center><hr><br />";
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
