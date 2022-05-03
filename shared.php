<?php

//check for submissions on email or phone number or see if reset button has been clicked

if (isset($_POST["email"]) && !empty($_POST["email"])){
		setcookie("booleanSubmit", $_POST["email"], time() + (86400 * 30));
		$_COOKIE['booleanSubmit'] = $_POST["email"];
	
	} 
	elseif (isset($_POST["phoneNumber"]) && !empty($_POST["phoneNumber"])){
		setcookie("booleanSubmit", $_POST["phoneNumber"], time() + (86400 * 30));
		$_COOKIE['booleanSubmit'] = $_POST["phoneNumber"];
	
	}
	else if (isset($_POST["reset"])){
		setcookie("booleanSubmit", "", time() - (86400 * 30));
		$_COOKIE['booleanSubmit'] = "";
	}

//change susbscribe element based on cookie 

	if (isset($_COOKIE["booleanSubmit"]) && !empty($_COOKIE["booleanSubmit"])){
        $Newsletter = 
        <<<OUTPUT
        <div class="email-newsletter-container">
        <h3>Thanks for signing up for our updates!<h3><form method="post">
        <form>
            <input type="submit" name="reset" class="btn-secondary" value="Sign up again" />
        </form>
        </div>
OUTPUT;
	} else {
        $Newsletter = <<<OUTPUT
            <section>
                <div class="email-newsletter-container">
                    <h2>Keep up with David's!</h2>
                    <p>Stay all up in our grill for exclusive offers, discounts, menu updates, and more.</p>
                    <form action="index.php" method="post">
                        <label for="email">Email address</label><input type="text" id="email" name="email" placeholder="Email address">
                        <label for="phoneNumber">Phone number</label><input type="text" id="phoneNumber" name="phoneNumber" placeholder="Phone number">
                        <input type="submit" name="newsletter_signup" class="btn-secondary" value="Sign Up">
                    </form>
                </div>
            </section>
OUTPUT;
	}
	
//make nav options 

$navHome = "<header>
    <div class = 'disclaimer'>
    <p>This page is produced as a class project</p>
    </div>
    <div class='headernav home'>
        <a id='nav-logo-link' class='nav-item' href='index.php' title='Home'><img class='nav-logo' src='img/logo-flame.svg' alt='David's Barbeque icon'>DAVID'S</a>
        <button class='navbar-open' id='navbar-open' type='button'><i class='fas fa-bars'></i></button>
        <div class='navbar' id='main-navigation'>
            <a class='nav-item' href='menu.php' title='Menu'>Menu</a>
            <a class='nav-item' href='catering.php' title='Catering'>Catering</a>
            <a class='nav-item' href='our-story.php' title='Our Story'>Our Story</a>
            <a class='nav-item' href='store.php' title='Store'>Store</a>
            <a class='nav-item' href='contact.php' title='Contact'>Contact</a>
            <a class='btn-primary nav-order-button' href='menu.php' alt='order online'>Order online</a>
            <i class='fas fa-times navbar-close' id='navbar-close'></i>
        </div>
    </div>
</header>";

$nav = "<header>
<div class = 'disclaimer'>
<p>This page is produced as a class project</p>
</div>
<div class='headernav'>
    <a id='nav-logo-link' class='nav-item' href='index.php' title='Home'><img class='nav-logo' src='img/logo-flame.svg' alt='David's Barbeque icon'>DAVID'S</a>
    <button class='navbar-open' id='navbar-open' type='button'><i class='fas fa-bars'></i></button>
    <div class='navbar' id='main-navigation'>
        <a class='nav-item' href='menu.php' title='Menu'>Menu</a>
        <a class='nav-item' href='catering.php' title='Catering'>Catering</a>
        <a class='nav-item' href='our-story.php' title='Our Story'>Our Story</a>
        <a class='nav-item' href='store.php' title='Store'>Store</a>
        <a class='nav-item' href='contact.php' title='Contact'>Contact</a>
        <a class='btn-primary nav-order-button' href='menu.php' alt='order online'>Order Online</a>
        <i class='fas fa-times navbar-close' id='navbar-close'></i>
    </div>
</div>
</header>";

//make footer 

