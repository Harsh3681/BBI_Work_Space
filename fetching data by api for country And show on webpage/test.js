let countriesData = [];  // Declare an array to hold the fetched country data
let debounceTimeout;     // Timeout variable for debounce function

// Show loader function
function showLoader() {
  document.getElementById('loader').style.display = 'flex';
}

// Hide loader function
function hideLoader() {
  document.getElementById('loader').style.display = 'none';
}

// Fetch country data from API and show loader while fetching
function fetchCountryData() {
  showLoader();  // Show loader when fetching starts

  fetch('https://restcountries.com/v3.1/all', { method: 'GET' })
    .then(response => response.json())
    .then(jsonBody => {
      countriesData = jsonBody;  // Store fetched countries data
      displayCountries(countriesData);  // Display all countries initially
      hideLoader();  // Hide loader once data is fetched
    })
    .catch(error => {
      console.error('Error fetching data:', error);
      hideLoader();  // Hide loader if an error occurs
    });
}

// Function to display countries on the webpage
function displayCountries(countries) {
  const myRow1 = document.querySelector('#myRow1');  // Get the row element
  myRow1.innerHTML = '';  // Clear any previous content

  countries.forEach(country => {
    const countryName = country.name.common;
    const countryCapital = country.capital ? country.capital[0] : 'No Capital';
    const countryFlag = country.flags.png;
    const countryMap = country.maps.googleMaps;

    const cardHTML = `
      <div class="col-md-4 mb-4 d-flex justify-content-center">
        <div class="card" style="width: 18rem;">
          <img src="${countryFlag}" class="card-img-top" alt="${countryName} flag">
          <div class="card-body">
            <h5 class="card-title">${countryName}</h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">${countryCapital}</h6>
            <p class="card-text">Population: ${country.population}</p>
            <a href="${countryMap}" target="_blank" class="btn btn-primary">View on Map</a>
          </div>
        </div>
      </div>
    `;

    // Insert the card into the row
    myRow1.insertAdjacentHTML('beforeend', cardHTML);
  });
}

// Function to filter countries based on user input
function filterCountries(query) {
  const filteredCountries = countriesData.filter(country => 
    country.name.common.toLowerCase().startsWith(query.toLowerCase())
  );

  displayCountries(filteredCountries);
}

// Debounce function to limit the number of calls to filterCountries()
function debounce(func, delay) {
  return function(...args) {
    clearTimeout(debounceTimeout);
    debounceTimeout = setTimeout(() => func.apply(this, args), delay);
  };
}

// Event listener for search input (with debounce)
document.querySelector('#countrySearch').addEventListener('input', debounce(function(event) {
  const searchQuery = event.target.value;  // Get the user's search input
  filterCountries(searchQuery);  // Filter countries based on the input
}, 300));  // Debounce delay of 300ms

// Event listener for search button click
document.querySelector('#searchButton').addEventListener('click', function() {
  const searchQuery = document.querySelector('#countrySearch').value;  // Get the search input
  filterCountries(searchQuery);  // Filter countries based on the input
});

// Fetch the country data when the page loads
fetchCountryData();
