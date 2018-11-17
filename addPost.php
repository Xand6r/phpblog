<?php
    require("config/connection.php");
    $author=$_POST['author'];
    $title=$_POST['title'];
    $body=$_POST['text'];
    $query="INSERT INTO posts (title,author,body) VALUE ('$author','$title','$body')";
    if(mysqli_query($conn,$query)){
        header('Location:'.ROOT_URL."");
    }
    else{
        echo(mysqli_error($conn));
    }
?>