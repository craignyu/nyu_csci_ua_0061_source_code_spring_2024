<?php

  // set up global error reporting (PHP usually 'silently fails' - this gives you more information about what's going on -
  // comment these lines out once you're happy with your program)
  //error_reporting(E_ALL);
  //ini_set("display_errors", 1);

  // you can output values using the 'print' or 'echo' commands - note that these
  // are commands, not functions, so using a set of () is not required (though the interpreter
  // won't crash if you do use them)
  print "Hello, world!";
  print "You'd think this should be on the next line, but it's not.";
  
  // because you are generating output for a page that is going to be interpreted by the browser
  // you will need to incorporate HTML into your output in order to get it to render as expected
  print "<hr>";
  print "Hello, world!";
  print "<br>";
  print "This is really on the next line.";
  print "<hr>";

  // you can concatenate two strings using the '.' operator, like this:
  print "String 1 " . "String 2 " . "String 3";
  print "<hr>";



  // all variables in PHP are required to start with the $ character
  $var1 = "hello, world";

  // primitive variables in PHP are loosely typed, and data types are determined by context
  $var2_string = "I'm a string";
  $var2_int = 5;
  $var2_float = 5.7;
  $var2_bool = false;

  print $var2_string;
  print "<br>";
  print $var2_int;
  print "<br>";
  print $var2_float;
  print "<br>";

  // note that when printing booleans PHP will convert them to either '1' (true) or '' (false)
  print $var2_bool;
  print "<br>";

  // the 'var_dump' function can be used to inspect a variable and determine its data type
  var_dump( $var2_bool );
  print "<br>";


  // The string delimiter used determines how much "work" PHP will do in terms of evaluating
  // its contents.  If you use the ' delimiter the string will be treated literally.  for example:
  print "<hr>";
  print 'var2_string is: $var2_string';
  print "<br>";

  // but if you use the " delimiter the string will actually evaluate any contained variable references
  print "var2_string is $var2_string";



  // you can convert between data types using Java-style casting syntax, like this:
  print "<hr>";
  $var3_a = "572";
  var_dump( $var3_a );
  print "<br>";
  $var3_b = (int) $var3_a;
  var_dump( $var3_b );
  print "<br>";

  // the valid primitive types in PHP are int, float, bool and string
  $var3_c = (float) $var3_a;
  var_dump( $var3_c );
  print "<br>";

  // you can also use the 'intval' and 'floatval' functions
  $var3_c1 = intval( $var3_a );
  $var3_c2 = floatval( $var3_a );
  var_dump( $var3_c1 );
  print "<br>";
  var_dump( $var3_c2 );
  print "<br>";


  // casting a value to a boolean will result in a false value if:
  //   string: is empty or is "0"
  //   integer: is 0
  //   float: is 0.0
  // all other values evaluate to true
  $var3_d = (bool) $var3_a;
  var_dump( $var3_d );
  print "<br>";


  // PHP will do type conversion for you when working with mixed type expressions.
  // since the "+" operator is used for math only in PHP, all strings will be converted
  // to their integer equivalents in a math expression
  $var3_e = "5" + 5 + 10;
  var_dump( $var3_e );  // 20
  print "<br>";

  // if a string cannot be converted to an integer it will be converted to 0
  $var3_f = "hello" + 5 + 10;
  var_dump( $var3_f );  // 15


  // conditional statements are written in the exact same way as they are in JavaScript
  print "<hr>";
  $var4_a = 5;
  $var4_b = 10;
  $var4_c = 15;

  if ($var4_a < $var4_b) {
    print "Case 1";
  }
  else if ($var4_a < $var4_c) {
    print "Case 2";
  }
  else {
    print "Case 3";
  }
  print "<br>";

  // keep in mind that non-boolean data types can be evaluated in an 'if' statement
  // for example, this statement checks to see if the string has been set:
  $var4_d = "hello";

  if ( $var4_d ) {
    print "String has been set";
  }


  // you can create an array in PHP using the array() function
  print "<hr>";
  $var5_a = array(100, 200, 300, 400);
  print $var5_a; // will just print the word 'Array';
  print "<br>";
  var_dump( $var5_a );  // will print the whole array
  print "<br>";

  // arrays can be indexed, just like in JavaScript
  print $var5_a[0]; // 100
  print "<br>";

  // you can add to an array by using the array_push function:
  array_push( $var5_a, 500 );
  var_dump( $var5_a );
  print "<br>";

  // you can also use empty bracket syntax
  $var5_a[] = 600;
  var_dump( $var5_a );
  print "<br>";

  // you can remove an element from an array using the array_splice function
  // arguments: array, index to remove, # of elements to remove
  array_splice( $var5_a, 2, 1 );
  var_dump( $var5_a );
  print "<br>";

  // you can get the length of an array using the sizeof function
  print sizeof( $var5_a );
  print "<br>";



  // you can use a 'for' loop to examine all elements in an array, just like in JavaScript
  print "<hr>";
  for ($i = 0; $i < sizeof($var5_a); $i++) {
    print $i . ' - ' . $var5_a[$i] . '<br>';
  }



  // arrays in PHP can be indexed using integers (as above) or with strings.
  // we call arrays indexed using strings in PHP 'associative arrays'
  print "<hr>";
  $var6_a = array('name'=>'pikachu', 'power'=>'electricity', 'hitpoints'=>5);
  var_dump( $var6_a );
  print "<br>";

  // you can access individual elements in an associative array using their keys
  print $var6_a['name'];
  print $var6_a['foo']; // accessing an invalid key will not cause an error to be raised
  print $var6_a['power'];
  print "<br>";

  // you can add new keys into an associative array by just referencing them
  $var6_a['height'] = 10;
  var_dump( $var6_a );
  print "<br>";

  // and you can remove a key from an associative array using the 'unset' function
  unset($var6_a['power']);
  var_dump( $var6_a );
  print "<br>";

?>
