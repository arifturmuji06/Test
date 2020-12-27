<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        #map {
            height: 500px;
            width: auto;
        }
    </style>
</head>

<body>
    <div id="map">

    </div>


    <script>
        function initMap() {
            var location = {
                lat: -25.363,
                lng: 131.044
            };
            var map = new google.maps.Map(document.getElementById("map"), {
                zoom: 4,
                center: location
            });
        }
    </script>
    <!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAL8lyE9CjWsPbmyaIslVSCThP_XGgrE3w&callback=initMap"></script> -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAL8lyE9CjWsPbmyaIslVSCThP_XGgrE3w&callback=initMap" type="text/javascript"></script>
</body>

</html>