function myMap() {
    var mapOptions = {
        center: new google.maps.LatLng(35.8763, 14.5065),
        zoom: 18,
        mapTypeId: google.maps.MapTypeId.HYBRID
    }
var map = new google.maps.Map(document.getElementById("map"), mapOptions);
}