<!doctype html>
<html lang="en-us">
  <head>
    <title>Voting Results</title>
    <meta charset="utf-8">
  </head>

  <body>
    <h1>Vote Results</h1>

    <?php

      // get raw data from our 'votes.txt' file

      // YOU NEED TO CHANGE THIS LINE IN ORDER FOR THIS PROGRAM TO WORK!
      $folder = getcwd() . '/data';
      $file = $folder . '/votes.txt';
      $data = file_get_contents($file);

      // split apart the file based on the "\n" character to isolate each line
      $lines = explode("\n", $data);

      // assume no votes in any category
      $red = 0;
      $green = 0;
      $blue = 0;
      $total = 0;

      // visit each line
      for ($i = 0; $i < sizeof($lines); $i++) {
          if ($lines[$i] === 'red') {
            $red++;
            $total++;
          }
          else if ($lines[$i] === 'green') {
            $green++;
            $total++;
          }
          else if ($lines[$i] === 'blue') {
            $blue++;
            $total++;
          }
      }

      // final output
      if ($total === 0) {
        print "<p>No votes!</p>";
      }
      else {
        print "<p>Red: $red</p>";
        print "<p>Green: $green</p>";
        print "<p>Blue: $blue</p>";
      }

    ?>

  </body>

</html>
