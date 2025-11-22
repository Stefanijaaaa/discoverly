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
    .bindPopup('A pretty CSS popup.<br> Easily customizable.')
    .openPopup();

// https://leafletjs.com/examples/quick-start/ -> tutorial for the map, will need to add exact locations 