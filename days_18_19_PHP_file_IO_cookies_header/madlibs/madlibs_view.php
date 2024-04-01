<!doctype html>
<html>
  <head>
    <title>Mad Libs</title>
  </head>
  <body>
    <h1>Previously Created Mad Libs Stories</h1>
    <ul>
<?php

  // bring in our config file so we can access the location of our file on the server
  include('config.php');

  // grab all data as a big string
  $alldata = file_get_contents($filename);

  // remove trailing line break
  $alldata = trim($alldata);

  // isolate each line in the file
  $lines = explode("\n", $alldata);

  // visit each line
  for ($i = 0; $i < sizeof($lines); $i++) {

    // split apart the name from the story
    $items = explode("|", $lines[$i]);

    // make sure we have 4 items to work with
    if (sizeof($items) == 4) {
      // grab out info from the line
      $name = $items[0];

      // convert time to a usable format
      date_default_timezone_set('America/New_York');
      $date = date('Y-m-d H:i:s', $items[1]);

      // grab story
      $story = $items[2];

      // grab browser data
      $browser = $items[3];

      print "<li>On $date $name wrote \"$story\"<br>Their browser was $browser</li>";

    }

  }

 ?>
    </ul>
    <p><a href="madlibs_form.php">Click here to create another story</a></p>
  </body>
</html>
