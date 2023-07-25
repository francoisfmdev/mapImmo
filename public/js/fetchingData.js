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

function searchPos() {
    const postalCode = '06300'
    const city = 'Nice'
    const completeAddress = `${postalCode} ${city}`

    const nominatimUrl =
        `https://nominatim.openstreetmap.org/search?format=json&q=${encodeURIComponent(completeAddress)}`

    fetch(nominatimUrl)
        .then(response => response.json())
        .then(data => {

            if (data.length > 0) {
                const latitude = data[0].lat
                const longitude = data[0].lon
                console.log(`Latitude: ${latitude}, Longitude: ${longitude}`)
            }
            })
}
  