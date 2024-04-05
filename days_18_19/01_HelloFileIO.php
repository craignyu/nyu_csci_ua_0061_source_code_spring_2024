<?php

  // step 1: set up a folder on the server where you want to store data
  // in general, this folder should be outside of your public_html folder
  // to prevent people from 'snooping' into the folder through your browser
  // copy the path to this folder and store it in a variable in your PHP document
  // you will need the full path to the folder, starting with '/'
  // on the i6 server you can run the 'pwd' command to get this info, or if you
  // are using an FTP program you can right-click/control-click on the folder
  // and select 'Get Info'/'Properties'

  // YOU NEED TO CHANGE THIS LINE IN ORDER FOR THIS PROGRAM TO WORK!
  $folder = '';

  // you could also use the 'getcwd' function to have the server compute the
  // file path based on where the PHP document is located
  $folder = getcwd() . '/data';

  // step 2: set the permissions on this folder to be 777 (chmod 777 foldername)
  // note that this gives EVERYONE on your server permission to write and read
  // content in the folder. this is necessary on the i6 server because the apache
  // webserver runs as a separate username and thus won't be able to add data
  // to this folder without the appropriate permissions
  // this is something that you generally don't have to do on your own dedicated
  // webserver that you purchase for your own projects

  // step 3: construct a filename that will be used to accept data, using the 'folder'
  // variable as a prefix to form a fully qualified file location
  $filename = $folder . '/hello.txt';

  // step 4: in PHP, use the file_put_contents function to add data to a
  // filename in this folder.  you can use the optional 'FILE_APPEND' constant
  // as a third argument if you want to append data rather than overwrite the file
  // that's already there
  file_put_contents($filename, 'hey there! ', FILE_APPEND);



  // you can also get the value of a file by using 'file_get_contents' - this
  // function returns a string that contains the current contents of a file
  $filedata = file_get_contents($filename);

  print "The file contains:";
  print "<pre>$filedata</pre>";

?>
