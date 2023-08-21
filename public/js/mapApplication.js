

fetchingData('/data')
                .then(data => {
                    // console.log(data)
                    const map = initMap()
                    let markers = []
                    let properties = data[0]
                    let cities = data[1]
                    let page = data[2]
                    // console.log(page);
                    const nbP = countSCI(properties)
                    markers = createMarkers(properties, map)
                    const time = nbP * 300
                    const formattedTime = String(time)
                    
                    setTimeout(() => {
                      parcourirEnBoucleAvecPause(cities , map)
                      }, time)
                    
                    
                })
                .catch(error => console.log(error))