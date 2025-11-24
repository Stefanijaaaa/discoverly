<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>3-Day Trip - Discoverly</title>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
<style>
:root {
--bg-color: #f9f6f1;
--text-color: #2d2d2d;
--accent-color: #1e3a5f;
--card-bg: #ffffff;
}
* {
margin: 0;
padding: 0;
box-sizing: border-box;
}
body {
font-family: "Inter", sans-serif;
background-color: var(--bg-color);
color: var(--text-color);
line-height: 1.6;
}
header {
display: flex;
justify-content: space-between;
align-items: center;
padding: 1.5rem 4rem;
}
header h1 {
font-size: 1.5rem;
font-weight: 700;
color: var(--accent-color);
}
nav a {
margin-left: 2rem;
text-decoration: none;
color: var(--text-color);
font-weight: 500;
}
nav a:hover {
color: var(--accent-color);
}
main {
max-width: 1200px;
margin: 2rem auto;
padding: 0 2rem 4rem;
}
.trip-header {
text-align: center;
margin-bottom: 3rem;
}
.trip-header h2 {
font-size: 2.5rem;
color: var(--accent-color);
margin-bottom: 0.5rem;
}
.trip-header p {
font-size: 1.1rem;
color: #666;
}
.day-tabs {
display: flex;
justify-content: center;
gap: 1rem;
margin-bottom: 3rem;
flex-wrap: wrap;
}
.day-tab {
padding: 1rem 2.5rem;
background-color: var(--card-bg);
border: 2px solid rgba(30, 58, 95, 0.2);
border-radius: 8px;
font-size: 1.1rem;
font-weight: 600;
color: var(--text-color);
cursor: pointer;
transition: all 0.3s ease;
}
.day-tab:hover {
border-color: var(--accent-color);
color: var(--accent-color);
}
.day-tab.active {
background-color: var(--accent-color);
color: white;
border-color: var(--accent-color);
}
.day-content {
display: none;
}
.day-content.active {
display: block;
}
.day-title {
text-align: center;
margin-bottom: 2rem;
}
.day-title h3 {
font-size: 2rem;
color: var(--accent-color);
margin-bottom: 0.5rem;
}
.day-title p {
color: #666;
font-size: 1rem;
}
.time-section {
margin-bottom: 3rem;
}
.time-header {
display: flex;
align-items: center;
gap: 1rem;
margin-bottom: 1.5rem;
}
.time-icon {
width: 60px;
height: 60px;
background: linear-gradient(135deg, #1e3a5f 0%, #2d5a8a 100%);
border-radius: 50%;
display: flex;
align-items: center;
justify-content: center;
font-size: 1.8rem;
}
.time-header h4 {
font-size: 1.8rem;
color: var(--accent-color);
}
.stops-container {
display: flex;
flex-direction: column;
gap: 1.5rem;
}
.stop-card {
background-color: var(--card-bg);
border-radius: 12px;
padding: 1.5rem;
box-shadow: 0 4px 8px rgba(0,0,0,0.05);
display: grid;
grid-template-columns: auto 1fr;
gap: 1.5rem;
align-items: center;
transition: transform 0.2s ease;
}
.stop-card:hover {
transform: translateX(5px);
}
.stop-number {
width: 50px;
height: 50px;
background-color: var(--accent-color);
color: white;
border-radius: 50%;
display: flex;
align-items: center;
justify-content: center;
font-size: 1.5rem;
font-weight: 700;
flex-shrink: 0;
}
.stop-content h5 {
font-size: 1.3rem;
color: var(--accent-color);
margin-bottom: 0.3rem;
}
.stop-time {
color: #999;
font-size: 0.9rem;
margin-bottom: 0.5rem;
}
.stop-description {
color: #555;
line-height: 1.6;
}
.stop-tag {
display: inline-block;
padding: 0.3rem 0.8rem;
background-color: var(--bg-color);
color: var(--accent-color);
border-radius: 15px;
font-size: 0.85rem;
margin-top: 0.5rem;
font-weight: 500;
}
.map-section {
margin-top: 4rem;
}
.map-section h3 {
font-size: 1.8rem;
color: var(--accent-color);
margin-bottom: 1.5rem;
text-align: center;
}
#map {
height: 400px;
border-radius: 12px;
box-shadow: 0 4px 8px rgba(0,0,0,0.05);
}
@media (max-width: 768px) {
header {
flex-direction: column;
align-items: flex-start;
padding: 1.5rem;
}
nav {
margin-top: 0.5rem;
}
nav a {
margin-left: 0;
margin-right: 1.5rem;
}
main {
padding: 1.5rem;
}
.trip-header h2 {
font-size: 2rem;
}
.stop-card {
grid-template-columns: 1fr;
}
.day-tab {
padding: 0.8rem 1.5rem;
font-size: 1rem;
}
}
</style>
</head>
<body>
<header>
<h1>Discoverly</h1>
<nav>
<a href="login.html">Log In</a>
<a href="index.html">Home</a>
<a href="hub.html">Plan Your Trip</a>
<a href="about.html">About</a>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
crossorigin=""/>
</nav>
</header>
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
crossorigin=""></script>

