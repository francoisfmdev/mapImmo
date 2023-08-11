const INITIAL_ZOOM_LEVEL = 16;

function initMap() {
    const mapOptions = {
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
            {
                featureType: 'administrative.neighborhood', // Masquer les noms des quartiers
                elementType: 'labels',
                stylers: [{ visibility: 'off' }]
            },
        ]
    }
    return new google.maps.Map(document.getElementById('map'), mapOptions)
}

function createMarkers(data, map, typePage) {
    const markers = [];

    for (const sci of data) {
        for (const addressProperty of sci.user_properties_with_addresses) {
            // Couleur par défaut
            const fillColor = sci.color || 'gray'; // Utilisez une couleur par défaut 'gray' si la couleur n'est pas définie

            // Utilisez l'URL du fichier SVG sans remplacer la couleur dans le contenu du SVG
            const svgContent = `
            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" >
  <circle cx="11.5" cy="11.5" r="8" fill="${fillColor}" />
</svg>`;

            // Utilisez la couleur de remplissage fillColor pour le marqueur
            const icon = {
                url: `data:image/svg+xml;charset=UTF-8,${encodeURIComponent(svgContent)}`,
                fillColor: fillColor, // Utilisez la couleur déterminée
                fillOpacity: 1,
                scale: 1,
                // Point d'ancrage pour centrer le marqueur
                
            };


            const mark = new google.maps.Marker({
                position: new google.maps.LatLng(addressProperty.address.latitude, addressProperty.address.longitude),
                map: map,
                title: "",
                icon: icon,
                optimized: false,
            });

            markers.push(mark);
        }
    }
    return markers;
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



