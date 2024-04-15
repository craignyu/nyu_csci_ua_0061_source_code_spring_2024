<?php

  // define file path to our databases folder
  $path = getcwd() . '/databases';

  // get incoming command
  $command = $_GET['command'];

  // no command, API call failed
  if (!$command) {
    print "error";
    exit();
  }

  // command: store
  // description: accepts an addition value (string) and stores that in a text file
  else if ($command == 'store') {

    // connect to our database
    $db = new SQLite3($path.'/votes.db');

    // value to store
    $value = $_GET['value'];

    // no value, API call vailed
    if (!$value) {
      print "error";
      exit();
    }

    // value OK, store in our database
    $sql = "INSERT INTO votes (vote) VALUES (:vote)";
    $statement = $db->prepare($sql);
    $statement->bindValue(':vote', $value);
    $statement->execute();

    // close the database
    $db->close();
    unset($db);

    print "ok";
    exit();
  }

  // command: get_all_votes
  // description: obtains all previously stored votes and returns them to the client as an array
  else if ($command == 'get_all_votes') {

    // connect to our database
    $db = new SQLite3($path.'/votes.db');

    // prepare a SQL query to obtain all votes
    $sql = "SELECT vote FROM votes";
    $statement = $db->prepare($sql);
    $result = $statement->execute();

    // set up a counting array (we could have skipped this step do this by writing
    // a more advanced SQL query, but that isn't the main focus of this class ...)
    $counting_array = array();

    // iterate over result set
    while ($array = $result->fetchArray()) {

      if ($counting_array[ $array['vote'] ]) {
        $counting_array[ $array['vote'] ]++;
      }
      else {
        $counting_array[ $array['vote'] ] = 1;
      }

    }

    // close the database
    $db->close();
    unset($db);

    // send it to the browser as a JSON string
    print json_encode($counting_array);
    exit();
  }

  // command: get_vote_count_by_value
  // description: accepts an addition value (string) and returns the number of times that value can be found in the votes file
  else if ($command == 'get_vote_count_by_value') {

    // value to search for
    $value = $_GET['value'];

    // no value, API call vailed
    if (!$value) {
      print "error";
      exit();
    }

    // connect to our database
    $db = new SQLite3($path.'/votes.db');

    // prepare a SQL query to obtain all votes
    $sql = "SELECT count(vote) FROM votes WHERE vote = :vote";
    $statement = $db->prepare("$sql");
    $statement->bindParam(':vote', $value);

    // execute the query, which will only return one record
    // grab the first one as our result
    $count = $statement->execute()->fetchArray()[0];

    // close the database
    $db->close();
    unset($db);

    // output
    print $count;
    exit();
  }

  // otherwise this must be an unrecognized command
  else {
    print "error";
    exit();
  }

 ?>
