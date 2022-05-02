<?php
	include ('shared.php');
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Calendar - David's Barbeque</title>
        <meta name="description" content="View upcoming events at David's Barbeque, or schedule your own event.">
        <meta name="keywords" content="event, fundraiser, calendar">
        <!--link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet"-->
        <link href="css/style.css" rel="stylesheet">
        <script src="https://kit.fontawesome.com/011c7b1de4.js" crossorigin="anonymous"></script>
    </head>

    <body>

    <?php echo $nav; ?>

        <main>
            <section>
                <h1>Community Calendar</h1>
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
                    <div class="event-container">
                        <div class="event-day">
                            <p>Sat<br><span>7</span><br>May</p>
                        </div>
                        <div class="event-info">
                            <p class="event-name">East Pantego Block Party</p>
                            <p class="event-time"><i class="fas fa-clock"></i> 4 - 6 p.m.</p>
                            <p class="event-location"><i class="fas fa-map-marker"></i> David's Dining Room</p>
                        </div>
                    </div>
                    <div class="event-container">
                        <div class="event-day">
                            <p>Wed<br><span>11</span><br>May</p>
                        </div>
                        <div class="event-info">
                            <p class="event-name">Arlington Historical Society Meeting</p>
                            <p class="event-time"><i class="fas fa-clock"></i> 5 - 6 p.m.</p>
                            <p class="event-location"><i class="fas fa-map-marker"></i> Texas Room</p>
                        </div>
                    </div>
                    <div class="event-container">
                        <div class="event-day">
                            <p>Sat<br><span>14</span><br>May</p>
                        </div>
                        <div class="event-info">
                            <p class="event-name">David's Food Truck</p>
                            <p class="event-time"><i class="fas fa-clock"></i> 8 - 10 p.m.</p>
                            <p class="event-location"><i class="fas fa-map-marker"></i> The Levitt Pavilion</p>
                        </div>
                    </div>
                    <div class="event-container">
                        <div class="event-day">
                            <p>Sat<br><span>21</span><br>May</p>
                        </div>
                        <div class="event-info">
                            <p class="event-name">Annual Garage Sale</p>
                            <p class="event-time"><i class="fas fa-clock"></i> 10 a.m. - 2 p.m.</p>
                            <p class="event-location"><i class="fas fa-map-marker"></i> David's Parking Lot</p>
                        </div>
                    </div>
                    <div class="event-container">
                        <div class="event-day">
                            <p>Thur<br><span>26</span><br>May</p>
                        </div>
                        <div class="event-info">
                            <p class="event-name">Trivia Night</p>
                            <p class="event-time"><i class="fas fa-clock"></i> 6 - 7 p.m.</p>
                            <p class="event-location"><i class="fas fa-map-marker"></i> Texas Room</p>
                        </div>
                    </div>
                    <div class="event-container">
                        <div class="event-day">
                            <p>Sat<br><span>4</span><br>June</p>
                        </div>
                        <div class="event-info">
                            <p class="event-name">Open Interviews</p>
                            <p class="event-time"><i class="fas fa-clock"></i> 4 - 8 p.m.</p>
                            <p class="event-location"><i class="fas fa-map-marker"></i> David's Dining Room</p>
                        </div>
                    </div>
                    <div class="event-container">
                        <div class="event-day">
                            <p>Wed<br><span>8</span><br>June</p>
                        </div>
                        <div class="event-info">
                            <p class="event-name">Arlington Historical Society Meeting</p>
                            <p class="event-time"><i class="fas fa-clock"></i> 5 - 6 p.m.</p>
                            <p class="event-location"><i class="fas fa-map-marker"></i> Texas Room</p>
                        </div>
                    </div>
                    <div class="event-container">
                        <div class="event-day">
                            <p>Fri<br><span>10</span><br>June</p>
                        </div>
                        <div class="event-info">
                            <p class="event-name">Movie Night: Toy Story</p>
                            <p class="event-time"><i class="fas fa-clock"></i> 5 - 7 p.m.</p>
                            <p class="event-location"><i class="fas fa-map-marker"></i> Texas Room</p>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="host-event">
                    <h2>We'd love to host your event!</h2>
                    <p>Whether it's a fundraiser, reunion, or just a meet up with friends, we have everything you need to keep the party going. Call us at <a href="tel:8172619998">817-261-9998</a> to schedule your event.</p>
                    <a href="tel:8172619998" class="btn-secondary">Give us a call&nbsp;&nbsp;<i class="fas fa-phone"></i></a>
                </div>
            </section>
        </main>
        <script src="js/app.js"></script>
    </body>

    <?php echo $footer; ?>
</html>