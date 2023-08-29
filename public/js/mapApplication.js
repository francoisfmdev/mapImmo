

    fetchingData('/databy')
        .then(properties => {
             console.log(properties)
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



