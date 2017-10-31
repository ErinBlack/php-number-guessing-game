$( document ).ready(function() {
    console.log( "scripts.js loading" );
    $('#guessNum').on('submit', checkGuess);
});

function checkGuess(e){
  e.preventDefault();
  console.log('in check guess');
  var guessNum = $('#guess').val();
  var randNum = $('#rand').val();
  console.log('guessNum', guessNum);
 var numberGuess = {
   numberGuess: guessNum,
   randomNumber: randNum
 };
    $.ajax
        ({
        type: "POST",
        url: "/php/post.php",
        data: numberGuess,
        cache: false,
        success: function(message)
            {
              console.log('success', message);
              $('.response').empty();
              var responseAppend = '<p>' + message.message + '</p>';
              $('.response').append(responseAppend);
            }
        });
} //end checkGuess
