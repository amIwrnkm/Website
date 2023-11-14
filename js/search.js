const f = document.getElementById('header-center');
const q = document.getElementById('search-box');
const google = 'https://www.google.com/search?q=site%3A+';
const site = 'example.com';


function submitted(event) {
  event.preventDefault();
  const url = google + site + '+' + q.value;
  const win = window.open(url, '_blank');
  win.focus();
}


f.addEventListener('submit', submitted);