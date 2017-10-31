<?php
  if(isset($_POST['numberGuess'])) {
    //$rdmNum = rand(1,25);
    $guess = $_POST['numberGuess'];
    $rdmNum = $_POST['randomNumber'];
    $guess = filter_var($guess, FILTER_VALIDATE_INT);
    $rdmNum = filter_var($rdmNum, FILTER_VALIDATE_INT);
    if(!$guess) {
      $message = 'NOT A NUMBER';
    }else if($rdmNum === $guess){
      $message = 'YOU GOT IT!!!!!';
    }
    else if($rdmNum < $guess){
      $message = 'You\'re too low. Try again.';
    }
    else if ($rdmNum > $guess){
      $message = 'You\'re too high. Try again.';
    }
    else if ($guess > 25){
      $message = 'Why are you guessing higher than 25?';
    }
    else if ($guess < 1){
      $message = 'You know you can\'t guess below 1 right?';
    }
    else {
      $message = 'That\'s not even a number dude';
    }
  } // end if statement
  header('Content-type: application/json');
  $array = array('message'=>$message);
  echo json_encode($array);
?>
