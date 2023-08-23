const INITIAL_ZOOM_LEVEL = 14;
const INITIAL_ZOOM_LEVEL1 = 13
let markers = [];


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

function createMarkers(data, map, cities) {
    const timeMarker = 200
    let delay = 0
    const mapCity = data
    console.log(cities)
    //fonction de tri
    for (const city of cities) {
        for (const sci of data) {       
            for (const addressProperty of sci.user_properties_with_addresses) {
                console.log(city.city + ' in if')            
                const fillColor = sci.color || 'gray'; // Utilisez une couleur par défaut 'gray' si la couleur n'est pas définie
                // Utilisez l'URL du fichier SVG sans remplacer la couleur dans le contenu du SVG
                const svgContent = `
             <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" >
             <circle cx="3.5" cy="3.5" r="3" fill="${fillColor}" />
             </svg>`;

                // Utilisez la couleur de remplissage fillColor pour le marqueur
                const icon = {
                    url: `data:image/svg+xml;charset=UTF-8,${encodeURIComponent(svgContent)}`,
                    fillColor: fillColor, // Utilisez la couleur déterminée
                    fillOpacity: 1,
                    scale: 1,
                    // Point d'ancrage pour centrer le marqueur
                };
                setTimeout(() => {
                    const mark = new google.maps.Marker({
                        position: new google.maps.LatLng(addressProperty.address.latitude, addressProperty.address.longitude),
                        map: map,
                        title: "",
                        icon: icon,
                        optimized: false,
                        sci: sci.name,
                    });

                    markers.push(mark);
                }, delay)
                delay += timeMarker

            }     
        // setTimeout(() => {
                    //   parcourirEnBoucleAvecPause(city , map)
        //               }, time)
        }       
    }
    return markers;
}
const selectBySCI = document.getElementById('selectedBySCI')



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

function triParSelection(arr) {
    console.log(arr)
    for (let i = 0; i < arr.length - 1; i++) {
        let minIdx = i;
        for (let j = i + 1; j < arr.length; j++) {
            console.log(arr[j].address.city)
            if (arr[j].address.city < arr[minIdx].address.city) {
                minIdx = j;
            }
        }

        if (minIdx !== i) {
            [arr[i], arr[minIdx]] = [arr[minIdx], arr[i]]; // échange les éléments
        }

    }

}

