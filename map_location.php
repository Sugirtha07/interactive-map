<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interactive Map - Sample Location</title>

    <!-- Leaflet.js CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />

    <style>
        /* Set the map height and ensure it's displayed properly */
        #map {
            height: 500px;  
            width: 100%;
            background-color: white;
        }

        /* Customizing the map container and page layout */
        body {
            background-color: #f0f0f0; /* Light gray background */
            color: #000; /* Black text */
            font-family: Arial, sans-serif;
        }

        h1 {
            color: #0000FF; /* Blue heading */
            text-align: center;
        }

        #map-container {
            padding: 10px;
            border: 1px solid #000; /* Black border */
            background-color: #fff; /* White background */
            margin: 0 auto;
            max-width: 800px; /* Map container width */
        }

        /* Custom Leaflet marker styles */
        .leaflet-popup-content-wrapper {
            background-color: #000; /* Black background for popups */
            color: #fff; /* White text in popups */
        }

        .leaflet-popup-tip {
            background-color: #000; /* Black background for popup tip */
        }
    </style>
</head>
<body>

    <h1>Interactive Map - Sample Location</h1>

    <!-- Map container -->
    <div id="map-container">
        <div id="map"></div>
    </div>

    <!-- Leaflet.js Script -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

    <script>
        // Create a map object and set the initial view (centered around the sample location)
        var map = L.map('map').setView([13.0474, 80.2090], 13); // Centered on the coordinates of the sample location

        // Set up the tile layer with a light, neutral theme (white, black, blue compatible)
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
            maxZoom: 18
        }).addTo(map);

        // Marker icon with blue color
        var markerIcon = L.icon({
            iconUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/images/marker-icon.png',
            iconSize: [25, 41], // size of the icon
            iconAnchor: [12, 41], // point of the icon which will correspond to marker's location
            popupAnchor: [1, -34] // point from which the popup should open relative to the iconAnchor
        });

        // Add a marker for the sample location with popup information
        L.marker([13.0474, 80.2090], {icon: markerIcon}).addTo(map)
            .bindPopup("<b>Sample Location:</b><br>17, Iyyapan Kovil Street, K.K.Nagar, Chennai").openPopup();

        // Enable zoom and pan controls (enabled by default)
        map.zoomControl.setPosition('topright'); // You can adjust this position
    </script>

</body>
</html>

