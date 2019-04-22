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
