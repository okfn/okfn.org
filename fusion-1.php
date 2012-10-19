<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <style type="text/css">
      html { height: 100% }
      body { height: 100%; margin: 0; padding: 0 }
      #map_canvas { height: 100% }
    </style>
    <script type="text/javascript"
      src="http://maps.googleapis.com/maps/api/js?key=AIzaSyD0UZnTQOLKDN3N_3I7OMOl6UN-Murga8o&sensor=false">
    </script>
    <script type="text/javascript">
      function initialize() {
        var mapOptions = {
          center: new google.maps.LatLng(51.48061, 0.001215),
          zoom: 5,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("map_canvas"),
            mapOptions);
				
				//fusion layers
				layer = new google.maps.FusionTablesLayer({
						query: {
								from: '11aoimL4ciwfsZETbBpeLmDReW-aFn44Yx3GAx7U',
								where: 'Status > 0'
						}
				});
				layer.setMap(map)
				
				meetuplayer = new google.maps.FusionTablesLayer({
						query: {
								from: 5505792,
								where: "'status' = 'pending'"
						},
						styles: [{
							markerOptions: {
								iconName: "large_blue"
							}
						}]
				});
				meetuplayer.setMap(map);
		 
				
      }
    </script>
  </head>
  <body onload="initialize()">
    <div id="map_canvas" style="width:100%; height:100%"></div>
  </body>
</html>
