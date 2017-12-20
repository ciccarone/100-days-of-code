var url_div = document.createElement('div');

url_div.className = 'url';

url_div.innerHTML += window.location.protocol == 'https:' ?
  '<div class="url__protocol--secure">' + window.location.protocol + '</div>' :
  '<div class="url__protocol">' + window.location.protocol + '</div>';

url_div.innerHTML += '<div class="url__domain"><a href="' + window.location.protocol + '//' + window.location.host + '">' + window.location.host + '</a></div>';

var url_paths = window.location.pathname.split('/');
var url_path = [];

for(var i = 0; i < url_paths.length; i++) {
  console.log(url_paths[i].length);
  if (url_paths[i].length > 2) {
    url_path.push(url_paths[i]);
    url_div.innerHTML += '<div class="url__path"><a href="' + window.location.protocol + '//' + window.location.host + '/' + url_path.join('/') + '">' + url_paths[i] + '</a></div>';
  }
}

document.getElementsByTagName('nav')[0].appendChild(url_div);
