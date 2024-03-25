<?php

  // set up global error reporting (PHP usually 'silently fails' - this gives you more information about what's going on -
  // comment these lines out once you're happy with your program)
  //error_reporting(E_ALL);
  //ini_set("display_errors", 1);

  // you can access any incoming data sent from an HTML document using a series of
  // global associative arrays - these arrays are set up Apache to contain
  // all form data (POST or GET) and URL name/value pairs (GET)
  // we call these the PHP "superglobals"
  /*
  var_dump($_GET);
  print "<br>";
  var_dump($_POST);
  print "<br>";
  */

  // elements passed through the POST superglobal will have a variable name that matches
  // the 'name' attribute of the HTML element that was used to enter the value
  // elements passed through the GET superglobal will have a variable name that matches
  // the value of the left-hand side of the name-value pair (i.e. pokemon=pikachu)

  // you can access individual elements inside of the 'superglobal' associative arrays
  // using standard array syntax, like this:
  $num1 = $_POST['num1'];

  // data will always be passed through the superglobals as Strings
  $answer = $_POST['num1'] + $_POST['num2'];

  // you can use the 'is_numeric' function to determine if a string contains valid numeric characters
  if ( is_numeric($_POST['num1']) && is_numeric($_POST['num2']) ) {
    $sum = $_POST['num1'] + $_POST['num2'];
    print "The sum is $sum";
    print "<br>";
  }
  else {
    print "num1 and num2 are not numeric!";
    print "<br>";
  }

?>
