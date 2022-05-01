<?php
   include ('shared.php');
   ?>
<!doctype html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Checkout - David's Barbeque</title>
      <!--link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet"-->
      <link href="css/style.css" rel="stylesheet">
      <script src="https://kit.fontawesome.com/011c7b1de4.js" crossorigin="anonymous"></script>
   </head>
   <body>
      <?php echo $nav; ?>
      <main>
         <div class="wrapperCHK">
             <div class="order-sidebar2" id="sidebar">
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
                         <a class="btn btn-primary order-button" href="index.php">Cancel</a>
                      </div>
                   </div>
                </div>
            <form action= "review.php" method="post">
                <p>*Required Field</p>
            	<fieldset>
            		<legend>Payment Information</legend>
            		<div class="form-group">
            			First name* <input class="form-control" id="first-name" name="firstName" type="text">
            		</div>
            		<div class="form-group">
            			Middle Initial <input class="form-control" maxlength="1" name="middleInit" type="text">
            		</div>
            		<div class="form-group">
            			Last name* <input class="form-control" name="lastName" type="text">
            		</div>
            		<div class="form-group">
            			Email* <input class="form-control" id="email" name="email" type="text">
            		</div>
            		<div class="form-group">
            			Phone Number <input class="form-control" name="phoneNumber" type="text">
            		</div>
            		<div class="form-group">
            			Promo Code <input class="form-control" name="promoCode" type="text">
            		</div>
            	</fieldset>
            	<fieldset>
            		<legend>Credit Card Information</legend>
            			<div class="form-group">
            				Card Number* <input class="form-control" name="cardNumber" type="text">
            			</div>
            			<div class="form-group">
            				Exp. Date* <input class="form-control" name="expDate" type="text">
            			</div>
            			<div class="form-group">
            				CCV Number* <input class="form-control" maxlength="3" name="ccv" type="text">
            			</div>
                		<div class="form-group">
                			Notes <input class="form-control" id="notes" name="notes" type="text">
                		</div>
            	</fieldset><button class="btn btn-primary" type="submit" name="submit">Place Order</button> <button class="btn btn-primary" type="reset">Reset Order</button>
            </form>
         </div>
      </main>
      <footer><?php echo $footer; ?></footer>
      <script src="js/app.js"></script>
   </body>
</html>