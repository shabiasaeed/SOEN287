<?php
include "userfunctions.php";



$error = false;
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];


    if(userLogin($email, $password) == 1){
            session_start();
            $not_logged = false;
            $_SESSION['email'] = $email;
            header('Location: index.php');
            die; 
        }

    
    $error = true;
}

$error_admin = false;
if(isset($_POST['login_admin'])){
  $email = $_POST['email'];
  $password = $_POST['password'];

      if($password == "admin" && $email == "admin@hotmail.com"){
          session_start();
          $_SESSION['email'] = $email;
          header('Location: p7.php');
          die; 
      }
      $error_admin = true;
  }
  
?>

<! DOCTYPE html>
<html lang="en">

<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css_style_sheets/stylesheet.css">
	<link href="css_style_sheets/header-topbar.css" rel="stylesheet" />
	<script
	  src="https://kit.fontawesome.com/3b08ae2567.js"
	  crossorigin="anonymous"
	></script>
</head>

<body>

    <!-- HEADER -->
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
	</header>
	
	<!--LOG IN TITLE-->
	<div class="log"><h2>Log In</h2></div>

	<!--LOG IN BOX-->
	<div class="container">
	<h2>Enter Your Credentials</h2>
        <form method="post" action="">
          <div class="my-form">
            <div class="form-group">
                <p>Email <input type = "text" name ="email" size="20" placeholder="Enter Your Email"/></p>
            </div>   
            <div class="form-group">
                <p>Password <input type = "password" name ="password" size="20" placeholder="Enter Your Password"/></p>
                <br><br>
                <!------------- Validating user login------------------>
                <?php
                if($error){
                  if($email=='' || $password==''){ //check if theres empty inputs
                    echo "<p style='color:#B22222;'> One or more required fields are empty.</p>";
                  }
              
                  if(!filter_var($email, FILTER_VALIDATE_EMAIL)){ //check if the email is valid
                    echo "<p style='color:#B22222;'> Not a valid email address. </p>";
                  }

                    echo "<p style='color:#B22222;'> Invalid email and/or password. </p>";
                }

                // ------------- Validating admin login------------------>
                if($error_admin){

                  if($email=='' || $password==''){
                    echo "<p style='color:#B22222;'> One or more required fields are empty.</p>";
                  }
              
                  if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    echo "<p style='color:#B22222;'> Not a valid email address. </p>";
                  }

                  echo "<p style='color:#B22222;'> Invalid admin email and/or password. </p>";
                }
                ?>
                <!---------------------------------------------------------->
                  <br><br>
                  <a href="#">Forgot your password?</a><br><br>
                  <input type="submit" class="button" value="Login as Admin" name="login_admin"/> 
            </div>
                <input type="submit" class="button" value="Login" name="login"/> 
                <br><br>
                <a href="page6_signup.php">Don't have an acount? SIGN UP</a>
              </div>
        </form>
	</div>
	
	<div class="clr"></div>

</body>

<!--FOOTER-->
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
	

</html>