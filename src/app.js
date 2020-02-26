const $ = require("jquery");
const Handlebars = require("handlebars");

$(document).ready(function() {
  // alert('ciao');
  $.ajax({
    'url':'http://localhost:8888/php-ajax-dischi/server.php',
    'method': 'GET',
    'success': function(data) {
      var albums = data;
      printAlbum(albums);
    },
    'error': function(richiesta, stato, errori) {
      alert('errore');
    }

  }); //FINE AJAX
});


//---------- FUNNCTION -------------

function printAlbum(cds) {
  for (var i = 0; i < cds.length; i++) {
    var cd = cds[i];
    console.log(cd);
    var source = $("#albums-template").html();
    var template = Handlebars.compile(source);
    var html = template(cd);

    $('.wrapper').append(html);
  }
}
