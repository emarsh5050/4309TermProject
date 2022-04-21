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
                         <a class="btn btn-primary order-button" onclick="changeStyleNone()">Cancel</a>
                      </div>
                   </div>
                </div>
            <form>
            	<fieldset>
            		<legend>Payment Information</legend>
            		<div class="form-group">
            			First name <input class="form-control" id="first-name" name="first-name" type="text">
            		</div>
            		<div class="form-group">
            			Middle Initial <input class="form-control" id="middle-init" maxlength="1" name="middle-init" type="text">
            		</div>
            		<div class="form-group">
            			Last name <input class="form-control" id="last-name" name="last-name" type="text">
            		</div>
            		<div class="form-group">
            			Email <input class="form-control" id="email" name="email" type="text">
            		</div>
            		<div class="form-group">
            			Phone Number <input class="form-control" id="phone-number" name="phone-number" type="text">
            		</div>
            		<div class="form-group">
            			Promo Code <input class="form-control" id="promo-code" name="promo-code" type="text">
            		</div>
            	</fieldset>
            	<fieldset>
            		<legend>Credit Card Information</legend>
            			<div class="form-group">
            				Card Number <input class="form-control" id="card_number" name="card_number" type="text">
            			</div>
            			<div class="form-group">
            				Exp. Date <input class="form-control" id="exp_date" name="exp_date" type="text">
            			</div>
            			<div class="form-group">
            				CCV Number <input class="form-control" id="last-name" maxlength="3" name="last-name" type="text">
            			</div>
                		<div class="form-group">
                			Notes <input class="form-control" id="notes" name="notes" type="text">
                		</div>
            	</fieldset><button class="btn btn-primary" type="submit">Place Order</button> <button class="btn btn-primary" type="reset">Reset Order</button>
            </form>
         </div>
      </main>
      <footer><?php echo $footer; ?></footer>
      <script src="js/app.js"></script>
   </body>
</html>