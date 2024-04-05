<?php

  // if we have a color value we should store it
  if (isset($_POST['color']) && $_POST['color'] !== '') {
    $folder = getcwd() . "/data";
    $file = $folder . '/votes.txt';
    file_put_contents($file, $_POST['color'] . "\n", FILE_APPEND);
    $vote_ok = true;
  }
  else {
    $vote_ok = false;
  }

?>

<!doctype html>
<html lang="en-us">
  <head>
    <title>Voting</title>
    <meta charset="utf-8">
  </head>

  <body>
    <h1>Vote!</h1>
    <?php
      if ($vote_ok) {
        print "<p>Your vote has been recorded!</p>";
      }
     ?>
    <form method="POST" action="04_Voting.php">
      What's your favorite color?
      <select name="color">
        <option value="">Select a color</option>
        <option value="red">Red</option>
        <option value="green">Green</option>
        <option value="blue">Blue</option>
      </select>
      <input type="submit" value="Vote!">
    </form>
  </body>

</html>
