<?php

  // get incoming data
  $title = $_POST['title'];

  // make sure we have our data -- if not, fail out here
  if (strlen($title) == 0) {
    header("Location: to_do_list.php?status=missinginfo");
    exit();
  }

  // data looks OK, let's connect to our database!

  // step 1: we need to identify the full file path of where our
  // databases are stored on the server. it's critically important
  // for security reasons that your databases ARE NOT stored inside
  // of your public_html folder -- if they are stored here a casual
  // web user could download ALL of your site data with a single click!
  // this may not seem too bad at first, but imagine if you are storing
  // sensitive information in your database such as usernames, passwords,
  // addresses, etc! since we plan on re-using this info on multiple
  // pages we will save it in a separate file and include it here
  include('config.php');

  // step 2: connect to our database, making sure to use the full
  // file path when specifying the database file location
  $db = new SQLite3($path.'/to_do_list.db');

  // step 3: prepare a SQL query to store our record (just a string)
  $sql = "INSERT INTO items (title, status) VALUES (:title, 'in progress')";
  $statement = $db->prepare($sql);
  $statement->bindValue(':title', $title);

  // step 4: run our query
  $result = $statement->execute();

  // step 5: because we inserted data into a table that automatically generated
  // an integer for our 'id' field (the primary key) we can obtain that info
  // right here (not super useful for this example but we will use this later
  // on in a different example)
  $id = $db->lastInsertRowID();

  // step 7: we are done with the database so we should close it
  // this allows Apache to use it again quickly, rather than waiting for
  // the database's natural timeout to occur
  $db->close();
  unset($db);

  // send the browser back to the form with a confirmation message
  header('Location: to_do_list.php?status=inserted');
  exit();
 ?>
