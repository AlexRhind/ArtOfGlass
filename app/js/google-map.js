function init() {

var pinLocation = new google.maps.LatLng(55.627154,-6.183849);

var mapOptions = {  // Set up the map options - this is GoMA LatLong
		center: new google.maps.LatLng(55.859970,-4.252720),
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		zoom: 15,
		panControl: false,
		mapTypeControl: false,
		zoomControlOptions: {
	  	style: google.maps.ZoomControlStyle.SMALL,
		position: google.maps.ControlPosition.TOP_RIGHT
  	},
  };

var venueMap;  // Map() draws a map

    venueMap = new google.maps.Map(document.getElementById('googleMap'), mapOptions);

	var startPosition = new google.maps.Marker({   // Marker() draws a marker using values given
		position: pinLocation,
		map: venueMap,
		title: "GoMA", //tooltip
		//icon: "../img/baseline-person_pin_circle-24px.png"
	});

}

function loadScript() {

	var script = document.createElement('script');     // Create <script> element
	  script.src = 'http://maps.googleapis.com/maps/api/js?key=AIzaSyB6Uq77t94TAXz7Ldp1Ax7VRpn2mDP2dsQ&callback=mapOptions';
	  document.body.appendChild(script);   // Add element to page

};

window.onload = loadScript;  // on load call loadScript()
