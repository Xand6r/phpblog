<?php
    require("connection.php");

    // create query string
    $query="SELECT * FROM posts ORDER BY posted_at DESC";

    // get results from query
    $results=mysqli_query($conn,$query);

    // fetch all the results from query
    $posts=mysqli_fetch_all($results,MYSQLI_ASSOC);

    // free up memory
    mysqli_free_result($results);

    // close the connection
    mysqli_close($conn);
?>