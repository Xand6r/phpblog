<?php
    require('config/getPosts.php');
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
    <?php foreach($posts as $post):?>
        <div class="card">
            <div class="card-content">
                <div class="card-title">
                    <?php echo($post['title'])?>
                    <span class="right author">by:<?php echo($post['author'])?> on <?php echo($post['posted_at'])?></span>
                </div>
                <span class="text"><?php echo(substr($post['body'],0,90))?></span>
                <div class="card-action">
                    <a href=<?php echo(ROOT_URL."post.php?id=".$post['id'])?>>see more..</a>
                </div>
            </div>
        </div>
    <?php endforeach;?>
</div>
<p></p>
        


  <!-- Modal Trigger -->
  <a class="btn waves-effect waves-light grey darken-2  modal-trigger" id="trigger"  href="#modal1"><i class="fa fa-envelope-open"></i></a>

  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <form action=<?php echo(ROOT_URL."addPost.php")?> method="POST">
        <div class="modal-content">
            <h4 class="flow-text center">Modal Header</h4>
            <div class="input-field">
                <input type="text" class="half" placeholder="author" name="author">
                <input type="text" class="half right" placeholder="title" name="title">
            </div>
            <div class="input-field">
                <textarea name="text" class="materialize-textarea" placeholder="my post about today is......."></textarea>
            </div>
        </div>
        <div class="modal-footer">
            <button class="btn center modal-close waves-effect waves-green btn grey darken-2">Post</button>
        </div>
    </form>
  </div>
        

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