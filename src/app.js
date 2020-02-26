const $ = require("jquery");
const Handlebars = require("handlebars");

$(document).ready(function() {
  var url = 'http://localhost:8888/php-ajax-dischi/server.php'
  callAjaxAll(url)

  $(".search-input").keyup(function() {
    $('.wrapper').empty();
    var inputSearch = $(this).val().toLowerCase();
    searchAlbum(url, inputSearch)
  });
});


//---------- FUNNCTION -------------
function callAjaxAll(url) {
  $.ajax({
    'url': url,
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
function searchAlbum(url, input) {
  $.ajax({
    'url':url,
    'method': 'get',
    'success': function(data) {
      var albums = data;

      var source = $("#albums-template").html();
      var template = Handlebars.compile(source);
      if (input == 0) {
        printAlbum(albums);
        callAjaxAll();
      } else {
        for (var i = 0; i < albums.length; i++) {
          var author = albums[i].author.toLowerCase().replace('.','');
          if (author.includes(input)) {
            var html = template(albums[i]);
            $('.wrapper').append(html);

          }
        }
      }
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
