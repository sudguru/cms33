@extends ('layouts.master')
<style>
	#map
	{
		width: 100%;
		height: 500px;
	}
</style>
@section('content')
<h3>Location in Google Map</h3>
<form action="/googlemap" method="POST" id="map-form">
	{{ csrf_field() }}
<input id="pac-input" class="form-control" type="text" placeholder="Enter Your City / Location to find Map">
<input type="hidden" name="latlng" id="latlng" value="{{ $site->latlng }}" />
<div id="map"></div>
</form>
@endsection

@section('footerjs')

	<script>
	function initMap() {
		var kathmandu = {<?php echo $site->latlng; ?>};
		map = new google.maps.Map(document.getElementById('map'), {
			zoom: 15,
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
                var latlng_data = "lat: "+currentLatitude+", lng: "+currentLongitude;
                $('#latlng').val(latlng_data);
            	$('#map-form').submit();

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
        	var latlng_data = "lat: "+currentLatitude+", lng: "+currentLongitude;
        	$('#latlng').val(latlng_data);
            $('#map-form').submit();
        });

        map.addListener('dragend', function () {
		    marker.setPosition(this.getCenter()); // set marker position to map center
		    var latLng = marker.getPosition(); 
		    currentLatitude = latLng.lat();
		    currentLongitude = latLng.lng();
		    var latlng_data = "lat: "+currentLatitude+", lng: "+currentLongitude;
		    $('#latlng').val(latlng_data);
            $('#map-form').submit();
		});
	}
</script>

<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC63kMI8s4m4wvD9pGIZFSOoIVLA4UIOsc&libraries=places&callback=initMap">
</script>
	<script>
	$(document).ready(function(){

        $('#map-form').on( "submit", function(event) { 

            event.preventDefault();

            var form = new FormData(this);
            $.ajax({
                url: '/googlemap',
                data: form,
                cache: false,
                contentType: false,
                processData: false,
                type: 'POST',
                success:function(response) {
                   console.log(response);
                   $.toaster({ priority : 'success', title : 'Success', message : 'Data Saved' });
                },
                error: function(data)
                {
                    var errors = data.responseJSON;
                    //var errors = data.responseText;
                }
            });
        });

	});
	</script>
	
@endsection