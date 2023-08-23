//lorsqu'on clique sur le bouton ca n'envoi pas le formulaire et renvoi "alert 'hello'"

//    const b = document.getElementById('addAddress')
//    const streetNumberF = document.getElementById('streetNumber')
//    const streetNameF = document.getElementById('streetName')
//    const postalCodeF = document.getElementById('postalCode')
//    const cityF = document.getElementById('city')
//    const lat = document.getElementById('lat')
//    const lon = document.getElementById('lon')
//    const groupLat = document.getElementById('groupLat')
//    const groupLon = document.getElementById('groupLon')
//    const formAdd = document.getElementById('formAdd')



//    b.addEventListener('click', function(e) {
//        e.preventDefault() // permet de ne pas envoyer le formulaire (faire avant)
//        const streetNumber = streetNumberF.value
//        const streetName = streetNameF.value
//        const postalCode = postalCodeF.value
//        const city = cityF.value
//        const completeAddress = `${streetNumber} ${streetName} ${postalCode} ${city}`
//        const nominatimUrl =
//            `https://nominatim.openstreetmap.org/search?format=json&q=${encodeURIComponent(completeAddress)}`

//        fetch(nominatimUrl)
//            .then(response => response.json())
//            .then(data => {
//                if (data.length > 0) {
//                    const latitude = data[0].lat
//                    const longitude = data[0].lon
//                    console.log(`Latitude: ${latitude}, Longitude: ${longitude}`)
//                    lat.value = latitude
//                    lon.value = longitude
//                    lon.hidden = false
//                    lat.hidden = false
//                    lat.disabled = true
//                    lon.disabled = true
//                    groupLat.style = "display:block;"
//                    groupLon.style = "display:block;"
//                    setTimeout(() => {
//                        lat.disabled = false
//                        lon.disabled = false
//                        formAdd.submit()
//                    }, 1000)


//                } else {
//                    console.log('Adresse introuvable.')
//                }
//            })
//    })

const b = document.getElementById('addAddress');
const fullAddressF = document.getElementById('fullAddress');
const lat = document.getElementById('lat');
const lon = document.getElementById('lon');
const groupLat = document.getElementById('groupLat');
const groupLon = document.getElementById('groupLon');
const groupCity = document.getElementById('groupCity');
const formAdd = document.getElementById('formAdd');
const cityInput = document.getElementById('city');

b.addEventListener('click', function(e) {
    e.preventDefault();

    const fullAddress = fullAddressF.value;
    const geocoder = new google.maps.Geocoder();
    const primitivWords = fullAddress.split(',')
    const city = primitivWords[1]

    geocoder.geocode({ address: fullAddress }, function(results, status) {
        if (status === 'OK' && results.length > 0) {
            const location = results[0].geometry.location;
            const latitude = location.lat();
            const longitude = location.lng();

            console.log(`Latitude: ${latitude}, Longitude: ${longitude}`);
            lat.value = latitude;
            lon.value = longitude;
            cityInput.value = city; // Utilisation de cityInput au lieu de city
            lon.hidden = false;
            lat.hidden = false;
            cityInput.hidden = false; // Utilisation de cityInput au lieu de city
            lat.disabled = true;
            lon.disabled = true;
            cityInput.disabled = true; // Utilisation de cityInput au lieu de city
            groupLat.style = "display:block;";
            groupLon.style = "display:block;";
            groupCity.style = "display:block;";

            setTimeout(() => {
                lat.disabled = false;
                lon.disabled = false;
                cityInput.disabled = false;

                formAdd.submit();
            }, 1000);
        } else {
            console.log('Adresse introuvable.');
        }
    });
});