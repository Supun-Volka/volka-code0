<?php

    // connect.php

    $db_name = 'mydabname';
    $db_username = 'mydbuser';
    $db_password = 'mydbpass';
    $db_host = 'mydbhost';

    $link = mysqli_connect($db_host, $db_username, $db_password, $db_name);
    if (mysqli_connect_errno()) {
        die('Failed to connect to the server : '.mysqli_connect_error());
    }

    // avoid to use echo here because it will be sent to ActionScript

?>
