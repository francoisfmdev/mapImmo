const INITIAL_ZOOM_LEVEL = 12;
const INITIAL_ZOOM_LEVEL1 = 14
let markers = [];
const selectBySCI = document.getElementById('selectedBySCI')
let isMarkerClicked = false;


function initMap() {
    const mapOptions = {
        center: { lat: 43.7009358, lng: 7.2683912 },
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
                <circle cx="2.5" cy="2.5" r="2" fill="${fillColor}" />
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
            
            mark.addListener('click', function() {
                const sciNameContainer = document.getElementById('sciName');
                sciNameContainer.textContent = "Nom de la SCI : " + property.sci.name;
                const sciNameContainer1 = document.getElementById('address');
                sciNameContainer1.textContent = "Adresse complète : " + property.address.fullAddress;
                const sciNameContainer2 = document.getElementById('property');
                sciNameContainer2.textContent = "Type du bien : " + property.type;
                
                // Ajoutez la classe "clicked" à #mapContainer
                document.getElementById('mapContainer').classList.add('clicked');
            });
            
            // Pour annuler le clic
            document.getElementById('cancelButton').addEventListener('click', function() {
                // Supprimez la classe "clicked" de #mapContainer
                document.getElementById('mapContainer').classList.remove('clicked');
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



async function movingTo(map,address){

    // const startingPosition = {
    //     latitude: map.center.lat(),
    //     longitude: map.center.lng()
    // };

    const endingPosition = {
        latitude:address.latitude,
        longitude: address.longitude
    };
    console.log(endingPosition)
}


async function addMarkersToMap(properties) {
    const map = initMap()
    let markers = []

    let previousCity = null; // Stocke la ville précédente
    for (const [index, property] of properties.entries()) {
        setTimeout(async () => {

                const marker = await createMarkers(property, map);
                markers.push(marker)



            // Vérifier si c'est la dernière propriété ou si la ville change
            const isLastProperty = index === properties.length - 1;
            const cityChanged = previousCity !== property.address.city;

            if (isLastProperty || cityChanged) {

                let lat = 0
                let long = 0

                switch (property.address.city) {
                    case "Nice":
                        lat =   43.7009358
                        long = 7.2683912
                        break
                    case "Antibes":
                        lat =   43.5812868
                        long = 7.1262071
                        break
                    case "Cagnes-sur-Mer":
                        lat =   43.6612012
                        long = 7.1513834
                        break
                    case "Saint-Jean-Cap-Ferrat":
                        lat =   43.6899651
                        long = 7.3327399
                        break
                    case  "Villeneuve-Loubet":
                        lat =   43.6899651
                        long = 7.3327399
                        break
                    case "Saint-Laurent-du-Var":
                    default:
                        lat =   43.6690101
                        long = 7.1906969
                        break;
                }

                await animateMapToPosition(lat,long, map,600);
                previousCity = property.address.city;
                // map.setCenter({
                //     lat: Number(lat),
                //     lng: Number(long)
                // });

            }

        }, index * 600); // Ajoute un délai d'une seconde pour chaque itération
    }
}

