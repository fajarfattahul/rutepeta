    mapboxgl.accessToken = 'pk.eyJ1IjoiZmFqYXJmYXR0YWh1bCIsImEiOiJjanY5NW0wcWcwYnR1NGRwN29yM2tmem1wIn0.LvZ0ADIbfCSN03xIhbXKPA';
    var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11',
        center: [119.43886399269104, -5.178011946373352],
        zoom: 13
    });

    var marker = new mapboxgl.Marker({
        draggable: true
    }) // Initialize a new marker
    .setLngLat([119.43886399269104, -5.178011946373352]) // Marker [lng, lat] coordinates
    .addTo(map); // Add the marker to the map
    
    function onDragEnd() {
        var lngLat = marker.getLngLat();
        coordinates.style.display = 'block';
        coordinates.innerHTML = 'Posisi Longitude: ' + lngLat.lng + '<br />Posisi Latitude: ' + lngLat.lat;

        document.getElementById('latitude').value = lngLat.lng;
        document.getElementById('longitude').value = lngLat.lat;
    }
        
        marker.on('dragend', onDragEnd);

    var geocoder = new MapboxGeocoder({
        accessToken: mapboxgl.accessToken,
        marker: false,
        mapboxgl: mapboxgl 
    });

    map.addControl(geocoder);

    map.on('mousemove', function (e) {
        document.getElementById('info').innerHTML =
        // e.point is the x, y coordinates of the mousemove event relative
        // to the top-left corner of the map
        JSON.stringify(e.point) + '<br />' +
        // e.lngLat is the longitude, latitude geographical position of the event
        JSON.stringify(e.lngLat);
    });