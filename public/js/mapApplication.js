

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
                    const time = nbP * 100
                    const formattedTime = String(time)
                    markers = createMarkers(properties, map, cities)
                   
                    console.log(cities)
                    setTimeout(() => {
                      parcourirEnBoucleAvecPause(cities , map, properties)
                      }, time)
                    
                    
                })
                .catch(error => console.log(error))