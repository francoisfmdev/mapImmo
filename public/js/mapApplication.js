

fetchingData('/data')
                .then(data => {
                    // console.log(data)
                    const map = initMap()
                    let markers = []
                    let properties = data[0]
                    let cities = data[1]

                    markers = createMarkers(properties, map)

                    console.log(' hh' ,map.center.lat())
                    setTimeout(() => { console.log(' hh' ,map.center.lat())
                      }, "5000")
                    parcourirEnBoucleAvecPause(cities , map)
                    
                })
                .catch(error => console.log(error))