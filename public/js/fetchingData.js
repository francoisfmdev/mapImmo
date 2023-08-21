async function fetchingData(url) {
    try {
        const response = await fetch(url);
        if (!response.ok) {
            throw new Error('Erreur réseau - Impossible de récupérer les données');
        }
        return response.json();
    } catch (error) {
        console.error('Erreur lors de la récupération des données :', error);
    }
}



function searchNeighborhood() {
    const apiKey = 'AIzaSyAiKGYNw5UqK24iZPhxr_5uML3q_8KZjn0'; // Remplacez par votre clé API Google

    const fullAddress = document.getElementById('fullAddress').value;

    const geocodeUrl = `https://maps.googleapis.com/maps/api/geocode/json?address=${encodeURIComponent(fullAddress)}&key=${apiKey}`;

    fetchingData(geocodeUrl)
        .then(data => {
            if (data.status === 'OK') {
                const addressComponents = data.results[0].address_components;
                
                // Recherche du composant "neighborhood"
                const neighborhoodComponent = addressComponents.find(component => component.types.includes('neighborhood'));
                
                if (neighborhoodComponent) {
                    const neighborhood = neighborhoodComponent.long_name;
                    console.log(`Quartier : ${neighborhood}`);
                } else {
                    console.log('Quartier non trouvé pour cette adresse.');
                }
            } else {
                console.error('Erreur lors de la requête de géocodage');
            }
        });
}
  