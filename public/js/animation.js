let interval = 8000; // Temps de pause initial (en millisecondes)
let index = 0; // Index pour parcourir le cities
let isPaused = false; // Variable pour contrôler l'état de la boucle

// Fonction pour mettre en pause l'exécution pendant une durée donnée (en millisecondes)
function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}

// Fonction pour changer le temps de pause entre chaque passage
function setPauseTime(newInterval) {
    interval = newInterval;
}

// Fonction pour changer le temps de pause après un délai spécifique
function changePauseTimeAfterDelay(newInterval, delay) {
    setTimeout(() => {
        setPauseTime(newInterval);
    }, delay);
}

// Fonction asynchrone pour animer le déplacement progressif de la carte
async function animateMapToPosition(latitude, longitude, map, duration) {
    const startingPosition = {
        latitude: map.center.lat(),
        longitude: map.center.lng()
    };

    const endingPosition = {
        latitude,
        longitude
    };

    const distanceLat = endingPosition.latitude - startingPosition.latitude;
    const distanceLng = endingPosition.longitude - startingPosition.longitude;
    const distance = Math.sqrt(distanceLat * distanceLat + distanceLng * distanceLng);

    const targetDuration = duration; // Durée cible de l'animation (en millisecondes)

    // Vitesse de déplacement pour atteindre la distance en targetDuration
    const speed = distance / targetDuration; // Vitesse de déplacement en unité de distance par milliseconde

    const startTime = performance.now();

    return new Promise(resolve => {
        function updatePosition(currentTime) {
            const elapsedTime = currentTime - startTime;
            const progress = Math.min(elapsedTime / targetDuration, 1);
            const distanceTraveled = speed * elapsedTime;

            const lat = startingPosition.latitude + (distanceTraveled / distance) * distanceLat;
            const lng = startingPosition.longitude + (distanceTraveled / distance) * distanceLng;

            map.setCenter(new google.maps.LatLng(lat, lng));

            if (progress < 1) {
                requestAnimationFrame(updatePosition);
            } else {
                resolve();
            }
        }

        requestAnimationFrame(updatePosition);
    });
}

// Fonction asynchrone pour dézoomer la carte vers le niveau 11 en 2 secondes de manière fluide
async function zoomBackToInitialLevel(map, initialZoom, duration) {
    const currentZoom = map.getZoom();
    const targetZoom = initialZoom;
    const zoomSteps = 30; // Nombre de pas pour atteindre le niveau de zoom cible
    const zoomStepDuration = duration / zoomSteps; // Durée de chaque pas

    return new Promise(resolve => {
      let currentStep = 0;

      function zoomStep() {
        currentStep++;
        const progress = currentStep / zoomSteps;
        const zoomLevel = currentZoom + (targetZoom - currentZoom) * progress;
        map.setZoom(zoomLevel);

        if (currentStep < zoomSteps) {
          setTimeout(zoomStep, zoomStepDuration);
        } else {
          resolve();
        }
      }

      zoomStep();
    });
  }

  async function dezoome(map, duration) {
    const currentZoom = map.getZoom();
    const targetZoom = 13.5;
    const zoomSteps = 30; // Nombre de pas pour atteindre le niveau de zoom cible
    const zoomStepDuration = duration / zoomSteps; // Durée de chaque pas

    return new Promise(resolve => {
      let currentStep = 0;

      function zoomStep() {
        currentStep++;
        const progress = currentStep / zoomSteps;
        const zoomLevel = currentZoom - (currentZoom - targetZoom) * progress;
        map.setZoom(zoomLevel);

        if (currentStep < zoomSteps) {
          setTimeout(zoomStep, zoomStepDuration);
        } else {
          resolve();
        }
      }

      zoomStep();
    });
  }

// Fonction asynchrone pour animer le déplacement de la carte avec dézoom, déplacement et rézoom
async function animateMapWithZooming(latitude, longitude, map) {
  // Dézoomer à 11 en 1 seconde de manière fluide
  await dezoome(map,500);

  // Animation de déplacement vers la nouvelle position en 2 secondes
  await animateMapToPosition(latitude, longitude, map, 500);

  // Rézoomer vers le niveau initial en 1 seconde de manière fluide
  await zoomBackToInitialLevel(map, INITIAL_ZOOM_LEVEL, 500);

}



async function parcourirEnBoucleAvecPause(cities, map, properties,sci) {

  let mylistmark = null;
  for (const city of cities) {

         mylistmark = properties.filter((property)=> property.address.city == city.city)
       await  createMarkers(mylistmark,map,sci,city)

  }


}


    // while (true) {
  //     if (!isPaused) {
  //         const city = cities[index];
  //         const latitude = city.latitude;
  //         const longitude = city.longitude;


  //         // Animer le déplacement de la carte avec dézoom, déplacement et rézoom
  //         await animateMapWithZooming(latitude, longitude, map);

  //         index = (index + 1) % cities.length;
  //     }


// Fonction pour mettre en pause ou reprendre la boucle
function togglePause() {
    isPaused = !isPaused;
}







