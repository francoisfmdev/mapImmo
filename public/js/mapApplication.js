

fetchingData('/data')
                .then(data => {
                    // console.log(data)
                    const map = initMap()
                    let markers = []
                    let properties = data[0]
                    let cities = data[1]
                    let page = data[2]
                    // console.log(page);
                    markers = createMarkers(properties, map)

                    
                    setTimeout(() => {
                      }, "5000")
                    parcourirEnBoucleAvecPause(cities , map)
                    
                })
                .catch(error => console.log(error))