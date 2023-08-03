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
            // Couleur par défaut
            const fillColor = sci.color || 'gray'; // Utilisez une couleur par défaut 'gray' si la couleur n'est pas définie

            // Utilisez l'URL du fichier SVG sans remplacer la couleur dans le contenu du SVG
            const svgContent = `
                <svg width="70px" height="70px" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                    <!-- Utilisez la couleur de remplissage fillColor directement dans le chemin SVG -->
                    <path fill="${fillColor}" stroke="black" stroke-width="20" d="M256 17.108c-75.73 0-137.122 61.392-137.122 137.122.055 23.25 6.022 46.107 11.58 56.262L256 494.892l119.982-274.244h-.063c11.27-20.324 17.188-43.18 17.202-66.418C393.122 78.5 331.73 17.108 256 17.108zm0 68.56a68.56 68.56 0 0 1 68.56 68.562A68.56 68.56 0 0 1 256 222.79a68.56 68.56 0 0 1-68.56-68.56A68.56 68.56 0 0 1 256 85.67z"/>
                </svg>`;

            // Utilisez la couleur de remplissage fillColor pour le marqueur
            const icon = {
                url: `data:image/svg+xml;charset=UTF-8,${encodeURIComponent(svgContent)}`,
                fillColor: fillColor, // Utilisez la couleur déterminée
                fillOpacity: 1,
                scale: 1,
                 // Point d'ancrage pour centrer le marqueur
                optimized: false,
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



