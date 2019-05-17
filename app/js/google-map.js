function initMap() {

		var myLatLong = {lat:55.859970, lng: -4.252720};

		var map = new google.maps.Map(document.getElementById('googleMap'), {
			zoom: 15,
			center: myLatLong,
			panControl: false,
			mapTypeControl: false,
			zoomControlOptions: {
				style: google.maps.ZoomControlStyle.SMALL,
				position: google.maps.ControlPosition.TOP_RIGHT
				}
		});
}


function loadScript() {
		var script = document.createElement('script');     // Create <script> element
		  script.src ="https://maps.googleapis.com/maps/api/js?key=AIzaSyBdc1lhKaZ7X9xToo62bd1PZIEo6TTrdjA&callback=initMap";
		  document.body.appendChild(script);   // Add element to page  async defer;

};

window.onload = loadScript;  // on load call loadScript changed
