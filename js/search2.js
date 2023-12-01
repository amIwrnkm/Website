const f = document.getElementById('search-hide');
const q = document.getElementById('search-box-hide');
const google = 'https://www.google.com/search?q=site%3A+';
const site = 'TechnoZoom.ir';


function submitted(event) {
  event.preventDefault();
  const url = google + site + '+' + q.value;
  const win = window.open(url, '_blank');
  win.focus();
}


f.addEventListener('submit', submitted);