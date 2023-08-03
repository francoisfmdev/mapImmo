const INITIAL_ZOOM_LEVEL = 13.5;

function initMap() {
    const mapOptions = {
        center: { lat: 43.7101728, lng: 7.2619532 },
        zoom: INITIAL_ZOOM_LEVEL
    }
    return new google.maps.Map(document.getElementById('map'), mapOptions)
}

function createMarkers(data, map, typePage) {
    const markers = [];

    for (const sci of data) {
        for (const addressProperty of sci.user_properties_with_addresses) {
            const fillColor = applyColor(addressProperty.type); ; // Couleur par défaut

            
            // Définir le chemin vers le fichier SVG en fonction du type
            let svgFileName = `marker${addressProperty.type}.svg`;

            const icon = {
                url: `images/properties/${svgFileName}`, // Chemin vers le fichier SVG
                fillColor: fillColor, // Utiliser la couleur déterminée
                fillOpacity: 1,
                scale: 1,
                
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