$footer = <<<OUTPUT
<footer>
    <div class="prefooter-container">
        <h3>Come visit us!</h3>
        <div class="prefooter-location">
            <i class="fas fa-map-marker"></i>
            <p>2224 W Park Row Dr<br>Pantego, TX 76013</p>
        </div>
        <p>Tues - Sat: 11 a.m. - 8 p.m.</p>
        <a href="menu.php" alt="Order online" class="btn-primary">Order online</a>
    </div>
    <div class="main-footer-container">
        <h4>Connect</h4>
        <p class="social-icons"><a href="https://www.facebook.com/profile.php?id=115719185124026" alt="David's Barbeque Facebook"><i class="fab fa-facebook"></i></a><a href="https://twitter.com/" alt="Twitter"><i class="fab fa-twitter"></i></a><a href="https://www.instagram.com/explore/locations/4724175/united-states/pantego-texas/davids-barbecue/" alt="Instagram"><i class="fab fa-instagram"></i></a></p>
        <p class="footer-phone"><a href="tel:8172619998"><i class="fas fa-phone"></i>&nbsp;&nbsp;817-261-9998</a></p>
        <h4>Quick Links</h4>
        <a href="menu.php" alt="Menu">Menu</a>
        <a href="catering.php" alt="Catering">Catering</a>
        <a href="our-story.php" alt="Our Story">Our Story</a>
        <a href="store.php" alt="Store">Store</a>
        <a href="contact.php" alt="Contact">Contact</a>
        <a href="privacy-policy.php" alt="Privacy Policy">Privacy Policy</a>

        <p class="footer-copyright">&copy; David’s Barbeque 
OUTPUT;

$footer.= date("Y"); 

$footer.= "</p>
    </div>
</footer>";

//coupon options

$coupon0 = <<<OUTPUT
        <div class="coupon-holder">
            <p>Try our vegan products!</p>
            <div class="overlay"></div>
            <img src="img/okra.jpg" class="coupon-image" alt="beef brisket">
        </div>
OUTPUT;

$coupon1 = <<<OUTPUT
        <div class="coupon-holder">
            <p>Buy a shirt and $2 go to the Arlington historical society with code: share10</p>
            <div class="overlay"></div>
            <img src="img/hands.jpg" class="coupon-image" alt="beef brisket">
        </div>
OUTPUT;

$coupon2 = <<<OUTPUT
        <div class="coupon-holder">
            <p>Get 10% off 2 pounds of barbeque with code: lbs10</p>
            <div class="overlay"></div>
            <img src="img/sausage.jpg" class="coupon-image" alt="beef brisket">
        </div>
OUTPUT;

//create homapge elements 

$threeBlockHighlight= <<<OUTPUT
            <section>
                <div class="btn-block-container">
                    <a class="btn-block" href="menu.php" alt="Menu">
                        <img src="img/button-block-menu.jpg" alt="beef brisket">
                        <div class="gradient-b2t"></div>
                        <p>See our menu</p>
                    </a>
                    <a class="btn-block" href="catering.php" alt="Menu">
                        <img src="img/button-block-catering.jpg" alt="beef brisket">
                        <div class="gradient-b2t"></div>
                        <p>Order catering</p>
                    </a>
                    <a class="btn-block" href="our-story.php" alt="Menu">
                        <img src="img/button-block-our-story.jpg" alt="beef brisket">
                        <div class="gradient-b2t"></div>
                        <p>Get to know us</p>
                    </a>
                </div>
            </section>
OUTPUT;

$calenderElement= <<<OUTPUT
            <section>
                <h2>Join Our Community</h2>
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
                    <a class="btn-secondary" href="calendar.php" alt="community calendar">View all events</a>
                </div>
            </section>
OUTPUT;
$merchElement= <<<OUTPUT
            <section class="section-full-width">
                <div class="feature-container">
                    <img src="img/merch-feature.jpg" alt="barbeque sauce">
                    <div class="gradient-t2b"></div>
                    <h3>Barbeque sauce, accessories, and t-shirts for the whole family.</h3>
                    <a class="btn-primary" href="store.php" alt="Store">Shop merch</a>
                </div>
            </section>
OUTPUT;

//set generic values for hompage and coupon 
$homepage = $threeBlockHighlight; 
$homepage .= $calenderElement;
$homepage .= $merchElement;
$coupon = $coupon0;

//check for specific promo code to change value
if (isset($_COOKIE["pCode"]) && !empty($_COOKIE["pCode"])){
    if($_COOKIE["pCode"] === "ahsfan"){
    $coupon = $coupon1;
    $homepage = $calenderElement;
    $homepage .= $threeBlockHighlight; 
    $homepage .= $merchElement;  
    }elseif($_COOKIE["pCode"] === "school10"){
    $coupon = $coupon2; 
    $homepage = $calenderElement;
    $homepage .= $threeBlockHighlight; 
    $homepage .= $merchElement; 
    }
} 

$PublicIP = $_SERVER['REMOTE_ADDR'];
//Uses ipinfo.io to get the location of the IP Address, you can use another site but it will probably have a different implementation
$json     = file_get_contents("http://ipinfo.io/$PublicIP/geo");
//Breaks down the JSON object into an array
$json     = json_decode($json, true);
//This variable is the visitor's region
$region   = $json['region'];

if($region != "Texas"){
    $homepage = $merchElement;
    $homepage .= $threeBlockHighlight; 
    $homepage .= $calenderElement; 
}

?>
