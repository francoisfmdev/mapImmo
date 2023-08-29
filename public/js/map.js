const INITIAL_ZOOM_LEVEL = 14;

function initMap() {
    const mapOptions = {
        disableDefaultUI: true,
        center: { lat: 43.7101728, lng: 7.2619532 },
        zoom: INITIAL_ZOOM_LEVEL,
        styles: [
            {
                featureType: 'poi', //poi: Points d'intérêt tels que restaurants, hôtels, etc.
                elementType: 'labels',
                stylers: [{ visibility: 'off' }] // Masquer les labels des points d'intérêt (marqueurs prédéfinis)
            },
            // {
            //     featureType: 'road', // Masquer les noms des routes
            //     elementType: 'labels',
            //     stylers: [{ visibility: 'off' }]
            // },
            {
                featureType: 'transit', // Masquer les noms des arrêts de train
                elementType: 'labels',
                stylers: [{ visibility: 'off' }]
            },
            // {
            //     featureType: 'administrative.neighborhood', // Masquer les noms des quartiers
            //     elementType: 'labels',
            //     stylers: [{ visibility: 'off' }]
            // },


        ]
    }
    return new google.maps.Map(document.getElementById('map'), mapOptions)
}



function isColorValid(color) {
    // Vous pouvez utiliser une expression régulière pour vérifier que la couleur est au format hexadécimal
    // Par exemple, pour vérifier que la couleur est du type "#RRGGBB" où RR, GG et BB sont des valeurs hexadécimales de 0 à FF
    const colorRegex = /^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/;
    return colorRegex.test(color);
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


