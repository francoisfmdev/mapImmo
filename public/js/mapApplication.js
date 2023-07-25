

fetchingData('/data')
                .then(data => {
                    console.log(data)
                    const map = initMap()
                    let markers = []
                    let properties = data[0]
                    let cities = data[1]

                    markers = createMarkers(properties, map)
                    console.log(markers)
                })
                .catch(error => console.log(error))