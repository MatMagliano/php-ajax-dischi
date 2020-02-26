const $ = require("jquery");
const Handlebars = require("handlebars");

$(document).ready(function() {
  var url = 'http://localhost:8888/php-ajax-dischi/server.php'
  callAjaxAll(url)
});


//---------- FUNNCTION -------------
function callAjaxAll(url) {
  $.ajax({
    'url':url,
    'method': 'GET',
    'success': function(data) {
      var albums = data;
      printAlbum(albums);
    },
    'error': function(richiesta, stato, errori) {
      alert('errore');
    }

  });
} // FINE CALL AJAX

// ----------------
function printAlbum(cds) {
  var source = $("#albums-template").html();
  var template = Handlebars.compile(source);
  for (var i = 0; i < cds.length; i++) {
    var cd = cds[i];
    var html = template(cd);
    $('.wrapper').append(html);
  }
} // FINE PRINT ALBUM
