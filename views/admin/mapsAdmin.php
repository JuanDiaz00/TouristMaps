<?php
define('LIBRARIES_PATH', '../../libraries/');
define('CONTROLLER_PATH', '../../Controller/');
define('VIEWS_PATH', '../../Views/');
define('CSS_PATH', '../../css/');
define('JS_PATH', '../../js/');
if (!defined('CONFIG_PATH')) {
    define('CONFIG_PATH', '../../config/');
}

require_once(CONTROLLER_PATH . "points.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Touristmaps</title>
    <link rel="icon" type="image/x-icon" href="../../assets/favicon.ico" />
    <script src="https://unpkg.com/leaflet@1.0.2/dist/leaflet.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.2/dist/leaflet.css" />
    
    <link rel="stylesheet" href="../../css/custom.css">
</head>

<body>

    <div id="map"></div>
    <script>
        var map = L.map('map').
        setView([0, 0],
            2.5);

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
            iconUrl: '../../img/point-map.png',
            iconSize: [38, 45], // size of the icon
            iconAnchor: [22, 44], // point of the icon which will correspond to marker's location
            popupAnchor: [-3, -43] // point from which the popup should open relative to the iconAnchor
        });
     
        <?php

        $points = getAllPoints();
        if ($points != null) {
            while ($row = mysqli_fetch_assoc($points)) {

        ?>

                L.marker([<?php echo $row["coordenadas"]; ?>], {
                    icon: greenIcon,
                    alt: '<?php echo $row["nombre"]; ?>'
                }).addTo(map).bindPopup('<img src="<?php echo $row["img"]; ?>" alt="" width="300px" height="300px">'+
                  '<br><p><?php echo $row["descripcion"]; ?></p>'  
                                      
                );
        <?php
            }
        }
        ?>
    </script>



</body>

</html>