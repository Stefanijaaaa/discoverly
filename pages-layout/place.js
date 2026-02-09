const urlParams = new URLSearchParams(window.location.search);
window.placeId = urlParams.get('id');

async function loadPlace(){
    const response = await fetch(`http://localhost:5000/api/places/${placeId}`);
    const place = await response.json();

    document.getElementById('place-name').textContent = place.name;
    document.getElementById('place-type').textContent = place.type;
    document.getElementById('place-about').textContent = place.about;
    document.getElementById('place-address').textContent = place.address;
    document.getElementById('place-hours').textContent = place.hours;
    document.getElementById('place-price').textContent = place.price;
    if (place.contact) {
        document.getElementById('place-contact').textContent = place.contact;
    } else {
        document.getElementById('place-contact-item').style.display = 'none';
    } 
    if (place.website) {
        document.getElementById('place-website').textContent = place.website;
    } else {
        document.getElementById('place-website-item').style.display = 'none';
    }
    document.getElementById('place-accessibility').textContent = place.accessibility;
    document.getElementById('place-duration').textContent = place.duration + ' minutes';
    document.querySelector('.hero-image').src = place.photos;

    var latitude = place.latitude;
    var longitude = place.longitude;
    var name = place.name;

    initMap(latitude, longitude, name);
}

async function loadReviews() {
    var response = await fetch(`http://localhost:5000/api/reviews/${placeId}`);
    var reviews = await response.json();
    
    var reviewList = document.querySelector('.review-list');
    reviewList.innerHTML = '';
    
    reviews.forEach(function(review) {
        var stars = '★'.repeat(review.rating) + '☆'.repeat(5 - review.rating);
        var reviewHTML = `
            <div class="review-item">
                <div class="review-header-item">
                    <span class="reviewer-name">${review.email}</span>
                    <span class="review-rating">${stars}</span>
                </div>
                <p class="review-text">${review.comment}</p>
                <span class="review-date">${new Date(review.created_at).toLocaleDateString()}</span>
            </div>
        `;
        reviewList.innerHTML += reviewHTML;
    });
}

loadPlace();
loadReviews();

// MAP STUFF
function initMap(latitude, longitude, name){
var map = L.map('map').setView([latitude, longitude], 13);

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

L.marker([latitude, longitude]).addTo(map)
    .bindPopup(name)
    .openPopup();
}
// https://leafletjs.com/examples/quick-start/ -> tutorial for the map, will need to add exact locations 