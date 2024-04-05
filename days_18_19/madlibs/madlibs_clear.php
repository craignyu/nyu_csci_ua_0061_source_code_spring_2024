<?php

  // overwrite the cookie with an empty string
  // the third argument is the 'expiration time' for the cookie
  // we are setting it to be a few seconds in the past, which will cause
  // the cookie to be deleted when the browser loads the page
  setcookie('previous_story', '', time()-3600);

  // send the user back to the form
  header('Location: madlibs_form.php');
  exit();
 ?>
