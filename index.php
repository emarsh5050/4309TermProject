<?php
	include ('shared.php');
?>

<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>David's Barbeque</title>
    <!--link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet"-->
    <link href="css/style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/011c7b1de4.js" crossorigin="anonymous"></script>
</head>

    <body>

        <?php echo $navHome; ?>

        <main>

            <div class="hero-container">
                <img src="img/home-hero.jpg" alt="Person cutting barbeque meat">
                <div class="gradient-t2b"></div>
                <h1 class="hero-text">Barbeque done right.<br>Since 1910.</h1>
                <a class="btn-primary" href="menu.php" alt="order online">Order Online</a>
            </div>

            <section>
                <div class="btn-block-container">
                    <a class="btn-block" href="menu.php" alt="Menu">
                        <img src="img/button-block-menu.jpg" alt="beef brisket">
                        <div class="gradient-b2t"></div>
                        <p>See our menu</p>
                        <div class="dark-hover"></div>
                    </a>
                    <a class="btn-block" href="catering.html" alt="Menu">
                        <img src="img/button-block-catering.jpg" alt="beef brisket">
                        <div class="gradient-b2t"></div>
                        <p>Order catering</p>
                        <div class="dark-hover"></div>
                    </a>
                    <a class="btn-block" href="our-story.html" alt="Menu">
                        <img src="img/button-block-our-story.jpg" alt="beef brisket">
                        <div class="gradient-b2t"></div>
                        <p>Get to know us</p>
                        <div class="dark-hover"></div>
                    </a>
                </div>
            </section>
            
            <section>
                <h2>Community Calendar</h2>
                <div class="calendar-container">
                    <div class="event-container">
                        <div class="event-day">
                            <p>Wed<br><span>13</span><br>April</p>
                        </div>
                        <div class="event-info">
                            <p class="event-name">Arlington Historical Society Meeting</p>
                            <p class="event-time"><i class="fas fa-clock"></i> 5 - 6 p.m.</p>
                            <p class="event-location"><i class="fas fa-map-marker"></i> Texas Room</p>
                        </div>
                    </div>
                    <div class="event-container">
                        <div class="event-day">
                            <p>Tue<br><span>3</span><br>May</p>
                        </div>
                        <div class="event-info">
                            <p class="event-name">Duff Elementary Profit Share</p>
                            <p class="event-time"><i class="fas fa-clock"></i> 5 - 8 p.m.</p>
                            <p class="event-location"><i class="fas fa-map-marker"></i> David's Dining Room</p>
                        </div>
                    </div>
                    <a class="btn-secondary" href="calendar.html" alt="community calendar">View all events</a>
                </div>
            </section>

            <section class="section-full-width">
                <div class="feature-container">
                    <img src="img/merch-feature.jpg" alt="barbeque sauce">
                    <div class="gradient-t2b"></div>
                    <h3>Barbeque sauce, accessories, and t-shirts for the whole family.</h3>
                    <a class="btn-primary" href="store.html" alt="Store">Shop merch</a>
                </div>
            </section>

            <?php echo $Newsletter; ?>
            
        </main>

    <?php echo $footer; ?>
        <script src="js/app.js"></script>

    </body>

</html>
