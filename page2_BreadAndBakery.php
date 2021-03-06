<?php
  include "productfunctions.php";
  $products=getProducts();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- Setting the viewpoint -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <script
	  src="https://kit.fontawesome.com/3b08ae2567.js"
	  crossorigin="anonymous"
	></script>
    <title>Bread and Bakery </title>


    <!-- Bootstrap CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link href="assets/Page2/stylep2.css" rel="stylesheet" type="text/css">
    <link href="header-redesigned.css" rel="stylesheet" />
    <link href="footer.css" rel="stylesheet" />

</head>

<body>    
  <script type="text/javascript" src="p2-common.js"></script>
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
              Shopping List</a
            >
            <a href="login_p5.php" class="top-bar-misc-anchors"
              ><i class="fa-solid fa-user"></i>
              My account</a
            >
            <a href="#" class="top-bar-misc-anchors">FR</a>
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
              type="text"
              placeholder="Search products"
            />
            <button href="#" class="search-button">&#x1F50D;&#xFE0E;</button>
          </div>

          <!-- Cart button -->
          <div class="cart-button-container">
            <a href="page4.php"
              ><button class="cart-button" id="cart-button">
                <i class="fa-solid fa-cart-shopping"></i> 
                <p id="total-cost">$0.00</p>
                <input id="cost-of-item" style="display:none" value = "0" /> 
              </button>
            </a>
          </div>
        </div>
        <hr />
      </div>
    </header>

<main>
  <br>
  <div class="main-container">

<?php foreach($products as $product) : ?>
    <?php if ($product['category'] == "BreadAndBakery") : ?>  
    <div class="element-wrapper">
            <div class="box-up">
            <img class="img" src="<?php echo $product['image'] ?>" alt="" height="110px">
                <div class="img-info">
                    <div class="info-inner">
                        <span class="p-name"><?php echo $product['name'] ?></span>
                        <span class="p-addinfo">(<?php echo $product['weight'] ?>)</span>
                    </div>
                    <div class="a-size"><span class="size"><?php echo $product['pricePerWeight'] ?></span></div>
                </div>
                <a class="cart" href="page-3.php?Id=<?php echo $product['id'] ?>"></a>
            </div>

            <div class="box-down">
                <div class="h-bg"></div>
                <div class="h-bg-inner"></div>

        <a class="cart" href="page-3.php?Id=<?php echo $product['id'] ?>">
        <span class="price"><?php echo $product['price'] ?> ea.</span>
        <span class="add-to-cart">
            <span class="txt">Add in cart</span>
        </span>
        </a>
            </div>
    </div>
    <?php endif ?>
<?php endforeach;; ?>
</div>


</main>

</br>
</br>
</br>
</br>
</br>

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
