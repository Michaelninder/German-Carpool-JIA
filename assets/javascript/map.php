
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script src="https://unpkg.com/leaflet-routing-machine/dist/leaflet-routing-machine.js"></script>
    <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
    <script>
        // Initialisiere die Karte
        var map = L.map('map').setView([51.505, -0.09], 13);

        // Füge die Basiskartenschicht hinzu
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        let routingControl;

        function showCoordinates(select) {
            const coordinates = select.value.split(', ');
            const lat = parseFloat(coordinates[0]);
            const lon = parseFloat(coordinates[1]);
            document.getElementById('coordinates').innerText = `Koordinaten: ${lat}, ${lon}`;
            document.getElementById('pos1').value = select.value; // Setze den Wert des versteckten Eingabefeldes

            // Routing-Control aktualisieren
            if (routingControl) {
                map.removeControl(routingControl); // Vorhandenes Routing-Control entfernen
            }

            routingControl = L.Routing.control({
                geocoder: L.Control.Geocoder.nominatim(),
                waypoints: [
                    L.latLng(lat, lon), // Eingefügte Koordinaten
                    L.latLng(49.42695, 7.762281) // HHG
                ],
                routeWhileDragging: true
            }).addTo(map);
        }
    </script>
