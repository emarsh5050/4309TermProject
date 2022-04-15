<?php


$menu = <<<OUTPUT
<div class="headernav home">
    <div class="logo-holder">
        <img class="logo" src="img/logo-white.svg" alt="David's Barbeque logo">
    </div>
    <button class="navbar-toggler" onclick="changeStyle()" type="button"><i class="fas fa-bars"></i></button>
    <ul class="navbar" id="main-navigation">
        <li class="nav-item">
            <a href="index.php" title="Home">Home</a>
        </li>
        <li class="nav-item">
            <a href="menu.php" title="Menu">Menu</a>
        </li>
        <li class="nav-item">
            <a href="catering.html" title="Catering">Catering</a>
        </li>
        <li class="nav-item">
            <a href="our-story.html" title="Our Story">Our Story</a>
        </li>
        <li class="nav-item">
            <a href="store.html" title="Store">Store</a>
        </li>
        <li class="nav-item">
            <a href="contact.html" title="Contact">Contact</a>
        </li>
        <li class="nav-order-button">
            <a class="btn-primary" href="menu.php" alt="order online">Order Online</a>
        </li>
    </ul>
</div>
OUTPUT;

$menuNoLogo = <<<OUTPUT
<div class="headernav home">
                <button class="navbar-toggler" onclick="changeStyle()" type="button"><i class="fas fa-bars"></i></button>
                <ul class="navbar" id="main-navigation">
                    <li class="nav-item">
                        <a href="index.php" title="Home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="menu.php" title="Menu">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a href="catering.html" title="Catering">Catering</a>
                    </li>
                    <li class="nav-item">
                        <a href="our-story.html" title="Our Story">Our Story</a>
                    </li>
                    <li class="nav-item">
                        <a href="store.html" title="Store">Store</a>
                    </li>
                    <li class="nav-item">
                        <a href="contact.html" title="Contact">Contact</a>
                    </li>
                    <li class="nav-order-button">
                        <a class="btn-primary" href="menu.php" alt="order online">Order Online</a>
                    </li>
                </ul>
            </div>
OUTPUT;



