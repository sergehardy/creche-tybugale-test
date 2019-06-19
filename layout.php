<?php
require_once __DIR__.'/functions.php';
require_once __DIR__.'/data.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Amatic SC' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Shadows Into Light' rel='stylesheet'>

    <link rel="stylesheet" href="/assets/css/styles.css" >
    <?php include 'styles.php'; ?>

    <meta charset="UTF-8">
    <title><?php echo $title;?></title>

</head>
<body>
<header class="">
    <div class="container-fluid">
        <div class="row">
                <?php include 'header.php';?>
        </div>
    </div>
</header>
<main>
    <div class="container-fluid">
        <div class="row">
        <?php include 'content.php';?>
        </div>
    </div>
</main>
<footer class="page-footer font-small white footer-copyright text-center py-3">
    <div class="container-fluid  my-2" >
        <?php include 'footer.php';?>
    </div>
</footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script>
    $(document).ready(function () {
        $("h4").replaceWith(function(){
            return '<div class="paragraph-title">' +
                '<div class="h4">'
                +$(this).html()
                +'</div>' +
                '<span class="stripes" />    </div>';});

    })

</script>
</body>
</html>