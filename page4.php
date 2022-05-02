<?php
    include "productfunctions.php";
    $products=getProducts();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="page4.css" />
    <link rel="stylesheet" href="header.css" />
    <link rel="stylesheet" href="footer.css" />
    <!-- <script src="./page4.js" async></script> -->
    <script src="./page4.js" async></script>
  </head>

  <body>
    <header class="main-header">
      <!-- TOP-BAR -->
      <div class="shop-title-container">
        <div class="top-bar-container">
          <!-- ConUMart button/anchor -->
          <div class="home-anchor">
            <a href="index.html"
              ><button class="shop-title">ConUmart</button></a
            >
          </div>

          <!-- Misc bar at the right -->
          <div class="top-bar-misc-container">
            <a href="page4.html" class="top-bar-misc-anchors"
              ><i class="fa-solid fa-clipboard-list"></i>
              <p class="top-bar-misc-anchors-content">Shopping List</p></a
            >
            <a href="login_p5.html" class="top-bar-misc-anchors"
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
              <a href="index.html" class="header-anchors"
                >My Online groceries</a
              >
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
              type="text"
              placeholder="Search products"
            />
            <button href="#" class="search-button">&#x1F50D;&#xFE0E;</button>
          </div>

          <!-- Cart button -->
          <div class="cart-button-container">
            <a href="page4.html"
              ><button class="cart-button">
                <p id="price-icon">$0.00</p>
              </button>
            </a>
          </div>
        </div>
        <hr />
      </div>
    </header>

    <!-- --------------------------------------------------BEGINNING MAIN CODE-------------------------------------------------- -->

    <main>
    <script>
      
      var total0 = parseFloat(sessionStorage.getItem("previous-total-price0"));
      var quantity0 = parseInt(sessionStorage.getItem("previous-quantity-already-in-cart0"));
      var total1 = parseFloat(sessionStorage.getItem("previous-total-price1"));
      var quantity1 = parseInt(sessionStorage.getItem("previous-quantity-already-in-cart1"));
      var total2 = parseFloat(sessionStorage.getItem("previous-total-price2"));
      var quantity2 = parseInt(sessionStorage.getItem("previous-quantity-already-in-cart2"));
      var total3 = parseFloat(sessionStorage.getItem("previous-total-price3"));
      var quantity3 = parseInt(sessionStorage.getItem("previous-quantity-already-in-cart3"));
      var total4 = parseFloat(sessionStorage.getItem("previous-total-price4"));
      var quantity4 = parseInt(sessionStorage.getItem("previous-quantity-already-in-cart4"));
      var total5 = parseFloat(sessionStorage.getItem("previous-total-price5"));
      var quantity5 = parseInt(sessionStorage.getItem("previous-quantity-already-in-cart5"));
      var total6 = parseFloat(sessionStorage.getItem("previous-total-price6"));
      var quantity6 = parseInt(sessionStorage.getItem("previous-quantity-already-in-cart6"));
      var total7 = parseFloat(sessionStorage.getItem("previous-total-price7"));
      var quantity7 = parseInt(sessionStorage.getItem("previous-quantity-already-in-cart7"));
      var total8 = parseFloat(sessionStorage.getItem("previous-total-price8"));
      var quantity8 = parseInt(sessionStorage.getItem("previous-quantity-already-in-cart8"));
      var total9 = parseFloat(sessionStorage.getItem("previous-total-price9"));
      var quantity9 = parseInt(sessionStorage.getItem("previous-quantity-already-in-cart9"));
      var total10 = parseFloat(sessionStorage.getItem("previous-total-price10"));
      var quantity10 = parseInt(sessionStorage.getItem("previous-quantity-already-in-cart10"));
      var total11 = parseFloat(sessionStorage.getItem("previous-total-price11"));
      var quantity11 = parseInt(sessionStorage.getItem("previous-quantity-already-in-cart11"));
      var total12 = parseFloat(sessionStorage.getItem("previous-total-price12"));
      var quantity12 = parseInt(sessionStorage.getItem("previous-quantity-already-in-cart12"));
      var total13 = parseFloat(sessionStorage.getItem("previous-total-price13"));
      var quantity13 = parseInt(sessionStorage.getItem("previous-quantity-already-in-cart13"));
      var total14 = parseFloat(sessionStorage.getItem("previous-total-price14"));
      var quantity14 = parseInt(sessionStorage.getItem("previous-quantity-already-in-cart14"));
      var total15 = parseFloat(sessionStorage.getItem("previous-total-price15"));
      var quantity15 = parseInt(sessionStorage.getItem("previous-quantity-already-in-cart15"));

      console.log(quantity0);
      console.log(quantity1);
      
        
      if (total0 > 0) {
        total0 = total0;
      } else {
        total0 = 0;
        quantity0 = 0;
      }
      sessionStorage.setItem("previous-total-price0", total0);
      sessionStorage.setItem("previous-quantity-already-in-cart0" , quantity0);

      if (total1 > 0) {
        total1 = total1;
      } else {
        total1 = 0;
        quantity1 = 0;
      }
      sessionStorage.setItem("previous-total-price1", total1);
      sessionStorage.setItem("previous-quantity-already-in-cart1" , quantity1);

      if (total2 > 0) {
        total2 = total2;
      } else {
        total2 = 0;
        quantity2 = 0;
      }
      sessionStorage.setItem("previous-total-price2", total2);
      sessionStorage.setItem("previous-quantity-already-in-cart2" , quantity2);

      if (total3 > 0) {
        total3 = total3;
      } else {
        total3 = 0;
        quantity3 = 0;
      }
      sessionStorage.setItem("previous-total-price3", total3);
      sessionStorage.setItem("previous-quantity-already-in-cart3" , quantity3);

      if (total4 > 0) {
        total4 = total4;
      } else {
        total4 = 0;
        quantity4 = 0;
      }
      sessionStorage.setItem("previous-total-price4", total4);
      sessionStorage.setItem("previous-quantity-already-in-cart4" , quantity4);

      if (total5 > 0) {
        total5 = total5;
      } else {
        total5 = 0;
        quantity5 = 0;
      }
      sessionStorage.setItem("previous-total-price5", total5);
      sessionStorage.setItem("previous-quantity-already-in-cart5" , quantity5);

      if (total6 > 0) {
        total6 = total6;
      } else {
        total6 = 0;
        quantity6 = 0;
      }
      sessionStorage.setItem("previous-total-price6", total6);
      sessionStorage.setItem("previous-quantity-already-in-cart6" , quantity6);

      if (total7 > 0) {
        total7 = total7;
      } else {
        total7 = 0;
        quantity7 = 0;
      }
      sessionStorage.setItem("previous-total-price7", total7);
      sessionStorage.setItem("previous-quantity-already-in-cart7" , quantity7);

      if (total8 > 0) {
        total8 = total8;
      } else {
        total8 = 0;
        quantity8 = 0;
      }
      sessionStorage.setItem("previous-total-price8", total8);
      sessionStorage.setItem("previous-quantity-already-in-cart8" , quantity8);

      if (total9 > 0) {
        total9 = total9;
      } else {
        total9 = 0;
        quantity9 = 0;
      }
      sessionStorage.setItem("previous-total-price9", total9);
      sessionStorage.setItem("previous-quantity-already-in-cart9" , quantity9);

      if (total10 > 0) {
        total10 = total10;
      } else {
        total10 = 0;
        quantity10 = 0;
      }
      sessionStorage.setItem("previous-total-price10", total10);
      sessionStorage.setItem("previous-quantity-already-in-cart10" , quantity10);

      if (total11 > 0) {
        total11 = total11;
      } else {
        total11 = 0;
        quantity11 = 0;
      }
      sessionStorage.setItem("previous-total-price11", total11);
      sessionStorage.setItem("previous-quantity-already-in-cart11" , quantity11);

      if (total12 > 0) {
        total12 = total12;
      } else {
        total12 = 0;
        quantity12 = 0;
      }
      sessionStorage.setItem("previous-total-price12", total12);
      sessionStorage.setItem("previous-quantity-already-in-cart12" , quantity12);

      if (total13 > 0) {
        total13 = total13;
      } else {
        total13 = 0;
        quantity13 = 0;
      }
      sessionStorage.setItem("previous-total-price13", total13);
      sessionStorage.setItem("previous-quantity-already-in-cart13" , quantity13);

      if (total14 > 0) {
        total14 = total14;
      } else {
        total14 = 0;
        quantity14 = 0;
      }
      sessionStorage.setItem("previous-total-price14", total14);
      sessionStorage.setItem("previous-quantity-already-in-cart14" , quantity14);

      if (total15 > 0) {
        total15 = total15;
      } else {
        total15 = 0;
        quantity15 = 0;
      }
      sessionStorage.setItem("previous-total-price15", total15);
      sessionStorage.setItem("previous-quantity-already-in-cart15" , quantity15);

      window.onload = function(){
        createCookie("id0", parseInt(quantity0));
        createCookie("id1", parseInt(quantity1));
        createCookie("id2", parseInt(quantity2));
        createCookie("id3", parseInt(quantity3));
        createCookie("id4", parseInt(quantity4));
        createCookie("id5", parseInt(quantity5));
        createCookie("id6", parseInt(quantity6));
        createCookie("id7", parseInt(quantity7));
        createCookie("id8", parseInt(quantity8));
        createCookie("id9", parseInt(quantity9));
        createCookie("id10", parseInt(quantity10));
        createCookie("id11", parseInt(quantity11));
        createCookie("id12", parseInt(quantity12));
        createCookie("id13", parseInt(quantity13));
        createCookie("id14", parseInt(quantity14));
        createCookie("id15", parseInt(quantity15));
      }

      function createCookie(name, value){
        var expires = "3600";
        document.cookie = escape(name) + "=" + escape(value) + "; path=/";
      }

      </script>
      <h1 class="grocerycart">My Grocery Cart</h1>

      <div class="leftbloc">
        <div class="cart-header">
          <h2>Product</h2>
          <h2>Price</h2>
          <h2>Quantity</h2>
        </div>

        <div class="cart-items">
        <?php
          $i = 0;
        
        ?>
        <?php foreach ($products as $product) : ?>
          <?php if ( $_COOKIE['id'.$i] > 0) : ?>
          <div class="cart-row">
            <div class="cart-item cart-column">
              <img class="cart-item-image" src="<?php echo $product['image'] ?>" />
              <p class="cart-item-title"><?php echo $product['name'] ?></p>
            </div>
            <div class="cart-price cart-column"><?php echo $product['price'] ?></div>
            <div class="cart-quantity cart-column">
              <input class="cart-quantity-input" type="number" name="<?php echo 'id'.$i ?>" value="<?php echo $_COOKIE['id'.$i] ?>" />
              <button class="remove" type="button">REMOVE</button>
            </div>
          </div>

          <br />

          <?php endif ?>
          <?php $i++; ?>
        <?php endforeach; ?>
        </div>
      </div>

      <div class="rightbloc">
        <h1 class="summary">Summary</h1>

        <table>
          <tr>
            <th>Subtotal:</th>
            <td class="subTotal">$0.00</td>
          </tr>
          <tr>
            <th>Number of Products:</th>
            <td class="numProduct">0</td>
          </tr>
          <tr>
            <th>Estimated QST:</th>
            <td class="QST">$0.00</td>
          </tr>
          <tr>
            <th>Estimated GST:</th>
            <td class="GST">$0.00</td>
          </tr>
          <tr>
            <th>Estimated Total:</th>
            <td class="estimatedTotal">$0.00</td>
          </tr>
        </table>

        <input type="button" name="checkout" id="checkout" value="CHECKOUT" />
        <p class="help">Need help? <a href="">Contact us</a></p>
      </div>
    </main>

    <!-- --------------------------------------------------END MAIN CODE-------------------------------------------------- -->

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
