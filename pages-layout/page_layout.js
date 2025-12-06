function showLoginModal() {
    document.getElementById('loginModal').classList.add('show');
}
    
function hideLoginModal() {
    document.getElementById('loginModal').classList.remove('show');
}

var map = L.map('map').setView([51.505, -0.09], 13);

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

L.marker([51.5, -0.09]).addTo(map)
    .bindPopup("Castle Hill Road 1, Old Town")
    .openPopup();

// https://leafletjs.com/examples/quick-start/ -> tutorial for the map, will need to add exact locations

let userLat = null; // save userLat
let userLon = null; // save userLon
let routeControl = null; // save route

function showUserLocation(callback){
    if(!navigator.geolocation){
        alert("Location not supported by your device");
        return;
    }

    navigator.geolocation.getCurrentPosition(
        position => {
            userLat = position.coords.latitude;
            userLon = position.coords.longitude;

            // custom marker icon
            const userIcon = L.icon({
                iconUrl: "https://maps.google.com/mapfiles/ms/icons/red-dot.png",
                iconSize: [32, 32],
                iconAnchor: [16, 32],
                popupAnchor: [0, -32]
            });

            // user location marker
            L.marker([userLat, userLon], {icon: userIcon}).addTo(map)
                .bindPopup("Your location")
                .openPopup();

            // move map to user
            map.setView([userLat, userLon], 13);

            if(callback){
                callback();
            }
        },
        error => {
            alert("Unable to retrieve your location");
            console.error(error);
        }
    );
}


function routeToLocation(){
    if(userLat === null || userLon === null){
        showUserLocation(routeToLocation);
        return;
    }

    // delete route if it exists already
    if(routeControl){
        map.removeControl(routeControl);
        routeControl = null;
    }

    // create route
    routeControl = L.Routing.control({
        waypoints: [
            L.latLng(userLat, userLon), // start - user location
            L.latLng(51.5, -0.09) // end - destination location
        ],
        routeWhileDragging: false,
        createMarker: function() { return null; }, // disable markers
        draggableWaypoints: false, // disable dragging
        addWaypoints: false // disable adding extra waypoints
    }).addTo(map);
}




