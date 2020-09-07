function getData() {

  $.ajax({
    url: 'index.php',
    method: 'GET',
    success: function(data) {

      var discs = data['response'];

      // console.log(discs);

      getDisc(discs);



    },
    error: function(err) {

      console.log('err', err);

    }
  });
}

function getDisc(discs) {

  var template = $('#template-disc').html();
  var compiled = Handlebars.compile(template);
  var target = $('#target');


  for (var i = 0; i < discs.length; i++) {
    var disc = discs[i];

    // console.log(disc);

    var discHTML = compiled(disc);
    target.append(discHTML);
  }
}

function searchInInput() {
  var btn = $('#btn');

  btn.click(getGenre);


}


// PARTE OPZIONALE

function getGenre() {

  var selectVal = $('select.genre').val();

  $('#target').text('');
  console.log(selectVal);


  $.ajax({
    url: 'genre.php',
    method: 'GET',
    data: {
      'genre': selectVal
    },
    success: function(data) {

      console.log('data', data);

      getDisc(data);



    },
    error: function(err) {

      console.log('err', err);

    }
  });


}












$(document).ready(function() {
  getData();
  searchInInput();
});
