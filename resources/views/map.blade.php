<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="leaflet.css" />
    <script type='text/javascript' src='jquery.min.js'></script>
    <script type='text/javascript' src='leaflet.js'></script>
</head>
<body>
    <h2>Geolocation on a Leaflet Map</h2>
<p>Click the button to display your coordinates. Note that not all devices can access your location</p>
<p>You will need to allow the device to access your location</p>
<p><button onclick="whereAmI()">My location</button></p>
<div id="demo"></div>
<div id="map" style="width: 800px; height: 440px; border: 1px solid #AAA;"></div>
    <script type='text/javascript' src='where-am-I-leaf-map.js'></script>
</body>
</html>
 