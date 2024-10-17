function initMap() {
    const marcador = {
        lat: -17.788907538736364,
        lng: -63.14847760301394
    };
    const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 14,
        center: marcador,
    });
    const marker = new google.maps.Marker({
        position: marcador,
        map: map,
    });
}