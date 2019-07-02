<?php
$lat = trim($_POST['lat']);
$lon = trim($_POST['lng']);

?>
<script>
var lat = "<?php echo $lat;?>";
var lon = "<?php echo $lon;?>";
lat = parseFloat(lat);
lon = parseFloat(lon);
</script>
<center>



<link rel="stylesheet" type="text/css" href="https://js.cit.api.here.com/v3/3.0/mapsjs-ui.css?dp-version=1526040296" />
<script type="text/javascript" src="https://js.cit.api.here.com/v3/3.0/mapsjs-core.js"></script><script src="../geoff.js"></script><script type="text/javascript" src="https://js.cit.api.here.com/v3/3.0/mapsjs-service.js"></script>
<script type="text/javascript" src="https://js.cit.api.here.com/v3/3.0/mapsjs-ui.js"></script>
<script type="text/javascript" src="https://js.cit.api.here.com/v3/3.0/mapsjs-mapevents.js"></script>

  <div id="map" style="width: 100%; height: 600px; background: grey" />
  <script  type="text/javascript" charset="UTF-8" >
    

function addMarkerToGroup(group, coordinate, html) {
  var marker = new H.map.Marker(coordinate);
  // add custom data to the marker
  marker.setData(html);
  group.addObject(marker);
}


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
    "</div><div>"+type+"<br>Serivce "+servicesoffered+"</div>");
 } 



} 
function addCircleToMap(map){
  map.addObject(new H.map.Circle(
    // The central point of the circle
    {lat: lat, lng: lon},
    // The radius of the circle in meters
    5000,
    {
      style: {
        strokeColor: 'rgba(55, 85, 170, 0.6)', // Color of the perimeter
        lineWidth: 2,
        fillColor: 'rgba(0, 128, 0, 0.7)'  // Color of the circle
      }
    }
  ));
}




/**
 * Boilerplate map initialization code starts below:
 */

// initialize communication with the platform
var platform = new H.service.Platform({
      app_id: 'aOZ0gFA9M1Q3OwAeU90E',
    app_code: 'HV1Z1K2sggmrpFEXUg9Wtg',
  useCIT: true,
  useHTTPS: true
});
var pixelRatio = window.devicePixelRatio || 1;
var defaultLayers = platform.createDefaultLayers({
  tileSize: pixelRatio === 2 ? 256 : 512,
  ppi: pixelRatio === 2 ? undefined : 320
});

// initialize a map - this map is centered over Europe
var map = new H.Map(document.getElementById('map'),
  defaultLayers.normal.map,{
  center: {lat: lat, lng: lon},
  zoom: 13,
  pixelRatio: pixelRatio
});

// MapEvents enables the event system
// Behavior implements default interactions for pan/zoom (also on mobile touch environments)
var behavior = new H.mapevents.Behavior(new H.mapevents.MapEvents(map));

// create default UI with layers provided by the platform
var ui = H.ui.UI.createDefault(map, defaultLayers);

// Now use the map as required...
addInfoBubble(map);
addCircleToMap(map);
  </script>

    
  </body>

</html>