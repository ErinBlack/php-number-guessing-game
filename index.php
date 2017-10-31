<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Number Guessing Game</title>
    <script
    src="https://code.jquery.com/jquery-3.2.1.min.js"
    integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
    crossorigin="anonymous"></script>
    <script src="js/scripts.js" charset="utf-8"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  </head>
  <body>
    <form id="guessNum">
      <label for="">Guess a Number Between 1 and 25</label>
      <input type="number" id="guess" value="">
      <input type="hidden" id="rand" value="<?= $rdmNum?>">
      <input type="submit" value="Check My Guess">
    </form>
    <div class="response">

    </div>
  </body>
</html>
