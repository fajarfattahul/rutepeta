<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8' />
        <title>Delivery App</title>
        <meta name='viewport' content='initial-scale=1,maximum-scale=1,user-scalable=no' />
        <script src='https://npmcdn.com/@turf/turf/turf.min.js'></script>
        <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
        <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v1.0.0/mapbox-gl.js'></script>
        <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v1.0.0/mapbox-gl.css' rel='stylesheet' />
        <style>

        body {
            margin: 0;
            padding: 0;
        }

        #map {
            position: absolute;
            top: 0;
            bottom: 0;
            right: 0;
            left: 0;
        }

        .truck {
        margin: -10px -10px;
        width: 20px;
        height: 20px;
        border: 2px solid #fff;
        border-radius: 50%;
        background: #3887be;
        pointer-events: none;
        }

        </style>
    </head>
    <body>
        <div id='map' class='contain'></div>
        <script>
        var truckLocation = [119.46204900741577,-5.099845977809464];
        var warehouseLocation = [119.46204900741577,-5.099845977809464];
        var lastQueryTime = 0;
        var lastAtRestaurant = 0;
        var keepTrack = [];
        var currentSchedule = [];
        var currentRoute = null;
        var pointHopper = {};
        var pause = true;
        var speedFactor = 50;

        // Add your access token
        mapboxgl.accessToken = 'pk.eyJ1IjoiZmFqYXJmYXR0YWh1bCIsImEiOiJjanY5NW0wcWcwYnR1NGRwN29yM2tmem1wIn0.LvZ0ADIbfCSN03xIhbXKPA';

        // Initialize a map
        var map = new mapboxgl.Map({
            container: 'map', // container id
            style: 'mapbox://styles/mapbox/light-v10', // stylesheet location
            center: truckLocation, // starting position
            zoom: 14 // starting zoom
        });

        map.on('load', function() {
        var marker = document.createElement('div');
        marker.classList = 'truck';

        // Create a new marker
        truckMarker = new mapboxgl.Marker(marker)
            .setLngLat(truckLocation)
            .addTo(map);
        })

        // Create a GeoJSON feature collection for the warehouse
        var warehouse = turf.featureCollection([turf.point(warehouseLocation)]);
        
        // Create a circle layer
        map.addLayer({
        id: 'warehouse',
        type: 'circle',
        source: {
            data: warehouse,
            type: 'geojson'
        },
        paint: {
            'circle-radius': 20,
            'circle-color': 'white',
            'circle-stroke-color': '#3887be',
            'circle-stroke-width': 3
        }
        });

        // Create a symbol layer on top of circle layer
        map.addLayer({
        id: 'warehouse-symbol',
        type: 'symbol',
        source: {
            data: warehouse,
            type: 'geojson'
        },
        layout: {
            'icon-image': 'grocery-15',
            'icon-size': 1
        },
        paint: {
            'text-color': '#3887be'
        }
        });

        </script>
    </body>
</html>