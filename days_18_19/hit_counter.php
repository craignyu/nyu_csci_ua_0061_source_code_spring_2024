<?php

  // grab info about the client who initiated this request
  $browser = $_SERVER['HTTP_USER_AGENT'];
  $ip = $_SERVER['REMOTE_ADDR'];
  $time = $_SERVER['REQUEST_TIME'];
  $page = $_SERVER['REQUEST_URI'];
  $referer = $_SERVER['HTTP_REFERER'];

  // construct a string that contains this info separated by a '|' character (to allow
  // us to easily know where one value ends and the other begins)
  $data = "$time|$ip|$page|$referer|$browser\n";

  // send this data into a file on the server so we can look at it later

  // YOU NEED TO CHANGE THIS LINE IN ORDER FOR THIS PROGRAM TO WORK!
  $folder = getcwd() . '/data';
  $filename = $folder . '/log.txt';
  file_put_contents($filename, $data, FILE_APPEND);

?>
