
"use strict"

var sendObj = {
    method: "GET"
};

const myCardBody = document.querySelector("#myCardBody");

// Fetch country data from API
fetch('https://restcountries.com/v3.1/all', sendObj)
    .then(function (response) {
        return response.json();  // Parse the response as JSON
    })
    .then(function (jsonBody) {
        // Let's use the first country in the list as an example (you can modify this)
        const country = jsonBody[0]; // Fetch first country's data (you can use a loop for multiple countries)

        // Create new card elements dynamically
        const newCardHTML = `
            <div class="card-body">
                <img src="${country.flags.png}" class="rounded float-end" id="country1" alt="${country.name.common}">
                <h5 class="card-title" id="myCountryHeading1">${country.name.common}</h5> <!-- Fetch from common -->
                <h6 class="card-subtitle mb-2 text-body-secondary" id="myCountryCapital1">${country.capital ? country.capital[0] : 'N/A'}</h6> <!-- Fetch from capital -->
                <p class="card-text" id="myCountryFlagInfo1">${country.flag}</p> <!-- Display flag symbol -->
                <a href="${country.maps.googleMaps}" target="_blank" class="card-link" id="myCountryMap1">View on Google Maps</a>  
            </div>
        `;

        myCardBody.innerHTML = newCardHTML;
    }).then(function (jsonBody) {     // and that "json" output take a input by this funct and console.log(jsonBody); ... 👉👉 hence we see out
        console.log(jsonBody);
    })
    .catch(function (error) {
        console.error('Error fetching data:', error); // Error handling
    });




