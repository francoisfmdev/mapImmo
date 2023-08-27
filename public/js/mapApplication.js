

    fetchingData('/databy')
        .then(properties => {
        // console.log(properties)
        // Initialiser la carte une seule fois

addMarkersToMap(properties);
        // let markers = []
        // for (property of properties) {
        //     setTimeout(()=>{
        //        createMarkers(property,map);
        //     },1000 )

        // }
        // console.log(markers)


    })
    .catch(error => {
        console.error('Erreur lors de la récupération des villes et des scis', error);
    });


async function add(listProperties, map) {
    // for (let properties of listProperties) {
    //     for (let property of properties) {
    //         const fillColor = sci.color || 'gray';
    //         const svgContent = `
    //             <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10">
    //             <circle cx="3.5" cy="3.5" r="3" fill="${fillColor}" />
    //             </svg>`;

    //         const icon = {
    //             url: `data:image/svg+xml;charset=UTF-8,${encodeURIComponent(svgContent)}`,
    //             fillColor: fillColor,
    //             fillOpacity: 1,
    //             scale: 1,
    //         };

    //         const position = {
    //             lat: Number(property.address.latitude),
    //             lng: Number(property.address.longitude)
    //         };

    //         const marker = new google.maps.Marker({
    //             position: position,
    //             map: map,
    //             title: "",
    //             icon: icon,
    //             optimized: false,
    //             sci: sci.name,
    //         });

    //         // Stocker le marqueur si nécessaire pour une utilisation future.
    //         markers.push(marker);

    //         await new Promise(resolve => setTimeout(resolve, 250));
    //     }
    // }
}
