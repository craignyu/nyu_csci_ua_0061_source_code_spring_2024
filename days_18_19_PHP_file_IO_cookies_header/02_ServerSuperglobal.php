<!doctype html>
<html>
  <head>
    <title>$_SERVER superglobal</title>
  </head>
  <body>
    <h1>$_SERVER superglobal</h1>
    <pre>
<?php

  // the server superglobal contains informaiton that apache has passed to our program
  // it contains a wealth of information regarding the current connection being intitated
  // by the client

  // 'print_r' prints out the associative array as a string so we can see all of its key/value pairs
  print_r( $_SERVER );

?></pre>
  </body>
  
</html>
