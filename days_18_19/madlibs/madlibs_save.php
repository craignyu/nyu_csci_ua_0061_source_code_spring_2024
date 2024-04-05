<?php

  // bring in our config file so we can access the location of our file on the server
  include('config.php');

  // grab incoming data
  $name = $_POST['name'];
  $verb = $_POST['verb'];
  $adverb = $_POST['adverb'];
  $noun = $_POST['noun'];
  $adjective = $_POST['adjective'];

  // make sure we have all the data we need
  if ($name && $verb && $adverb && $noun && $adjective) {

    // construct a story
    $story = "The $adjective $noun was very hungry so it decided to $adverb $verb to the nearest restaurant.";

    // grab some metadata from the request to store
    $browser = $_SERVER['HTTP_USER_AGENT'];
    $time = time();

    // store all data that the user entered
    file_put_contents($filename, "$name|$time|$story|$browser\n", FILE_APPEND);

    // set a cookie on the client's computer to remember that a story has been created
    setcookie('previous_story', $story);
  }

  // otherwise we don't have enough data - send them back!
  else {
    header('Location: madlibs_form.php?error=yes');
    exit();
  }
 ?>
<!doctype html>
<html>
  <head>
    <title>Mad Libs</title>
  </head>
  <body>
    <h1>Your Mad Libs Story</h1>
    <p>Here is your story:</p>
    <p><?php print $story; ?></p>
    <p><a href="madlibs_form.php">Click here to create another story</a></p>
    <p><a href="madlibs_view.php">Click here to view all previously created stories</a></p>
  </body>
</html>
