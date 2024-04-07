<?php

  // extract 'id' from incoming data
  $id = $_GET['id'];

  // extract desired status from incoming data
  $status = $_GET['status'];

  // is this data missing? if so, send them back to the 'to_do_list.php'
  // script (silent error)
  if ( !(isset($id) && isset($status)) ) {
    header("Location: to_do_list.php");
    exit();
  }

  // make sure we have a valid status
  if ($status == 'ip') {
    $newstatus = 'in progress';
  }
  else if ($status == 'c') {
    $newstatus = 'completed';
  }
  else {
    // error! send them back (unknown status)
    header("Location: to_do_list.php");
    exit();
  }

  
  // connect to our database
  include('config.php');
  $db = new SQLite3($path.'/to_do_list.db');

  // construct a query to update the status
  $sql = "UPDATE items SET status = :status WHERE id = :id";
  $statement = $db->prepare($sql);
  $statement->bindValue(':status', $newstatus);
  $statement->bindValue(':id', $id);

  // run the query
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
    header("Location: to_do_list.php?status=updated");
    exit();
  }
  else {
    // silent redirect back to to_do_list
    header("Location: to_do_list.php");
    exit();
  }



 ?>
