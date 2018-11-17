<?php
    require('config.php');
    // this is a global file which would be required in every file that requires an sql connection

    // connect to database
    $conn=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    if(mysqli_connect_errno()){
        echo("there was an error connecting to the database please try again later.".mysqli_connect_errno());
    }

?>