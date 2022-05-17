<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://unpkg.com/leaflet@1.0.2/dist/leaflet.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.2/dist/leaflet.css" />
    <link rel="stylesheet" href="../css/custom.css">
</head>
<body>
    <p>hola</p>
<div id="map"></div>



<script>
    
        var map = L.map('map').
        setView([4.1156735, -72.9301367],
            6);

        Object.defineProperty(navigator, 'userAgent', {
            get: function() {
                return 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.84 Safari/537.36';
            }
        });
        L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://cloudmade.com">CloudMade</a>',
            maxZoom: 18
        }).addTo(map);

        L.control.scale().addTo(map);

        var greenIcon = L.icon({
            iconUrl: '../img/leaf-green.png',
            shadowUrl: '../img/leaf-shadow.png',

            iconSize: [38, 45], // size of the icon
            shadowSize: [50, 64], // size of the shadow
            iconAnchor: [22, 44], // point of the icon which will correspond to marker's location
            shadowAnchor: [4, 62], // the same for the shadow
            popupAnchor: [-3, -43] // point from which the popup should open relative to the iconAnchor
        });

        L.marker([4.624335, -74.063644], {
            icon: greenIcon,
            alt: 'Bogotá'
        }).addTo(map).bindPopup('Bogotá es la capital de Colombia');
    </script>

</body>
</html>