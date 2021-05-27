<?php include('config.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title> M's around the world </title>
    <?php include('head.php'); ?>
</head>
<body>
    <div class="container">
        <header id="header">
          <?php include('header.php')?> 
        </header>
        
        <?php include('content.php')?> 

        <?php include('newsletter_footer.php'); ?>

    </div>

    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/jquery-jvectormap-2.0.5.min.js"></script>
    <script src="js/jquery-jvectormap-world-mill.js"></script>
    <script src="slick/slick.js"></script>
    <script src="js/main.js"></script>
</body>
</html>