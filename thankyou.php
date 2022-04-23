<?php
include ('shared.php'); 
?>

<HTML>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Thank you!</title>
      <!--link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet"-->
      <link href="css/style.css" rel="stylesheet">
      <script src="https://kit.fontawesome.com/011c7b1de4.js" crossorigin="anonymous"></script>
   </head>
   <body>
        </main>
            <?php echo $nav; ?>
            <hr size="1">
            <div class="h2">Thank you for your order!</div>
            <hr size="1">
            
            <section>
                <div class="btn-block-container">
                    <a class="btn-block" href="our-story.html" alt="Menu">
                        <img src="img/button-block-our-story.jpg" alt="David's employee cooking meat">
                        <div class="gradient-b2t"></div>
                        <p>Learn you're supporting</p>
                        <div class="dark-hover"></div>
                    </a>
                    <a class="btn-block" href="calender.php" alt="Menu">
                        <img src="img/hands.jpg" alt="People's hands meeting in the middle to symbolize teamwork">
                        <div class="gradient-b2t"></div>
                        <p>See upcoming events</p>
                        <div class="dark-hover"></div>
                    </a>
                    <a class="btn-block" href="shop.php" alt="Menu">
                        <img src="img/merch-feature.jpg" alt="Image of bottle of sauce">
                        <div class="gradient-b2t"></div>
                        <p>Shop our Merch</p>
                        <div class="dark-hover"></div>
                    </a>
                </div>
            </section>
            
            <?php echo $Newsletter; ?>
            
            <footer><?php echo $footer; ?></footer>
        </main>
    </BODY>
</HTML>