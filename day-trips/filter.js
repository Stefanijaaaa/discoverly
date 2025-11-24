var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("day-tab");
for (var i = 0; i < btns.length; i++){
    btns[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace("active", "");
        this.className += " active";
    });
}

function showDay(dayNumber){
    var content = document.getElementsByClassName("day-content");
    for (var i = 0; i < content.length; i++){
        content[i].className = content[i].className.replace("active", "");
    }
    var days = document.getElementById("day" + dayNumber)
    days.className += " active";
}

//trying out lj coordinates
var map = L.map('map').setView([46.0569, 14.5058], 13); 

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '© OpenStreetMap contributors'
}).addTo(map);

L.marker([46.0569, 14.5058]).addTo(map)
    .bindPopup('Castle Hill');

// https://leafletjs.com/examples/quick-start/ -> tutorial for the map, will need to add exact locations 