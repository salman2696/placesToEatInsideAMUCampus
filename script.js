// Replace these coordinates with your target longitude and latitude
//const targetLocation = [27.911942, 78.074599]; // Example: New York (Lat, Lng)

function initMap(long,lat) {
    // Create the map
    const targetLocation = [lat, long];

    const map = L.map('map').setView(targetLocation, 13);
    // Add OpenStreetMap tiles
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    // Marker for target location
    L.marker(targetLocation).addTo(map)
        .bindPopup('Target Location')
        .openPopup();

    // Get the current location
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(
            (position) => {
                //const currentLocation = [position.coords.latitude, position.coords.longitude];
				const currentLocation = [27.916403, 78.072716]
                // Marker for current location
                L.marker(currentLocation).addTo(map)
                    .bindPopup('Current Location')
                    .openPopup();

                // Fit the map to show both locations
                const bounds = L.latLngBounds([currentLocation, targetLocation]);
                map.fitBounds(bounds);

                // Request directions from current location to target location
                calculateAndDisplayRoute(map, currentLocation, targetLocation);
            },
            () => {
                alert('Geolocation service failed.');
            }
        );
    } else {
        // Browser doesn't support Geolocation
        alert('Your browser doesn\'t support geolocation.');
    }
}

function calculateAndDisplayRoute(map, start, end) {
    const osrmUrl = `https://router.project-osrm.org/route/v1/driving/${start[1]},${start[0]};${end[1]},${end[0]}?overview=full&geometries=geojson`;

    fetch(osrmUrl)
        .then(response => response.json())
        .then(data => {
            if (data.code === 'Ok') {
                const route = data.routes[0].geometry;

                // Add the route to the map
                L.geoJSON(route, {
                    style: {
                        color: 'blue',
                        weight: 4,
                        opacity: 0.7
                    }
                }).addTo(map);
            } else {
                alert('Directions request failed.');
            }
        })
        .catch(err => {
            console.error('Error fetching directions:', err);
            alert('Could not fetch directions.');
        });
}