<main>
<div class="trip-header">
<h2>3-Day Adventure</h2>
<p>Dive deeper into local culture with three unforgettable days</p>
</div>

<div class="day-tabs" id="myBtnContainer">
<button class="day-tab active" onclick="showDay(1)">Day 1</button>
<button class="day-tab" onclick="showDay(2)">Day 2</button>
<button class="day-tab" onclick="showDay(3)">Day 3</button>
</div>

<!-- DAY 1 -->
<div id="day1" class="day-content active">
<div class="day-title">
<h3>Day 1: Old Town Exploration</h3>
<p>Discover the historic heart and iconic landmarks</p>
</div>

<div class="time-section">
<div class="time-header">
<div class="time-icon">☀️</div>
<h4>Morning</h4>
</div>
<div class="stops-container">
<div class="stop-card">
<div class="stop-number">1</div>
<div class="stop-content">
<h5>Old Market Square</h5>
<p class="stop-time">9:00 AM - 10:00 AM</p>
<p class="stop-description">Start your day exploring the colorful baroque square and local shops.</p>
<span class="stop-tag">Historic Sight</span>
</div>
</div>

<div class="stop-card">
<div class="stop-number">2</div>
<div class="stop-content">
<h5>The Alchemist's Café</h5>
<p class="stop-time">10:15 AM - 11:00 AM</p>
<p class="stop-description">Coffee break at the famous cellar café with homemade pastries.</p>
<span class="stop-tag">Café</span>
</div>
</div>
</div>
</div>

<div class="time-section">
<div class="time-header">
<div class="time-icon">🌤️</div>
<h4>Afternoon</h4>
</div>
<div class="stops-container">
<div class="stop-card">
<div class="stop-number">3</div>
<div class="stop-content">
<h5>Grandma's Kitchen</h5>
<p class="stop-time">12:30 PM - 2:00 PM</p>
<p class="stop-description">Traditional lunch featuring the legendary goulash.</p>
<span class="stop-tag">Restaurant</span>
</div>
</div>

<div class="stop-card">
<div class="stop-number">4</div>
<div class="stop-content">
<h5>Castle Hill</h5>
<p class="stop-time">2:30 PM - 5:00 PM</p>
<p class="stop-description">Explore the medieval fortress and panoramic city views.</p>
<span class="stop-tag">Historic Sight</span>
</div>
</div>
</div>
</div>

<div class="time-section">
<div class="time-header">
<div class="time-icon">🌙</div>
<h4>Evening</h4>
</div>
<div class="stops-container">
<div class="stop-card">
<div class="stop-number">5</div>
<div class="stop-content">
<h5>Dragon Bridge</h5>
<p class="stop-time">5:30 PM - 6:00 PM</p>
<p class="stop-description">Watch sunset from the iconic Art Nouveau bridge.</p>
<span class="stop-tag">Historic Sight</span>
</div>
</div>

<div class="stop-card">
<div class="stop-number">6</div>
<div class="stop-content">
<h5>River View Bistro</h5>
<p class="stop-time">7:00 PM - 9:00 PM</p>
<p class="stop-description">Riverside dinner with seasonal menu and wine pairing.</p>
<span class="stop-tag">Restaurant</span>
</div>
</div>
</div>
</div>
</div>

<!-- DAY 2 -->
<div id="day2" class="day-content">
<div class="day-title">
<h3>Day 2: Nature & Culture</h3>
<p>Experience green spaces and artistic treasures</p>
</div>

<div class="time-section">
<div class="time-header">
<div class="time-icon">☀️</div>
<h4>Morning</h4>
</div>
<div class="stops-container">
<div class="stop-card">
<div class="stop-number">1</div>
<div class="stop-content">
<h5>Riverside Yoga</h5>
<p class="stop-time">8:00 AM - 9:00 AM</p>
<p class="stop-description">Start with outdoor yoga by the water for a refreshing morning.</p>
<span class="stop-tag">Activity</span>
</div>
</div>

<div class="stop-card">
<div class="stop-number">2</div>
<div class="stop-content">
<h5>Brew & Pages</h5>
<p class="stop-time">9:30 AM - 10:30 AM</p>
<p class="stop-description">Breakfast at this bookshop café with specialty coffee.</p>
<span class="stop-tag">Café</span>
</div>
</div>

<div class="stop-card">
<div class="stop-number">3</div>
<div class="stop-content">
<h5>National Gallery</h5>
<p class="stop-time">11:00 AM - 1:00 PM</p>
<p class="stop-description">Explore local and international art collections.</p>
<span class="stop-tag">Museum</span>
</div>
</div>
</div>
</div>

