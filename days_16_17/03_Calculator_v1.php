<?php

  // validate our incoming variables
  $num1 = $_POST['num1'];
  $num2 = $_POST['num2'];
  $operation = $_POST['operation'];

  // everything looks good!
  if ( is_numeric($num1) && is_numeric($num2) && ($operation === '+' || $operation === '-' || $operation === '*' || $operation === '/')) {
    // compute
    if ($operation === '+') {
      $answer = $num1 + $num2;
    }
    else if ($operation === '-') {
      $answer = $num1 - $num2;
    }
    else if ($operation === '*') {
      $answer = $num1 * $num2;
    }
    else {
      if ($num2 === 0) {
        $answer = 'undefined';
      }
      else {
        $answer = $num1 / $num2;
      }
    }

    // output
    print "The answer to $num1 $operation $num2 is $answer";
  }

  // otherwise we have a problem
  else {
    print "Can't compute!";
  }


?>
