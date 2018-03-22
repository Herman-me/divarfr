$(document).ready(function(){


  $('#show_api').click(function(){
    $('#set-back').fadeOut('fast', function() {
    });;
    $('#set-back').removeClass('show');
    $('#show_api_block').fadeIn('slow', function() {

    });;
  });

  var password = document.getElementById('pwd3');
  $('#show_apis').click(function() {
    $.get('get_api.php?password=' + password.value, function(data, status){
      $('#api_shower').val(data);
    });
  });


});
