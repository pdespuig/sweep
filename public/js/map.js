map = L.map('map', {
    center: [0, 0],
    minZoom: 2,
    zoom: 12
})

function whereAmI() {
    var myresult = document.getElementById("demo");
    if (!navigator.geolocation) {
        myresult.innerHTML = "<p>Geolocation is not supported by your browser</p>";
        return;
    }
 
    function success(position) {
        var latitude = position.coords.latitude;
        var longitude = position.coords.longitude;
        myresult.innerHTML = '<p>Latitude is ' + latitude + '° <br>Longitude is ' + longitude + '°</p>';
        makeMyMap(latitude, longitude);
    }
 
    function error() {
        myresult.innerHTML = "Unable to retrieve your location";
    }
    myresult.innerHTML = "<p>Locating…</p>";
    navigator.geolocation.getCurrentPosition(success, error);
}

function makeMyMap(mylat, mylong) {
    map.panTo(new L.LatLng(mylat, mylong), 12);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 17,
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);

    L.marker([mylat, mylong]).addTo(map)
    .bindPopup("<b>You are here!</b>").openPopup();

    L.circle([mylat, mylong], 500, {
        color: 'red',
        fillColor: '#f2d5df',
        fillOpacity: 0.2
    }).addTo(map).bindPopup("");
    var popup = L.popup();

    function onMapClick(e) {
        popup
            .setLatLng(e.latlng)
            .setContent("You clicked the map at " + e.latlng.toString())
            .openOn(map);
    }
    map.on('click', onMapClick);

    for (var i = 0; i < markers.length; ++i) {
        L.marker([markers[i].lat, markers[i].lng], {
            icon: new L.DivIcon({
                className: 'my-div-icon',
                html: '<span class="my-map-label">' + markers[i].name + '</span>'
            })
        }).addTo(map);
 
        L.marker([markers[i].lat, markers[i].lng]).addTo(map)
            .bindPopup(markers[i].name); 
 
    }
}
