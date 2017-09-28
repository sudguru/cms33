<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<style>
		#map {
			height: 550px;
			width: 100%;
		}
	</style>
</head>
<body>
	<input id="pac-input" class="form-control" type="text" placeholder="Enter Your City / Location to find Map">
	<div id="map"></div>
	<div id="distance"></div>
</div>

<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC63kMI8s4m4wvD9pGIZFSOoIVLA4UIOsc&libraries=places&callback=initMap">
</script>


<script>
	function getDistance(dest) {

		var o = {lat: 27.659023, lng: 85.324517};
		var d = dest;
		var service = new google.maps.DistanceMatrixService();
		service.getDistanceMatrix(
		{
			origins: [o],
			destinations: [d],
			travelMode: 'DRIVING'
		},callback);

		function callback(response, status){
			console.log(response);
			if(status == "OK") {
				var origins = response.originAddresses;
				var destinations = response.destinationAddresses;
				var distance = response.rows[0].elements[0].distance.text;
				$('#distance').html(distance);
				// for(var i = 0; i < origins.length; i++){
				// 	var results = response.rows[i].elements;
				// 	console.log(results);
				// 	for(var j = 0; j < results.length; j++){
				// 		var element = results[j];
				// 		var distance = element.distance.text;
				// 		var duration = element.duration.text;
				// 		var from = origins[i];
				// 		var to = destinations[j];
				// 	}
				// }
			}
		}
	}

</script>
<script>
	function initMap() {
		var kathmandu = {lat: 27.659023, lng: 85.324517};
		map = new google.maps.Map(document.getElementById('map'), {
			zoom: 17,
			center: kathmandu,
			scrollwheel:  false
		});

		var marker = new google.maps.Marker({
			position: kathmandu,
			map: map,
			draggable: true
		});

    	// Create the search box and link it to the UI element.
    	var input = document.getElementById('pac-input');
    	var searchBox = new google.maps.places.SearchBox(input);

    	// Bias the SearchBox results towards current map's viewport.
    	map.addListener('bounds_changed', function() {
    		searchBox.setBounds(map.getBounds());
    	});

    	searchBox.addListener('places_changed', function() {
    		var places = searchBox.getPlaces();

    		if (places.length == 0) {
    			return;
    		}

      		// For each place, get the icon, name and location.
      		var bounds = new google.maps.LatLngBounds();

      		places.forEach(function(place) {

      			marker.setPosition(place.geometry.location);

      			var latLng = marker.getPosition(); 
      			currentLatitude = latLng.lat();
      			currentLongitude = latLng.lng();
      			var latlng_data = {
      				lat: currentLatitude,
      				lng: currentLongitude
      			};
    			getDistance(latlng_data);

      			if (place.geometry.viewport) {
      				bounds.union(place.geometry.viewport);
      			} else {
      				bounds.extend(place.geometry.location);
      			}
      		});
      		map.fitBounds(bounds);
      	});

    	marker.addListener('dragend', function() {
    		map.setCenter(marker.getPosition());
    		var latLng = marker.getPosition(); 
    		currentLatitude = latLng.lat();
    		currentLongitude = latLng.lng();
    		var latlng_data = {
      				lat: currentLatitude,
      				lng: currentLongitude
      			};
    		getDistance(latlng_data);
    	});

    	map.addListener('dragend', function () {
		    marker.setPosition(this.getCenter()); // set marker position to map center
		    var latLng = marker.getPosition(); 
		    currentLatitude = latLng.lat();
		    currentLongitude = latLng.lng();
		    var latlng_data = {
      				lat: currentLatitude,
      				lng: currentLongitude
      			};
    		getDistance(latlng_data);
		});
    }
</script>
</body>
</html>


