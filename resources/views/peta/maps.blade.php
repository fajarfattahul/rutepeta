
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8' />
    <title></title>
    <meta name='robots' content='noindex, nofollow'>
    <meta name='viewport' content='initial-scale=1,maximum-scale=1,user-scalable=no' />
    <script src='https://static-assets.mapbox.com/gl-js-pricing/dist/mapbox-gl.js'></script>
    <link href='https://static-assets.mapbox.com/gl-js-pricing/dist/mapbox-gl.css' rel='stylesheet' />
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
    
        <style>
            body {
                margin:0;
                padding:0;
            }
            #map {
                position:absolute;
                top:0;
                bottom:0;
                width:100%;
            }
            #instructions {
                position:absolute;
                margin:20px;
                width: 25%;
                top:0;
                bottom:20%;
                padding: 20px;
                background-color: rgba(255,255,255,0.9);
                overflow-y: scroll;
                font-family: sans-serif;
                font-size: 0.8em;
                line-height: 2em;
            }
            .duration {
                font-size: 2em;
            }
        </style>

    </head>
    <body>

    <div id='map'></div>
    <div id='instructions'></div>
    
    <script>

    mapboxgl.accessToken = 'pk.eyJ1IjoiZXhhbXBsZXMiLCJhIjoiY2p0MG01MXRqMW45cjQzb2R6b2ptc3J4MSJ9.zA2W0IkI0c6KaAhJfk9bWg';
    var map = new mapboxgl.Map({
        container: 'map', // container id
        style: 'mapbox://styles/mapbox/streets-v11', //stylesheet location
        center: [-5.0995147004442325, 119.46224212646484], // starting position
        zoom: 12, // starting zoom
    });

    // set the bounds of the map
    var bounds = [[-123.069003,45.395273],[-122.303707,45.612333]];
    map.setMaxBounds(bounds);

    // initialize the map canvas to interact with later
    var canvas = map.getCanvasContainer();

    // an arbitrary start will always be the same
    // only the end or destination will change
    var start = [-5.0995147004442325, 119.46224212646484];

    // create a function to make a directions request
    function getRoute(end) {
        // make directions request using cycling profile
        var url = 'https://api.mapbox.com/directions/v5/mapbox/cycling/' + start[0] + ',' + start[1] + ';' + end[0] + ',' + end[1] + '?steps=true&geometries=geojson&access_token=' + mapboxgl.accessToken;

        // make an XHR request https://developer.mozilla.org/en-US/docs/Web/API/XMLHttpRequest
        var req = new XMLHttpRequest();
        req.responseType = 'json';
        req.open('GET', url, true);
        req.onload  = function() {
        var data = req.response.routes[0];
        var route = data.geometry.coordinates;
        var geojson = {
            "type": "Feature",
            "properties": {},
            "geometry": {
            "type": "LineString",
            "coordinates": route
            }
        };
        // if the route already exists on the map, we'll reset it using setData
        if (map.getSource('route')) {
            map.getSource('route').setData(geojson);
        }
        // otherwise, we'll make a new request
        else {
            map.addLayer({
            "id": "route",
            "type": "line",
            "source": {
                "type": "geojson",
                "data": {
                "type": "Feature",
                "properties": {},
                "geometry": {
                    "type": "LineString",
                    "coordinates": geojson
                }
                }
            },
            "layout": {
                "line-join": "round",
                "line-cap": "round"
            },
            "paint": {
                "line-color": "#3887be",
                "line-width": 5,
                "line-opacity": 0.75
            }
            });
        };

        // get the sidebar and add the instructions
        var instructions = document.getElementById('instructions');
        var steps = data.legs[0].steps;

        var tripInstructions = [];
        for (var i = 0; i < steps.length; i++) {
            tripInstructions.push('<br><li>' + steps[i].maneuver.instruction) + '</li>';
            instructions.innerHTML = '<br><span class="duration">Trip duration: ' + Math.floor(data.duration/60) + ' min 🚴 </span>' + tripInstructions;
        };
        };
        req.send();
    };

    map.on('load', function(){
        // make an initial directions request that
        // starts and ends at the same location
        getRoute(start);

        // Add destination to the map
        map.addLayer({
        "id": "point",
        "type": "circle",
        "source": {
            "type": "geojson",
            "data": {
            "type": "FeatureCollection",
            "features": [{
                "type": "Feature",
                "properties": {},
                "geometry": {
                "type": "Point",
                "coordinates": start
                }
            }
            ]
        }
        },
        "paint": {
        "circle-radius": 10,
        "circle-color": "#3887be"
        }
    });

    // allow the user to click the map to change the destination
    map.on('click', function(e) {
        var coordsObj = e.lngLat;
        canvas.style.cursor = '';
        var coords = Object.keys(coordsObj).map(function (key) { return coordsObj[key]; });
        var end = {
        "type": "FeatureCollection",
        "features": [{
            "type": "Feature",
            "properties": {},
            "geometry": {
            "type": "Point",
            "coordinates": coords
            }
        }
        ]
    };

    if (map.getLayer('end')) {
        map.getSource('end').setData(end);
    } else {
        map.addLayer({
        "id": "end",
        "type": "circle",
        "source": {
            "type": "geojson",
            "data": {
            "type": "FeatureCollection",
            "features": [{
                "type": "Feature",
                "properties": {},
                "geometry": {
                "type": "Point",
                "coordinates": coords
                }
            }
            ]
        }
        },
        "paint": {
        "circle-radius": 10,
        "circle-color": "#f30"
        }
    });
    };
    getRoute(coords);
    });
    });
</script>

</body>
</html>
