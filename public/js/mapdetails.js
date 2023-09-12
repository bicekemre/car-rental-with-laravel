function initMapListing(lat, long) {
    var myLatLng = {lat: lat, lng: long};
    var map = new google.maps.Map(document.getElementById('listing-map'), {
        zoom: 15,
        center: myLatLng,
        scrollwheel: false
    });

    var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        title: 'Hello World!'
    });
}
