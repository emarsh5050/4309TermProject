<?php
	include ('php/footer.php');
	include ('php/menu.php');
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>David's Barbeque Menu</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>

<body>
    <header>
        <?php echo $menuNoLogo; ?>
    </header>
    <div class="rect">&nbsp;</div>
    <div class="wrapper">
        <div class="menu-wrapper-order">
            <h2>Menu</h2>
            <button type="button" class="collapsible meat-by-the-lb">Meats by the pound</button>
            <div class="content">
                <div class="entry">
                <div class="menu-item"><p>Menu Item</p></div>
                <div class="cost"><p>$16.75</p></div>
                <a class="btn btn-primary order-button" onclick="changeStyleBlock()">Add to cart</a>
                </div>

                <div class="entry">
                    <div class="menu-item"><p>Menu Item</p></div>
                    <div class="cost"><p>$16.75</p></div>
                    <a class="btn btn-primary order-button" onclick="changeStyleBlock()">Add to cart</a>
                </div>
                
            </div>
            <button type="button" class="collapsible vegetables">Vegetables</button>
            <div class="content">
                <div class="entry">
                    <div class="menu-item"><p>Menu Item</p></div>
                    <div class="cost"><p>$16.75</p></div>
                    <a class="btn btn-primary order-button" onclick="changeStyleBlock()">Add to cart</a>
                </div>

                <div class="entry">
                    <div class="menu-item"><p>Menu Item</p></div>
                    <div class="cost"><p>$16.75</p></div>
                    <a class="btn btn-primary order-button" onclick="changeStyleBlock()">Add to cart</a>
                </div>
            </div>
            <button type="button" class="collapsible sides">Sides</button>
            <div class="content">
                <div class="entry">
                    <div class="menu-item"><p>Menu Item</p></div>
                    <div class="cost"><p>$16.75</p></div>
                    <a class="btn btn-primary order-button" onclick="changeStyleBlock()">Add to cart</a>
                </div>

                <div class="entry">
                    <div class="menu-item"><p>Menu Item</p></div>
                    <div class="cost"><p>$16.75</p></div>
                    <a class="btn btn-primary order-button" onclick="changeStyleBlock()">Add to cart</a>
                </div>
            </div>
        </div>

        <div class="order-sidebar" id="sidebar">
            <h3>Order:</h3>
            <div class="order-body">
                <div class="order-entry">
                    <div class="order-item">Item</div>
                    <div class="order-quanity">Amount</div>
                    <div class="order-cost">Cost</div>
                </div>
                <div class="order-entry">
                    <div class="order-item">1 lb beef</div>
                    <div class="order-quanity">1</div>
                    <div class="order-cost">$16.99</div>
                </div>
                <div class="order-entry">
                    <div class="order-quanity">Tax:</div>
                    <div class="order-cost">$3.67</div>
                </div>
                <div class="order-entry">
                    <div class="order-quanity">Total:</div>
                    <div class="order-cost">$3.67</div>
                </div>
                <div class="order-checkout-btn">
                    <a class="btn btn-primary order-button" href="checkout.html">Checkout</a>
                    <a class="btn btn-primary order-button" onclick="changeStyleNone()">Cancel</a>
                </div>
            </div>
        </div>
    </div>
    
    <script src="js/app.js"></script>
    </body>

    <footer>
        <?php echo $footer; ?>
    </footer>
</html>
