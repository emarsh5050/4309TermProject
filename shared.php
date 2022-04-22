<?php

if (isset($_POST["email"]) && !empty($_POST["email"])){
		setcookie("booleanSubmit", $_POST["email"], time() + 14400);
		$_COOKIE['booleanSubmit'] = $_POST["email"];
	
	} 
	elseif (isset($_POST["phoneNumber"]) && !empty($_POST["phoneNumber"])){
		setcookie("booleanSubmit", $_POST["phoneNumber"], time() + 14400);
		$_COOKIE['booleanSubmit'] = $_POST["phoneNumber"];
	
	}
	else if (isset($_POST["reset"])){
		setcookie("booleanSubmit", "", time() - 3600);
		$_COOKIE['booleanSubmit'] = "";
	}

	if (isset($_COOKIE["booleanSubmit"]) && !empty($_COOKIE["booleanSubmit"])){
        $Newsletter = 
        <<<OUTPUT
        <p class="h3">Thanks for signing up for our updates!<p><form method="post">
        <form>
            <input type="submit" name="reset" class="btn-primary" value="Sign Up Again" />
        </form>
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

$navHome = "<header>
    <div class='headernav home'>
        <a href='index.php' title='Home'><img class='nav-logo-mobile' src='img/logo-white.png' alt='David's Barbeque logo'></a>
        <a href='index.php' title='Home'><img class='nav-logo-desktop' src='img/logo-flame.svg' alt='David's Barbeque icon'></a>
        <button class='navbar-open' id='navbar-open' type='button'><i class='fas fa-bars'></i></button>
        <div class='navbar' id='main-navigation'>
            <a class='nav-item' href='menu.php' title='Menu'>Menu</a>
            <a class='nav-item' href='catering.html' title='Catering'>Catering</a>
            <a class='nav-item' href='our-story.html' title='Our Story'>Our Story</a>
            <a class='nav-item' href='store.html' title='Store'>Store</a>
            <a class='nav-item' href='contact.html' title='Contact'>Contact</a>
            <a class='btn-primary nav-order-button' href='menu.php' alt='order online'>Order Online</a>
            <i class='fas fa-times navbar-close' id='navbar-close'></i>
        </div>
    </div>
</header>";

$nav = "<header>
    <div class='headernav'>
        <a href='index.php' title='Home'><img class='nav-logo-mobile' src='img/logo-white.png' alt='David's Barbeque logo'></a>
        <a href='index.php' title='Home'><img class='nav-logo-desktop' src='img/logo-flame.svg' alt='David's Barbeque icon'></a>
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

$footer = <<<OUTPUT
<footer>
    <div class="prefooter-container">
        <h3>Come visit us!</h3>
        <div class="prefooter-location">
            <i class="fas fa-map-marker"></i>
            <p>2224 W Park Row Dr<br>Pantego, TX 76013</p>
        </div>
        <p>Tues - Sat: 11 a.m. - 8 p.m.</p>
        <a href="menu.html" alt="Order online" class="btn-primary">Order online</a>
    </div>

    <div class="main-footer-container">
        <h4>Connect</h4>
        <p class="social-icons"><a href="https://www.facebook.com/profile.php?id=115719185124026" alt="David's Barbeque Facebook"><i class="fab fa-facebook"></i></a><a href="https://twitter.com/" alt="Twitter"><i class="fab fa-twitter"></i></a><a href="https://www.instagram.com/explore/locations/4724175/united-states/pantego-texas/davids-barbecue/" alt="Instagram"><i class="fab fa-instagram"></i></a></p>

        <h4>Quick Links</h4>
        <a href="menu.html" alt="Menu">Menu</a>
        <a href="catering.html" alt="Catering">Catering</a>
        <a href="our-story.html" alt="Our Story">Our Story</a>
        <a href="store.html" alt="Store">Store</a>
        <a href="contact.html" alt="Contact">Contact</a>
        <a href="privacy-policy.html" alt="Privacy Policy">Privacy Policy</a>

        <p class="footer-copyright">&copy; David’s Barbeque 2022</p>
    </div>
</footer>
OUTPUT;

$coupon0 = <<<OUTPUT
        <div class="coupon-holder">
            <p>Try our vegan products!</p>
            <img src="img/button-block-our-story.jpg" class="coupon-image" alt="beef brisket">
        </div>
OUTPUT;

$coupon1 = <<<OUTPUT
        <div class="coupon-holder">
            <p>Buy a shirt and $2 go to the Arlington historical society with code: share10<</p>
            <img src="img/button-block-our-story.jpg" class="coupon-image" alt="beef brisket">
        </div>
OUTPUT;

if (isset($_COOKIE["pCode"]) && !empty($_COOKIE["pCode"])){
    if($_COOKIE["pCode"] === "ahsFan"){
    $coupon = $coupon1;}
    else{
    $coupon = $coupon0;
    }
} else{
    $coupon = $coupon0;
}
?>