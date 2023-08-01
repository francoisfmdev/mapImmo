const INITIAL_ZOOM_LEVEL = 13.5;

function initMap() {
    const mapOptions = {
        center: { lat: 43.7101728, lng: 7.2619532 },
        zoom: INITIAL_ZOOM_LEVEL
    }
    return new google.maps.Map(document.getElementById('map'), mapOptions)
}

function createMarkers(data, map) {
    const markers = [];

    for (const sci of data) {
        for (const addressProperty of sci.user_properties_with_addresses) {
            const color = applyColor(addressProperty.type);
            const arrowSymbolPath = google.maps.SymbolPath.BACKWARD_CLOSED_ARROW;

            const icon = {
                path: arrowSymbolPath, // Utilisez le symbole d'icône personnalisé
                fillColor: color, // Couleur du symbole
                fillOpacity: 1, // Opacité du symbole
                scale: 9, // Échelle du symbole (ajustez selon vos besoins)
                strokeColor: 'black', // Couleur du contour du symbole
                strokeWeight: 1.5, // Épaisseur du contour du symbole
                anchor: new google.maps.Point(1, 1), // Point d'ancrage pour centrer le symbole
            };

            const mark = new google.maps.Marker({
                position: new google.maps.LatLng(addressProperty.address.latitude, addressProperty.address.longitude),
                map: map,
                title: "",
                icon: icon, // Utilisez l'icône personnalisée
                optimized: false, // Désactiver l'optimisation du rendu
            });

            markers.push(mark);
        }
    }
    return markers;
}

function changeMapPosition(newLat, newLng, map) {
    let newPosition = new google.maps.LatLng(newLat, newLng);
    map.setCenter(newPosition);
}

function applyColor(type) {
    switch (type) {
        case 'Garage':
            return '#F94144';
        case 'T1':
            return '#90BE6D';
        case 'T2':
            return '#43AA8B';
        case 'T3':
            return '#4D908E';
        case 'T4':
            return '#577590';
        case 'T5':
            return '#277DA1';
        case 'Villa':
            return '#F8961E';

        // Ajoutez d'autres cas pour chaque type avec la couleur correspondante
        default:
            return 'gray'; // Couleur par défaut si le type n'est pas reconnu
    }
}