<div class="time-section">
<div class="time-header">
<div class="time-icon">🌤️</div>
<h4>Afternoon</h4>
</div>
<div class="stops-container">
<div class="stop-card">
<div class="stop-number">4</div>
<div class="stop-content">
<h5>Local Food Tour</h5>
<p class="stop-time">2:00 PM - 4:00 PM</p>
<p class="stop-description">Guided tasting tour at hidden local eateries.</p>
<span class="stop-tag">Activity</span>
</div>
</div>

<div class="stop-card">
<div class="stop-number">5</div>
<div class="stop-content">
<h5>Monastery Gardens</h5>
<p class="stop-time">4:30 PM - 6:00 PM</p>
<p class="stop-description">Peaceful stroll through hidden botanical gardens.</p>
<span class="stop-tag">Park</span>
</div>
</div>
</div>
</div>

<div class="time-section">
<div class="time-header">
<div class="time-icon">🌙</div>
<h4>Evening</h4>
</div>
<div class="stops-container">
<div class="stop-card">
<div class="stop-number">6</div>
<div class="stop-content">
<h5>Traditional Cooking Workshop</h5>
<p class="stop-time">6:30 PM - 9:00 PM</p>
<p class="stop-description">Learn to cook local dishes with a chef, includes dinner.</p>
<span class="stop-tag">Activity</span>
</div>
</div>
</div>
</div>
</div>

<!-- DAY 3 -->
<div id="day3" class="day-content">
<div class="day-title">
<h3>Day 3: Local Secrets & Relaxation</h3>
<p>Discover hidden spots and unwind</p>
</div>

<div class="time-section">
<div class="time-header">
<div class="time-icon">☀️</div>
<h4>Morning</h4>
</div>
<div class="stops-container">
<div class="stop-card">
<div class="stop-number">1</div>
<div class="stop-content">
<h5>Sunday Flea Market</h5>
<p class="stop-time">8:00 AM - 10:00 AM</p>
<p class="stop-description">Hunt for vintage treasures and local crafts.</p>
<span class="stop-tag">Market</span>
</div>
</div>

<div class="stop-card">
<div class="stop-number">2</div>
<div class="stop-content">
<h5>Riverside Roasters</h5>
<p class="stop-time">10:30 AM - 11:30 AM</p>
<p class="stop-description">Coffee at waterfront café roasting their own beans.</p>
<span class="stop-tag">Café</span>
</div>
</div>

<div class="stop-card">
<div class="stop-number">3</div>
<div class="stop-content">
<h5>River Walk Promenade</h5>
<p class="stop-time">11:30 AM - 12:30 PM</p>
<p class="stop-description">Scenic walk along willow-lined riverside path.</p>
<span class="stop-tag">Park</span>
</div>
</div>
</div>
</div>

<div class="time-section">
<div class="time-header">
<div class="time-icon">🌤️</div>
<h4>Afternoon</h4>
</div>
<div class="stops-container">
<div class="stop-card">
<div class="stop-number">4</div>
<div class="stop-content">
<h5>The Old Town Tavern</h5>
<p class="stop-time">1:00 PM - 2:30 PM</p>
<p class="stop-description">Final meal at this beloved family restaurant.</p>
<span class="stop-tag">Restaurant</span>
</div>
</div>

<div class="stop-card">
<div class="stop-number">5</div>
<div class="stop-content">
<h5>Wine Cellar Tour</h5>
<p class="stop-time">3:00 PM - 5:00 PM</p>
<p class="stop-description">Sample regional wines in historic underground cellars.</p>
<span class="stop-tag">Activity</span>
</div>
</div>
</div>
</div>

<div class="time-section">
<div class="time-header">
<div class="time-icon">🌙</div>
<h4>Evening</h4>
</div>
<div class="stops-container">
<div class="stop-card">
<div class="stop-number">6</div>
<div class="stop-content">
<h5>Central Park</h5>
<p class="stop-time">6:00 PM - 7:00 PM</p>
<p class="stop-description">Relax and reflect on your trip at the urban park.</p>
<span class="stop-tag">Park</span>
</div>
</div>

<div class="stop-card">
<div class="stop-number">7</div>
<div class="stop-content">
<h5>Jazz Night at The Cellar</h5>
<p class="stop-time">8:00 PM - 10:00 PM</p>
<p class="stop-description">End your trip with live jazz in intimate underground venue.</p>
<span class="stop-tag">Nightlife</span>
</div>
</div>
</div>
</div>
</div>

<div class="map-section">
<h3 id="map-title">Route Map</h3>
<div id="map"></div>
</div>
</main>

<script src="filter.js"></script>

</body>
</html>