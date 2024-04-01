<?php

    // grab the data from the form
    $username = $_POST['username'];
    $color = $_POST['color'];

    // validate the data to make sure we have everything we need
    if ($username && $color) {

        // define a folder on the hard drive where we
        // want to save our stories
        include('config.php');

        $data = "$username,$color\n";

        // put the story into a file in this folder
        file_put_contents($path.'/stories.txt', $data, FILE_APPEND);

        // save a cookie to the client indicating their
        // last color choice
        setcookie('color', $color);

        // send them to the view page
        header('Location: view.php');
        exit();
    }

    else {

        // we dont have what we need, send the user back
        // to form.php to fill out the form again
        header("Location: form.php?error=missing");
        exit();
    }


    // store the data on the server for later use



?>