<section id="location-map" class="directions-closed bottom-map">
<h3 class="icon-header" style="margin-bottom: 0px; margin-right: 0px;">Location<i class="fa fa-compass fa-lg"></i></h3>

<script>
	var map;
    var LatLang = new google.maps.LatLng( <?php echo $location['lat']; ?>, <?php echo $location['lng']; ?>);
    var MAPTYPE_ID = 'route_finder';
    var directionsDisplay;
	var directionsService = new google.maps.DirectionsService();
	
	function reset_map() {
	
	var wrap = document.getElementById('location-map');
	var panel = document.getElementById('directions-panel');
	
	wrap.className = "directions-closed";
	panel.innerHTML = "";
	document.getElementById('start').value = "";
	}
	
	function calcRoute() {
		
	var routeOptions = {
		zoom: 12, 
		center: LatLang, 
		mapTypeIds: google.maps.MapTypeId.ROADMAP
		};
		
	directionsDisplay = new google.maps.DirectionsRenderer();
		
	map = new google.maps.Map(document.getElementById('map-canvas'), routeOptions);
					
	directionsDisplay.setMap(map);
	directionsDisplay.setPanel(document.getElementById('directions-panel'));
	
	  var wrap = document.getElementById('location-map');
	  var start = document.getElementById('start').value;
	  
	  var end = LatLang;
	  var request = {
	    origin: start,
	    destination: end,
	    travelMode: google.maps.TravelMode.DRIVING
	  };
	  directionsService.route(request, function(response, status) {
	    if (status == google.maps.DirectionsStatus.OK) {
	      directionsDisplay.setDirections(response);	  
	      wrap.className = "directions-open";
	      $('html,body').animate({scrollTop: $("#location-map").offset().top},'slow');
	      
	      $('#directions-panel').slimScroll({
			   height: '300px',
			   alwaysVisible: true
		  });
	    }
	  });

	};
	
	//google.maps.event.addDomListener(window, 'load', initialize);
	
</script>
	<div id="map-canvas"></div>

	<div id="directions-panel-wrap" class="hidden-xs">
		<div class="panel-head"><i class="fa fa-map-marker fa-lg"></i> Your directions</div>
		<div id="directions-panel"></div>
		<button class="close-btn hidden-xs" onclick="reset_map();"><span class="glyphicon glyphicon-remove"></span></a>
	</div>
	
</section>