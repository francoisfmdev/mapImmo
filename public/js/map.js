const INITIAL_ZOOM_LEVEL = 13.5;

function initMap() {
    const mapOptions = {
        center: { lat: 43.7101728, lng: 7.2619532 },
        zoom: INITIAL_ZOOM_LEVEL
    }
    return new google.maps.Map(document.getElementById('map'), mapOptions)
}




function createMarkers(data, map) {
    const markers = []
    
    for (const sci of data) {
        // console.log(sci)
        for (const addressProperty of sci.user_properties_with_addresses) {
            // console.log(addressProperty)
            // const pin = new google.maps.marker.PinView({
            //     background: applyColor(addressProperty.type),
            //   });
            
           const mark = new google.maps.Marker({
                position: new google.maps.LatLng(addressProperty.address.latitude, addressProperty.address.longitude),
                
                map: map,
                title: "",
                
            });
            markers.push(mark)
        }
    }
    return markers
}

function changeMapPosition(newLat, newLng, map) {
    let newPosition = new google.maps.LatLng(newLat, newLng);
    map.setCenter(newPosition);
  }

function applyColor(color){
    switch (color) {
        case "Garage":
            return '#302020'
            break;
    
        default:
            break;
    }
}
    
 