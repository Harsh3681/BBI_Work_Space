
// async function fetchCountryData(){
//     const url = 'https://car-api2.p.rapidapi.com/api/vehicle-attributes?attribute=bodies.type';
//     const options = {
//         method: 'GET',
//         headers: {
//             'x-rapidapi-key': '721b5f4e26msh19fa3d612720368p1cdd08jsnf339ee1f38ae',
//             'x-rapidapi-host': 'car-api2.p.rapidapi.com'
//         }
//     };

//     try {
//         const response = await fetch(url, options);
//         const result = await response.json();
//         console.log(result);
//     } catch (error) {
//         console.error(error);
//     }
// }
// fetchCountryData();


async function fetchCountryData(){
    const url = 'https://car-api2.p.rapidapi.com/api/models?sort=id&direction=asc&year=2020&verbose=yes';
    const options = {
        method: 'GET',
        headers: {
            'x-rapidapi-key': '721b5f4e26msh19fa3d612720368p1cdd08jsnf339ee1f38ae',
		    'x-rapidapi-host': 'car-api2.p.rapidapi.com'
        }
    };

    try {
        const response = await fetch(url, options);
        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }
        const result = await response.json();
        console.log(result);  // Log fetched data to the console
    } catch (error) {
        console.error('Error fetching data:', error);
    }
}

// Call the function to fetch data
fetchCountryData();












