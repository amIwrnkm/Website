const formElement = document.getElementById('search-hide');
const searchBoxElement = document.getElementById('search-box-hide');
const googleSearchURL = 'https://www.google.com/search?q=site%3A+';
const siteToSearch = 'TechnoZoom.ir';

function handleFormSubmission(event) {
  event.preventDefault();
  const searchURL = googleSearchURL + siteToSearch + '+' + searchBoxElement.value;
  const newWindow = window.open(searchURL, '_blank');
  newWindow.focus();
}

formElement.addEventListener('submit', handleFormSubmission);

