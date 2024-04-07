<!doctype html>
<html>
  <head>
    <title>To Do List</title>
  </head>

  <body>
    <h1>To Do List</h1>

    <?php
      if (isset($_GET['status'])) {
        if ($_GET['status'] == 'updated') {
          print "<p>Item updated!</p>";
        }
        if ($_GET['status'] == 'inserted') {
          print "<p>Item added!</p>";
        }
        if ($_GET['status'] == 'deleted') {
          print "<p>Item deleted!</p>";
        }
        if ($_GET['status'] == 'missinginfo') {
          print "<p>Missing info, try again!</p>";
        }
      }
     ?>

    <form method="POST" action="save.php">
      <p>Create New Item:</p>
      <input type="text" name="title">
      <input type="submit">
    </form>


    <h3>Your Items</h3>
    <ul>
    <?php

      // at this point in the page we should display all previously
      // created to-do list items

      // step 1: identify the full path to where our database is stored
      // since we plan on re-using this info on multiple
      // pages we will save it in a separate file and include it here
      include('config.php');

      // step 2: connect to our database, making sure to use the full
      // file path when specifying the database file location
      $db = new SQLite3($path.'/to_do_list.db');

      // step 3: prepare a query to obtain the data from the database
      // (note that you could use interpolation here if you wanted)
      $sql = 'SELECT id, title, status FROM items';

      // step 4: prepare a SQL statement object
      $statement = $db->prepare($sql);

      // step 5: run the query
      $result = $statement->execute();

      // step 6: iterate over the results
      while ($row = $result->fetchArray()) {
        // extract the relevant info from the query into some variables
        $id = $row[0];
        $title = stripslashes($row[1]);
        $status = $row[2];

        // build a link that lets the user delete an item
        $link_delete = "<a href=\"delete.php?id=$id\">delete</a>";

        // check status and build a custom link to switch status
        if ($status == "in progress") {
          $link_update = "<a href=\"update_status.php?id=$id&status=c\">mark as completed</a>";
        }
        else {
          $link_update = "<a href=\"update_status.php?id=$id&status=ip\">mark as in progress</a>";
        }

        // generate output
        print "<li>$status: $title - $link_delete | $link_update</li>";
      }

      // step 7: if we are done with the database we should close it
      // this allows Apache to use it again quickly, rather than waiting for
      // the database's natural timeout to occur
      $db->close();
      unset($db);

     ?>
   </ul>


  </body>
</html>
