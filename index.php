<?php
	include ('shared.php');
?>

<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>David's Barbeque</title>
    <meta name="description" content="Order online, view our menu, find an upcoming event, and learn more about our restaurant.">
    <meta name="keywords" content="menu, barbeque, order, calendar, events">
    <!--link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet"-->
    <link href="css/style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/011c7b1de4.js" crossorigin="anonymous"></script>
</head>

    <body>

        <?php echo $navHome; ?>

        <main>

            <div class="hero-container">
                <img src="img/home-hero2.jpg" alt="Person cutting barbeque meat">
                <div class="gradient-t2b"></div>
                <h1 class="hero-text">Barbeque done right.<br>Since 1910.</h1>
                <a class="btn-primary" href="menu.php" alt="order online">Order online</a>
            </div>

            <?php echo $homepage; ?>

            <section>
                <?php echo $Newsletter; ?>
            </section>
        </main>

<?php echo $footer; ?>
    
        <script src="js/app.js"></script>
        <script>
        document.addEventListener("DOMContentLoaded", function(event) { 
            var scrollpos = localStorage.getItem('scrollpos');
            if (scrollpos) window.scrollTo(0, scrollpos);
        });

        window.onbeforeunload = function(e) {
            localStorage.setItem('scrollpos', window.scrollY);
        };
    </script>

    </body>

</html>
