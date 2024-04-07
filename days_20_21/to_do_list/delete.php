<?php

  // extract 'id' from incoming data
  $id = $_GET['id'];

  // is it missing? if so, send them back to the 'to_do_list.php'
  // script (silent error)
  if (!isset($id)) {
    header("Location: to_do_list.php");
    exit();
  }

  // connect to our database
  include('config.php');
  $db = new SQLite3($path.'/to_do_list.db');

  // construct a query to delete the item
  $sql = "DELETE FROM items WHERE id = '$id'";

  // prepare the SQL statement
  $statement = $db->prepare($sql);

  // execute the query
  $result = $statement->execute();

  // how many rows were affected?
  $rows_affected = $db->changes();

  // we are done with the database so we should close it
  // this allows Apache to use it again quickly, rather than waiting for
  // the database's natural timeout to occur
  $db->close();
  unset($db);

  if ($rows_affected) {
    // generate confirmation
    header("Location: to_do_list.php?status=deleted");
    exit();
  }
  else {
    // silent redirect back to to_do_list
    header("Location: to_do_list.php");
    exit();
  }



 ?>
