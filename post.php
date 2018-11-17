<?php
    require('config/connection.php');
    $query="SELECT * FROM posts WHERE id=".$_GET['id'];
    $results=mysqli_query($conn,$query);
    $post=mysqli_fetch_assoc($results);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author="shuaibu alexander">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"><link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="public/style.css">
    <link rel="shortcut icon" href="public/favicon.ico" type="icon">
    <title>VENTING-BLOG</title>
</head>
<body>
<!-- header -->
    <nav>
        <div class="nav-wrapper grey darken-2">
            <a href="#!" class="brand-logo center">Venting-Blog</a>
        </div>
    </nav>
<!-- header -->

<!-- body -->
<div class="container">
    <?php?>
        <div class="card">
            <div class="card-content">
                <div class="card-title">
                    <?php echo($post['title'])?>
                    <span class="right author">by:<?php echo($post['author'])?> on <?php echo($post['posted_at'])?></span>
                </div>
                <?php echo($post['body'])?>
                <div class="card-action">
                </div>
            </div>
        </div>
    <?php?>
</div>

        


  <!-- Modal Trigger -->
  <a class="btn waves-effect waves-light grey darken-2"  id="trigger"  href=<?php echo(ROOT_URL."index.php")?>><i class="fa fa-arrow-left"></i></a>

        

<!-- </div> -->
<!-- body -->

</body>
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous">
</script>            
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="public/script.js"></script>
</html>