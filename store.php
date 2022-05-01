<?php
   include ('shared.php');
   ?>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Merch Shop - David's Barbeque</title>
        <meta name="description" content="Check out the latest David's Barbeque merch, including t-shirts, barbeque sauce, and stickers.">
        <meta name="keywords" content="barbeque, sauce, t-shirts, shirts, stickers, store, merch, shop">
        <!--link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet"-->
        <link href="css/style.css" rel="stylesheet">
        <script src="https://kit.fontawesome.com/011c7b1de4.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php echo $nav; ?>
        <main>
            <div class="merch-hero">
                <img src="img/foodTable.JPG" alt="beef brisket">
                <div class="gradient-b2t"></div>
                <h1>Take a piece of David's home</h1>
            </div>
            <div class="body-items-contaier">
                <div class = "merch-item-container">
                    <img src="img/shirt.jpg" alt="beef brisket">
                    <div class="name-cost-container">
                        <p>T-shirts</p>
                        <p>$10</p>
                    </div>
                        <p>Size:</p>
                        <select name="size">
                            <option value=""></option>
                            <option value="small">Small</option>
                            <option value="medium">Medium</option>
                            <option value="large">Large</option>
                        </select>
                        <a class="btn btn-primary order-button" onclick="changeStyleBlock()">Add to cart</a>
                </div>
                    <div class = "merch-item-container">
                    <img src="img/sauce.jpg" alt="beef brisket">
                    <div class="name-cost-container">
                        <p>Barbeque Sauce</p>
                        <p>$3-$10</p>
                    </div>
                  
                        <p>Size:</p>
                        <select name="size">
                            <option value=""></option>
                            <option value="small">Small $3</option>
                            <option value="medium">Medium $6</option>
                            <option value="large">Large $10</option>
                        </select>
                        <a class="btn btn-primary order-button" onclick="changeStyleBlock()">Add to cart</a>
                 
                </div>
                    <div class = "merch-item-container">
                    <img src="img/sticker.png" alt="beef brisket">
                    <div class="name-cost-container">
                        <p>Stickers</p>
                        <p>$1-$3</p>
                    </div>
                    
                        <p>Size:</p>
                        <select name="size">
                            <option value=""></option>
                            <option value="small">Small $1</option>
                            <option value="medium">Medium $2</option>
                            <option value="large">Large $3</option>
                        </select>
                        <a class="btn btn-primary order-button" onclick="changeStyleBlock()">Add to cart</a>
                
                </div>
            </div>
            <div class="merch-cart" id="sidebar">
                <h3>Cart:</h3>
                <div class="merch-cart-content">
                   <div class="order-body">
                      <div class="order-entry">
                         <div class="order-item">Item</div>
                         <div class="order-quanity">Amount</div>
                         <div class="order-cost">Cost</div>
                      </div>
                      <div class="order-entry">
                         <div class="order-item">Med T-shirt</div>
                         <div class="order-quanity">1</div>
                         <div class="order-cost">$10.00</div>
                      </div>
                      <div class="order-entry">
                         <div class="order-quanity">Tax:</div>
                         <div class="order-cost">$3.67</div>
                      </div>
                      <div class="order-entry">
                         <div class="order-quanity">Total:</div>
                         <div class="order-cost">$13.67</div>
                      </div>
                      <div class="order-checkout-btn">
                         <a class="btn btn-primary order-button" href="checkout.php">Checkout</a>
                         <a class="btn btn-primary order-button" onclick="changeStyleNone()">Cancel</a>
                      </div>
                   </div>
                </div>
            </div>
        </main>
    </body>

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
</html>