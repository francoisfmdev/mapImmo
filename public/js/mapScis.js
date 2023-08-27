const INITIAL_ZOOM_LEVEL = 14;
const INITIAL_ZOOM_LEVEL1 = 13
let markers = [];
const selectBySCI = document.getElementById('selectedBySCI')


function initMap() {
    const mapOptions = {
        center: { lat: 43.7101728, lng: 7.2619532 },
        zoom: INITIAL_ZOOM_LEVEL1,
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

async function createMarkers(property, map) {



            const fillColor = property.sci.color || 'gray';
            const svgContent = `
                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" >
                <circle cx="3.5" cy="3.5" r="3" fill="${fillColor}" />
                </svg>`;

            const icon = {
                url: `data:image/svg+xml;charset=UTF-8,${encodeURIComponent(svgContent)}`,
                fillColor: fillColor,
                fillOpacity: 1,
                scale: 1,
            };

            const mark = new google.maps.Marker({
                position: new google.maps.LatLng(property.address.latitude, property.address.longitude),
                map: map,
                title: "",
                icon: icon,
                optimized: false,
                sci: property.sci.name,
            });










    return mark;
}




function filterMarkersBySCI(selectedSCI) {
    for (const marker of markers) {
        const markerSCI = marker.sci; // Assurez-vous d'ajouter la propriété "sci" à chaque marqueur lors de la création

        if (!selectedSCI || markerSCI === selectedSCI) {
            marker.setVisible(true); // Afficher le marqueur si aucune SCI n'est sélectionnée ou si le marqueur correspond à la SCI sélectionnée
        } else {
            marker.setVisible(false); // Masquer le marqueur s'il ne correspond pas à la SCI sélectionnée
        }
    }
}

selectBySCI.addEventListener('change', function () {
    const selectedSCI = selectBySCI.value;
    filterMarkersBySCI(selectedSCI);
});

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

function countSCI(properties) {
    let total = 0
    console.log(properties)
    for (const sci of properties) {
        let numberProperties = sci.user_properties_with_addresses.length
        console.log(numberProperties)
        total += numberProperties

    }
    console.log(total)
    return total
}



async function addMarkersToMap(properties) {
    const map = initMap();
    let markers = [];

    for (const [index, property] of properties.entries()) {
        setTimeout(async () => {
            const marker = await createMarkers(property, map);
            markers.push(marker);

            // Si c'est le dernier marqueur, affiche les marqueurs
            if (index === properties.length - 1) {
                console.log(markers);
            }
        }, index * 1000); // Ajoute un délai d'une seconde pour chaque itération
    }
}
