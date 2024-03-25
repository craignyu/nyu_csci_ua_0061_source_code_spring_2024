<!DOCTYPE html>
<html lang="en-us">
  <head>
    <title>Hello, CGI</title>
    <meta charset="utf-8">
    <style type="text/css">
      .number {
        width: 50px;
        height: 50px;
        font-size: 200%;
        font-family: monospace;
      }
    </style>
  </head>

  <body>
    <h1>Calculator v2</h1>

    <div><?php

      // only run this code if the user has submitted the form
      if ($_POST['submit']) {

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

      }



    ?></div>

    <form action="04_Calculator_v2.php" method="POST">
      <input class="number" type="text" name="num1" value="<?php if ($answer || $answer === 0) { print $answer; } ?>">
      <select name="operation">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
      </select>
      <input class="number" type="text" name="num2">
      <input name="submit" type="submit" value="Compute!">
    </form>
  </body>
  
</html>
