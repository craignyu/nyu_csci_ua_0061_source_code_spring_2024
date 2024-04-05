<!doctype html>
<html>
    <head>
    </head>
    <body>
        <h1>Story Time!</h1>

        <?php
            // do we have an error to deal with?
            if ($_GET['error'] == 'missing') {
                print "Missing values in the form!!!!!";
            }
        ?>

        <form action="save.php" method="POST">
            Name:
            <input type="text" id="username" name="username">
            <br>

            Color:
            <input type="text" id="color" name="color">

            <input type="submit">
        </form>
    </body>
</html>