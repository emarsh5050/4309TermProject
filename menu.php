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
        <div class="coupon-holder">
            <p>Get 10% off with code: share 10</p>
            <img src="img/button-block-our-story.jpg" class="coupon-image" alt="beef brisket">
        </div>
        <div class="overlay"></div>
         <div class="wrapper">
            <div class="menu-wrapper-order">
               <h2>Menu</h2>
               <button type="button" class="collapsible meat-by-the-lb">Meats by the pound</button>
               <div class="content">
                  <div class="entry-container">
                     <div class="entry">
                        <div class="menu-item">
                           <p>Beef Brisket</p>
                        </div>
                        <div class="cost">
                           <p>$18.99</p>
                        </div>
                        <a class="btn btn-primary order-button" onclick="changeStyleBlock()">Add to cart</a>
                     </div>
                     <div class="entry">
                        <div class="menu-item">
                           <p>Pork Ribs</p>
                        </div>
                        <div class="cost">
                           <p>$15.99</p>
                        </div>
                        <a class="btn btn-primary order-button" onclick="changeStyleBlock()">Add to cart</a>
                     </div>
                     <div class="entry">
                        <div class="menu-item">
                           <p>Turkey Breast</p>
                        </div>
                        <div class="cost">
                           <p>$12.99</p>
                        </div>
                        <a class="btn btn-primary order-button" onclick="changeStyleBlock()">Add to cart</a>
                     </div>
                     <div class="entry">
                        <div class="menu-item">
                           <p>Vegan Jackfruit Pulled Pork</p>
                        </div>
                        <div class="cost">
                           <p>$12.99</p>
                        </div>
                        <a class="btn btn-primary order-button" onclick="changeStyleBlock()">Add to cart</a>
                     </div>
                     <div class="entry">
                        <div class="menu-item">
                           <p>Ham</p>
                        </div>
                        <div class="cost">
                           <p>$12.99</p>
                        </div>
                        <a class="btn btn-primary order-button" onclick="changeStyleBlock()">Add to cart</a>
                     </div>
                     <div class="entry">
                        <div class="menu-item">
                           <p>Sausage</p>
                        </div>
                        <div class="cost">
                           <p>$12.99</p>
                        </div>
                        <a class="btn btn-primary order-button" onclick="changeStyleBlock()">Add to cart</a>
                     </div>
                  </div>
               </div>
               <button type="button" class="collapsible vegetables">Vegetables</button>
               <div class="content">
                  <div class="entry-container">
                     <div class="entry">
                        <div class="menu-item">
                           <p>Barbeque Beans</p>
                        </div>
                        <div class="cost">
                           <p>$2.25</p>
                        </div>
                        <a class="btn btn-primary order-button" onclick="changeStyleBlock()">Add to cart</a>
                     </div>
                     <div class="entry">
                        <div class="menu-item">
                           <p>Coleslaw</p>
                        </div>
                        <div class="cost">
                           <p>$2.25</p>
                        </div>
                        <a class="btn btn-primary order-button" onclick="changeStyleBlock()">Add to cart</a>
                     </div>
                     <div class="entry">
                        <div class="menu-item">
                           <p>Potato Salad</p>
                        </div>
                        <div class="cost">
                           <p>$2.25</p>
                        </div>
                        <a class="btn btn-primary order-button" onclick="changeStyleBlock()">Add to cart</a>
                     </div>
                     <div class="entry">
                        <div class="menu-item">
                           <p>French Fries</p>
                        </div>
                        <div class="cost">
                           <p>$2.25</p>
                        </div>
                        <a class="btn btn-primary order-button" onclick="changeStyleBlock()">Add to cart</a>
                     </div>
                  </div>
               </div>
               <button type="button" class="collapsible sides">Sides</button>
               <div class="content">
                  <div class="entry-container">
                     <div class="entry">
                        <div class="menu-item">
                           <p>Jalapeño Peppers </p>
                        </div>
                        <div class="cost">
                           <p>$0.10</p>
                        </div>
                        <a class="btn btn-primary order-button" onclick="changeStyleBlock()">Add to cart</a>
                     </div>
                     <div class="entry">
                        <div class="menu-item">
                           <p>Texas Toast / Extra Bun</p>
                        </div>
                        <div class="cost">
                           <p>$0.30</p>
                        </div>
                        <a class="btn btn-primary order-button" onclick="changeStyleBlock()">Add to cart</a>
                     </div>
                     <div class="entry">
                        <div class="menu-item">
                           <p>Banana Pudding </p>
                        </div>
                        <div class="cost">
                           <p>$1.29</p>
                        </div>
                        <a class="btn btn-primary order-button" onclick="changeStyleBlock()">Add to cart</a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="order-sidebar">
                <h3>Order:</h3>
                <div class="order-sidebar-content" id="sidebar">
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
                         <a class="btn btn-primary order-button" href="checkout.php">Checkout</a>
                         <a class="btn btn-primary order-button" onclick="changeStyleNone()">Cancel</a>
                      </div>
                   </div>
                </div>
            </div>
         </div>
      </main>
      <footer><?php echo $footer; ?></footer>
      <script src="js/app.js"></script>
   </body>
</html>