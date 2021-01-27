// Initialisation de la carte
var map = L.map('myMap').setView([47.069937628557554, -1.8160077740048295], 12);

// Chargement des "tuiles"
L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
    // Il est toujours bien de laisser le lien vers la source des données
    attribution: '© <a href="//osm.org/copyright">OpenStreetMap</a>',
    minZoom: 1,
    maxZoom: 20
}).addTo(map);
// Création du marqueur et de la popup
var marker = L.marker([47.069937628557554, -1.8160077740048295]).addTo(map);
marker.bindPopup("<h1>9, Le Bois Flamberge</h1>");