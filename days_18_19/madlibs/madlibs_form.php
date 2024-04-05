<!doctype html>
<html>
  <head>
    <title>Mad Libs</title>
  </head>
  <body>
    <h1>Mad Libs</h1>
    <?php
      if ($_GET['error'] == 'yes') {
        print "<p>Fill out all of the form fields!</p>\n";
      }
      if ($_COOKIE['previous_story']) {
        print "<p>Welcome back, your most recent story is:</p>";
        print "<blockquote>" . $_COOKIE['previous_story'] . "</blockquote>";
      }
     ?>
    <form method="post" action="madlibs_save.php">
      Name: <input type="text" name="name"><br>
      Verb: <input type="text" name="verb"><br>
      Noun: <input type="text" name="noun"><br>
      Adjective: <input type="text" name="adjective"><br>
      Adverb: <input type="text" name="adverb"><br>
      <input type="submit">
    </form>
    <p><a href="madlibs_view.php">Click here to view all previously created stories</a></p>

    <?php
      // note that it's totally OK to interrupt an "if" statement with HTML in PHP!
      if ($_COOKIE['previous_story']) {
    ?>

    <p><a href="madlibs_clear.php">Click here to clear your previously created story (this will not delete it from the server)</a></p>

    <?php

      } // this is the closing brace to the previously opened "if" statement

    ?>
  </body>
</html>
