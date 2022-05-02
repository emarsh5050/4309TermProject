<?php
include ('shared.php');
?>

<!DOCTYPE HTML>
<HTML>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Success!</title>
      <!--link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet"-->
      <link href="css/style.css" rel="stylesheet">
      <script src="https://kit.fontawesome.com/011c7b1de4.js" crossorigin="anonymous"></script>
   </head>
   <body>
        </main>
            <?php echo $nav; ?>
            <section>
                <h1>Success!</h1>
                <p>Thank you for reaching out to us. We'll get back to you as soon as we can. In the meantime, please visit our home page, or check out some of the links below.</p>
                <a class="btn-primary" href="index.php" alt="go back home">Go back home</a><br>
                <div class="btn-block-container">
                    <a class="btn-block" href="our-story.html" alt="Menu">
                        <img src="img/button-block-our-story.jpg" alt="David's employee cooking meat">
                        <div class="gradient-b2t"></div>
                        <p>Read our story</p>
                    </a>
                    <a class="btn-block" href="calender.php" alt="Menu">
                        <img src="img/hands.jpg" alt="People's hands meeting in the middle to symbolize teamwork">
                        <div class="gradient-b2t"></div>
                        <p>See upcoming events</p>
                    </a>
                    <a class="btn-block" href="store.php" alt="Menu">
                        <img src="img/merch-feature.jpg" alt="Image of bottle of sauce">
                        <div class="gradient-b2t"></div>
                        <p>Shop our merch</p>
                    </a>
                </div>
            </section>

            
            <footer><?php echo $footer; ?></footer>
        </main>

        <script src="js/app.js"></script>
</body>
</html>