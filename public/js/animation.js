// Variable pour contrôler le temps de pause entre chaque passage
let interval = 4000; // Temps de pause initial (en millisecondes)
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
  
    const startTime = performance.now();
  
    return new Promise(resolve => {
      function updatePosition(currentTime) {
        const elapsedTime = currentTime - startTime;
        const progress = Math.min(elapsedTime / duration, 1);
  
        const lat = startingPosition.latitude + (latitude - startingPosition.latitude) * progress;
        const lng = startingPosition.longitude + (longitude - startingPosition.longitude) * progress;
  
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

// Fonction asynchrone pour parcourir le cities en boucle avec une pause réglable
async function parcourirEnBoucleAvecPause(cities , map) {
  while (true) {
    if (!isPaused) {
      const city = cities[index];
      console.log(city); // Remplacez cela par le traitement souhaité pour chaque élément du cities
        const latitude = city.latitude
        const longitude = city.longitude
        console.log(map)
        await animateMapToPosition(latitude, longitude, map, 2000);
      index = (index + 1) % cities.length; // Passer à l'élément suivant en respectant la taille du cities
    }
    await sleep(interval); // Attendre le temps de pause défini avant de passer à l'élément suivant
  }
}

// Fonction pour mettre en pause ou reprendre la boucle
function togglePause() {
  isPaused = !isPaused;
}


 