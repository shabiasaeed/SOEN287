<?php
  include "productfunctions.php";
  $id = $_GET['Id'];
  $item = null;

  $products = getProducts();

  foreach ($products as $product){
    if ($product['id'] == $id){
      $item = $product;
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta
      charset="UTF-8"
      name="viewport"
      content="width=device-width, initial-scale=1"
    />
    <link href="page-3-article.css" rel="stylesheet" />
    <link href="header-redesigned.css" rel="stylesheet" />
    <link href="footer.css" rel="stylesheet" />
    <script
      src="https://kit.fontawesome.com/3b08ae2567.js"
      crossorigin="anonymous"
    ></script>
    <title>French Baguette</title>
  </head>

  <body>
    <!----------------------------------------------------
       HEADER 
      ----------------------------------------------------->
    <header class="main-header">
      <!-- TOP-BAR -->
      <div class="shop-title-container">
        <div class="top-bar-container">
          <!-- ConUMart button/anchor -->
          <div class="home-anchor">
            <a href="index.html"><button class="shop-title">ConUmart</button></a>
          </div>

          <!-- Misc bar at the right -->
          <div class="top-bar-misc-container">
            <a href="page4.php" class="top-bar-misc-anchors"
              ><i class="fa-solid fa-clipboard-list"></i>
              <p class="top-bar-misc-anchors-content">Shopping List</p></a
            >
            <a href="login_p5.php" class="top-bar-misc-anchors"
              ><i class="fa-solid fa-user"></i>
              <p class="top-bar-misc-anchors-content">My account</p></a
            >
            <a href="#" class="top-bar-misc-anchors"><p>FR</p></a>
          </div>
        </div>
      </div>

      <!-- NAV BAR -->
      <div class="nav-container">
        <nav class="nav">
          <input type="checkbox" class="nav-checkbox" id="nav-checkbox" />
          <label class="nav-toggle" for="nav-checkbox">
            <i class="fa-solid fa-bars menu-icon"></i>
            <i class="fa-solid fa-xmark close-icon" id="close-icon"></i>
          </label>
          <ul class="nav-content">
            <li class="logo">
              <a href="index.html" class="header-anchors">My Online groceries</a>
            </li>
            <li class="nav-links-containers">
              <a href="index.html" class="header-anchors"
                ><button class="nav-links">Aisles</button></a
              >
            </li>
            <li class="nav-links-containers">
              <a href="#" class="header-anchors"
                ><button class="nav-links">Recipes</button></a
              >
            </li>
            <li class="nav-links-containers">
              <a href="#" class="header-anchors"
                ><button class="nav-links">Flyers</button></a
              >
            </li>
            <li class="nav-links-containers">
              <a href="#" class="header-anchors"
                ><button class="nav-links">Careers</button></a
              >
            </li>
          </ul>
        </nav>
      </div>

      <!-- END-BAR -->
      <div class="end-header-bar-container">
        <div class="end-header-bar">
          <!-- Search Bar -->
          <div class="search-bar">
            <input
              class="search-bar-itself"
              type="search"
              placeholder="Search products"
            />
            <button href="#" class="search-button">&#x1F50D;&#xFE0E;</button>
          </div>

          <!-- Cart button -->
          <div class="cart-button-container">
            <a href="page4.php"
              ><button class="cart-button" id="cart-button">
                <i class="fa-solid fa-cart-shopping" ></i> 
                <p id="total-cost">$0.00</p>
                <input id="cost-of-item" style="display:none" value = "0" /> 
              </button>
            </a>
          </div>
        </div>
        <hr />
      </div>
    </header>

    <!-------------------------------------------------------------
       MAIN ARTICLE 
      ------------------------------------------------------------->
    <article>
      <script type="text/javascript" src="common.js"></script>
      <div class="article-container">
        <!-- Navigation Bar -->
        <div class="article-navbar-container">
          <nav class="article-navbar">
            <a href="index.html" class="article-navbar-anchors">Home</a> /
            <a href="index.html" class="article-navbar-anchors">Aisles</a> /
            <a href="page2_BreadAndBakery.php" class="article-navbar-anchors">Bread & Bakery</a> /
            <a class="article-navbar-anchors"><?php echo $item['name'] ?></a>
          </nav>
        </div>

        <!-- left-column -->
        <div class="article-left-column">
          <!-- Product images -->
          <!-- main image -->
          <div class="article-main-img-container">
            <img
              src="<?php echo $item['image'] ?>"
              alt=""
              width="auto"
              height="auto"
              class="article-main-img"
            />
          </div>
          <!-- Alternate images (add if necessary. 3 max). Can comment out others if we have only 1 img or post 4 of the same to show that we understand...-->
          <div class="article-alternate-img-container">
            <img
              src="<?php echo $item['image'] ?>"
              alt=""
              width="80"
              height="80"
              class="article-alternate-img"
            />
            <img
              src="<?php echo $item['image'] ?>"
              alt=""
              width="80"
              height="80"
              class="article-alternate-img"
            />
            <img
              src="<?php echo $item['image'] ?>"
              alt=""
              width="80"
              height="80"
              class="article-alternate-img"
            />
          </div>
        </div>

        <!-- Right column -->
        <div class="article-right-column">
          <!-- Brand Name, Product Name, weight (Generic info) -->
          <div class="product-generic-info">
            <p class="product-brand"><?php echo $item['brand'] ?></p>
            <p class="product-name"><?php echo $item['name'] ?></p>
            <p class="product-weight"><?php echo $item['weight'] ?></p>
          </div>

          <!-- Price on sale per quantity, regular price, price per weight (price info) -->
          <div class="price-info">
            <?php if ($item['saleQuantity'] != ""){
              echo ' <p class="product-special-price">'.$item['saleQuantity'].'/'.$item['salePrice'].'<p>';
            } ?>
            <p class="product-regular-price"><?php echo $item['price'] ?> ea.</p>
            <p><?php echo $item['pricePerWeight'] ?></p>
          </div>

          <!-- Sale Validity -->
          <div class="product-sale-date">
            <p><?php echo $item['offerExpiry'] ?></p>
          </div>

          <!-- Variety anchor -->
          <div>
            <a href="page2_BreadAndBakery.php" class="other-product-variety"
              >Other Varieties <i class="fa-solid fa-angle-right"></i
            ></a>
          </div>

          <!-- Add to cart buttons -->
          <div class="article-add-to-cart-container">
            <div class="article-add-to-cart-quantity-container">
              <button class="article-quantity-buttons minus-quantity-button">
                <i class="fa-solid fa-minus"></i></i>
              </button>


              <input
                aria-label="quantity"
                type="number"
                value="1"
                class="article-quantity-input"
                min="1"
                max="20"
                id="item-quantity-chosen"
              />

              <button class="article-quantity-buttons plus-quantity-button">
                <i class="fa-solid fa-plus"></i>
              </button>
            </div>


<!-------------------------------------------------ADD TO CART BLACK BUTTON ------------------------>
            <div class="article-add-to-cart-button-container">
              <button id="addToCartButton" class="article-add-to-cart-button"><i class="fa-solid fa-cart-shopping"></i> Add</button>
            </div>
          </div>

<!------------------------------------------------------------------------------------------>

          <!-- Product description buttons (description and ingredient) -->
          <div>
          <div class="product-description-button-container">
            <input type="checkbox" class="product-description-checkbox" id="product-description-checkbox"/>
            <label class="product-description-toggle" for="product-description-checkbox">Product description
              <i class="fa-solid fa-angle-down description-down-icon"></i>
              <i class="fa-solid fa-angle-up description-up-icon" id="description-up-icon"></i>
            </label>
            <p class="product-description-content">
              <?php echo $item['description'] ?>
            </p>
            <p class="product-description-content">Product Number: 100000<?php echo $item['id'] ?></p>
          </div>

          <div class="product-ingredient-button-container">
            <input type="checkbox" class="product-ingredient-checkbox" id="product-ingredient-checkbox"/>
            <label class="product-ingredient-toggle" for="product-ingredient-checkbox">ingredients
              <i class="fa-solid fa-angle-down description-down-icon"></i>
              <i class="fa-solid fa-angle-up description-up-icon" id="description-up-icon"></i>
            </label>
            <p class="product-ingredient-content">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit
              expedita aspernatur ratione aperiam vero consectetur non,
              corrupti ullam fugiat illum in nesciunt voluptates? Soluta
              veniam veritatis impedit. Dolorum, repudiandae alias?
            </p>
          </div>
        </div>

          <!-- Shops commitment msg -->
          <p class="commitment-msg">
            We strive to always offer you the most up-to-date product
            information. However, manufacturers may change this information at
            any time. We recommend that you read labels and packaging before
            consuming any product to ensure that you have the updated
            information regarding the ingredients, the nutritional values, as
            well as any allergy warnings.
          </p>
        </div>

        <!-- Price subject to change message -->
        <div class="article-price-subject">
          <p>
            Prices subject to change, depending on your order pickup or delivery
            date, current promotions, and location.
          </p>
        </div>
      </div>

      <script>
        //==============================================PLUS AND MINUS BUTTONS====================================================
        var quantityValue = document.getElementById("item-quantity-chosen").value;

        //--------------------------------------PLUS BUTTON---------------------------------------------
        document.querySelector(".plus-quantity-button").addEventListener("click", function () {  
          quantityValue++;
          document.getElementById("item-quantity-chosen").value = quantityValue;
        });

        //--------------------------------------MINUS BUTTON--------------------------------------------- 
        document.querySelector(".minus-quantity-button").addEventListener("click", function () {   
          if (quantityValue > 1){
            quantityValue--;
          document.getElementById("item-quantity-chosen").value = quantityValue;
          }
        });
        //============================================CALCULATOR======================================================================
        var totalPrice = parseFloat(document.getElementById("cost-of-item").value);
        var itemQuantityPurchased = 0;
        var displayedPrice = document.getElementById("total-cost").textContent;

        function cost(){
          itemQuantityPurchased += parseInt(quantityValue);
          <?php if ($item['salePrice'] == ""){
            echo 'var totalPrice = itemQuantityPurchased*'.doubleval(substr($item['price'], 1)).';';;
          } else {
            echo 'var totalPrice = (parseInt(itemQuantityPurchased / 2) * '.doubleval(substr($item['salePrice'], 1)).' + (itemQuantityPurchased % 2) * '.doubleval(substr($item['price'], 1)).');';
          }
          ?>
          sessionStorage.setItem("previous-total-price<?php echo$item['id'] ?>", totalPrice);
          displayPrice();
        }

        //=======================================FUNCTIONAL ADD TO CART BUTTON======================================================
        document.getElementById("addToCartButton").addEventListener("click", function () {
          cost();
        });

        //=======================================DATA STORAGE=======================================================================
        //STORE ALL TYPES OF DATA NEEDED
        window.onbeforeunload = function saveChanges() {
          if (quantityValue >= 1)
            sessionStorage.setItem("previous-quantity-input<?php echo$item['id'] ?>", quantityValue);
            if (itemQuantityPurchased > 0)
            sessionStorage.setItem("previous-quantity-already-in-cart<?php echo$item['id'] ?>", itemQuantityPurchased);
        }

        //KEEPS VALUES IF THE PAGE IS REFRESHED
        window.onload = function applyChanges() {
          if (previousQuantityInput >= 1){
            document.getElementById("item-quantity-chosen").value = previousQuantityInput;
          } else {
            document.getElementById("item-quantity-chosen").value = 1;
          }
          quantityValue = document.getElementById("item-quantity-chosen").value;
          
          if (previousTotalPrice > 0){
            document.getElementById("cost-of-item").value = previousTotalPrice;
          } else {
            document.getElementById("cost-of-item").value = 0;
          }
          totalPrice = parseFloat(document.getElementById("cost-of-item").value);
          
          if (previousItemQuantityPurchased > 0){
          itemQuantityPurchased = previousItemQuantityPurchased;
          } else {
          itemQuantityPurchased = 0;
          }
          displayPrice();
        }

        var previousQuantityInput = parseInt(sessionStorage.getItem("previous-quantity-input<?php echo$item['id'] ?>"));
        var previousTotalPrice = parseFloat(sessionStorage.getItem("previous-total-price<?php echo$item['id'] ?>"));
        console.log (previousTotalPrice + " previous total price ");
        var previousItemQuantityPurchased = parseInt(sessionStorage.getItem("previous-quantity-already-in-cart<?php echo$item['id'] ?>"));



      </script>
            
    </article>






    <footer>
      <div class="footer-container">
        <div class="footer-navigation-bar">
          <div class="footer-navigation-bar-content">
            <div class="footer-navigation-bar-buttons">
              <button class="nav-left-button">Fr</button>
              <button class="nav-left-button">FAQ</button>
              <button class="nav-left-button">Find a store</button>
              <button class="nav-left-button">Help center</button>
            </div>
            <div class="social-media">
              <button class="social-media-buttons fa fa-facebook"></button>
              <button class="social-media-buttons fa fa-instagram"></button>
              <button class="social-media-buttons fa fa-youtube"></button>
            </div>
          </div>
        </div>
    
        <div class="footer-grey-section">
          <div class="footer-content-container">
            <div class="footer-grey-section-first-row">
              <div class="footer---my-account">
                <h3 class="footer-header-category">My Account</h3>
                <a href="#" class="footer-anchor">Online Grocery</a>
                <a href="#" class="footer-anchor">Flyer</a>
                <a href="#" class="footer-anchor">Coupons</a>
                <a href="#" class="footer-anchor">Recipes and Occasions</a>
                <a href="#" class="footer-anchor">My Account</a>
                <a href="#" class="footer-anchor">Just For Me</a>
                <a href="#" class="footer-anchor">Online Grocery Services</a>
                <a href="#" class="footer-anchor">Curbside Pickup</a>
              </div>
    
              <div class="footer---what-we-offer">
                <h3 class="footer-header-category">What We Offer</h3>
                <a href="#" class="footer-anchor">Online Grocery</a>
                <a href="#" class="footer-anchor">Our Private Brands</a>
                <a href="#" class="footer-anchor">Our Partners</a>
                <a href="#" class="footer-anchor">Services</a>
                <a href="#" class="footer-anchor">Gift Card</a>
                <a href="#" class="footer-anchor">Contests</a>
              </div>
    
              <div class="footer---get-to-know-us">
                <h3 class="footer-header-category">Get to Know Us</h3>
                <a href="#" class="footer-anchor">Corporate Site</a>
                <a href="#" class="footer-anchor">Supplier Relations</a>
                <a href="#" class="footer-anchor">About Us</a>
                <a href="#" class="footer-anchor">Corporate Responsibility</a>
                <a href="#" class="footer-anchor">Careers</a>
              </div>
    
              <div class="footer---images-column">
                <button class="footer-promotion-button">
                  <img
                    src="img/footer-img.jpg"
                    alt="A photo of promotion"
                    height="auto"
                    width="auto"
                    class="footer-promotion-img"
                  />
                </button>
              </div>
            </div>
            <div class="footer---newsletter">
              <h3 class="footer-header-category">Newsletter</h3>
              <p class="newsletter-survey-text">
                Sign up to shopping.ca to receive offers and exclusive sales!
                <a href="#" class="footer-anchor-underlined">Learn more</a>
              </p>
            </div>
    
            <div class="footer---survey">
              <h3 class="footer-header-category">
                We care about you! Take our survey
              </h3>
              <p class="newsletter-survey-text">
                Tell us how we're doing. Take a
                <a href="#" class="footer-anchor-underlined">Survey.</a>
              </p>
            </div>
          </div>
        </div>
    
        <div class="footer-copyright">
          <div class="ownership-laws">
            <nav class="conditions">
              <div class="conditions-anchor">
                <a href="#" class="copyright-anchors">Condition of Use</a>
                <a href="#" class="copyright-anchors">Privacy policy</a>
              </div>
            </nav>
            <p class="copyright">&copy; conUmart Inc 2022</p>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>
