let map;
let currentPolyline = null;

document.addEventListener('DOMContentLoaded', async () => {
    const L = await import('leaflet');
    map = L.map('map').setView([48.8566, 2.3522], 13);

    await setupEvents();

    await setupMap('cars');
});

const setupMap = async (route) => {
    let { data } = await window.axios.get(`api/map/${route}`);
    const selectedRoute = data.route;

    if (currentPolyline) {
        map.removeLayer(currentPolyline);
    }

    currentPolyline = L.polyline(selectedRoute['coords'], {color: selectedRoute['color'], weight: 5}).addTo(map);

    map.fitBounds(currentPolyline.getBounds());

    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);
}

const setupEvents = () => {
    let buttons = document.querySelectorAll('.js-select-route');

    buttons.forEach(button => {
        button.addEventListener('click', async (e) => await setupMap(e.currentTarget.id));
    });
}
