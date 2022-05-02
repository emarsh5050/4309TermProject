<?php
	include ('shared.php');
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Catering - David's Barbeque</title>
        <meta name="description" content="Have David's cater for your next party, graduation, wedding, or reunion! Get a quote today.">
        <meta name="keywords" content="catering, party, graduation, wedding, event, reunion">
        <!--link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet"-->
        <link href="css/style.css" rel="stylesheet">
        <script src="https://kit.fontawesome.com/011c7b1de4.js" crossorigin="anonymous"></script>
    </head>

    <body>
    <?php echo $nav; ?>

        <main>

            <section>
                <h1>Catering</h1>
                <div class="catering-container">
                    <p>David's Barbeque offers catering for corporate parties, school and graduation events, weddings, and family events. Please fill out the form below to receive a quote for your event. Call us at <a href="tel:8172619998">817-261-9998</a> with any questions.</p>
                    <a href="tel:8172619998" class="btn-primary">Give us a call&nbsp;&nbsp;<i class="fas fa-phone"></i></a>
                    <div class="catering-pictures">
                        <div class="catering-img-container">
                            <img alt="barbeque catering" src="img/catering.jpg">
                        </div>
                        <div class="catering-img-container">
                            <img alt="barbeque catering" src="img/catering2.jpg">
                        </div>
                        <div class="catering-img-container">
                            <img alt="barbeque catering" src="img/catering3.jpg">
                        </div>
                    </div>
                    <div class="catering-info-container">
                        <form class="general-form" action="review-catering.php" method="post">
                            <h3>Get a quote</h3>
                            <fieldset>
                                <legend>Personal information</legend>
                                <label for="firstname">First name</label><input type="text" id="firstname" name="firstname" placeholder="First name">
                                <label for="lastname">Last name</label><input type="text" id="lastname" name="lastname" placeholder="Last name">
                                <label for="email">Email address</label><input type="email" id="email" name="email" placeholder="Email address">
                                <label for="phone">Phone number</label><input type="tel" id="phone" name="phone" placeholder="Phone number">
                            </fieldset>
                            <fieldset>
                                <legend>Event information</legend>
                                <label for="date">Date of event</label><input type="date" id="date" name="date" placeholder="Date of event">
                                <label for="guests">Number of guests</label><input type="number" id="guests" name="guests" placeholder="Number of guests">
                                <label for="venue">Venue or location</label><input type="text" id="venue" name="venue" placeholder="Venue or location">
                                <label for="type">Event type</label><input type="text" id="type" name="type" placeholder="Event type">
                                <label for="description">Description of services needed</label><input type="text" id="description" name="description" placeholder="Description of services needed">
                            </fieldset>
                            <label for="getQuote">Get Quote</label><input class="btn-secondary" type="submit" id="getQuote" name="getQuote" value="Get quote">
                            <p>We will respond to your request by email within 48 hours.</p>
                        </form>
                    </div>
                </div>
        </main>
        <script src="js/app.js"></script>
    </body>

    <?php echo $footer; ?>
</html>