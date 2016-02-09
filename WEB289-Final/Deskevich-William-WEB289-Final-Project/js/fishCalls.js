$('document').ready(function() {
youAreHere('#navbar a', 'currentLink', 'current');
stopLink('a:not(#navbar a)');
table('rowA', 'rowB', '#fishfun tr:not(:first-child)');
loadImages('#survivors a');
displayFirst('#gallery a', '#survivors');
gallery('#gallery a', '#survivors');
searchMovies('movies.html','fish');
autoFocus('#fname');
autoClear();
pickDate('#date');
accordions('#fishfaq');
validators('contact.html', '#formVal');








}); // end ready