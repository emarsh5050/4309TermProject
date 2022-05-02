<?php
	include ('shared.php');
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Contact - David's Barbeque</title>
        <meta name="description" content="Have a question, comment, or concern? Get in touch with us, and we'll get back to you as soon as we can.">
        <meta name="keywords" content="contact, question, comment">
        <!--link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet"-->
        <link href="css/style.css" rel="stylesheet">
        <script src="https://kit.fontawesome.com/011c7b1de4.js" crossorigin="anonymous"></script>
    </head>

    <body>

    <?php echo $nav; ?>

        <main>
            <section>
                <h1>Contact</h1>
            </section>
            <div class="contact-hours">
                <h3>Hours and Directions</h3>
                <div class="hours">
                    <h4>Hours</h4>
                    <p>Tuesday - Saturday<br>11 a.m. - 8 p.m.</p>
                    <p>Sunday - Monday<br>11 a.m. - 8 p.m.</p>
                </div>
                <div class="iframe-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3356.701619891134!2d-97.14635538523088!3d32.72055558098918!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864e7ce6dd07be19%3A0xaa8a6e3c97722f70!2sDavid&#39;s%20Barbecue!5e0!3m2!1sen!2sus!4v1650943157608!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <section>
                <div class="contact-info">
                    <div class="contact-form">
                        <h2>Get in touch with us</h2>
                        <p>Fill out the form below, or give us a call.</p>
                        <a href="tel:8172619998"><i class="fas fa-phone"></i> 817-261-9998</a>
                        <form class="general-form" action="contact-success.php" method="post">
                                <label for="name">Name</label><input type="text" id="name" name="name" placeholder="Name">
                                <label for="email">Email address</label><input type="email" id="email" name="email" placeholder="Email address">
                                <label for="phone">Phone number</label><input type="tel" id="phone" name="phone" placeholder="Phone number">
                                <label for="comment">Comment</label><input type="text" id="comment" name="comment" placeholder="Type your comment here">
                            <label for="send">Send</label><input class="btn-secondary" type="submit" id="send" name="send" value="Send">
                        </form>
                    </div>
                </div>
            </section>
        </main>
        <script src="js/app.js"></script>
    </body>
    <?php echo $footer; ?>

</html>