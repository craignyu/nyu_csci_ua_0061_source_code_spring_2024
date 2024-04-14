<?php

  // file path
  $path = getcwd() . '/databases';

  // open database
  $db = new SQLite3($path.'/pokemon_message_board.db');

  // database contains a single table named 'messages' with the following properties:
  // id      INTEGER PRIMARY KEY AUTOINCREMENT
  // avatar  TEXT
  // message TEXT

  // grab the incoming data
  $text = $_POST['message'];
  $img = $_POST['avatar'];

  // make sure we have both values
  if ($text && $img) {

    // construct SQL to store this message
    $sql = "INSERT INTO messages (avatar, message) VALUES (:img, :text)";
    $statement = $db->prepare($sql);
    $statement->bindParam(':img', $img);
    $statement->bindParam(':text', $text);

    // store the message
    $statement->execute();

    // get the 'id' value that was just inserted
    $id = $db->lastInsertRowID();

    // close the database
    $db->close();
    unset($db);

    // print this back to the calling page
    print ($id);
    exit();
  }

  print ("ERROR");
  exit();

 ?>
