<?php
include "userfunctions.php";
//---------------------------IMPLEMENTING THE SUBMIT BUTTON--------------------------



$errors=array();  //array to hold all errors that may occur while filling the form

if(isset($_POST['submitbutton'])) //check if submit button was pressed
{
    //grabbing the data
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $emailaddress = $_POST['emailaddress'];
    $pwd =  $_POST['pwd'];
    $pwdconfirm = $_POST['pwdconfirm'];


   $addressline = $_POST['addressline'];
   $apptnum = $_POST['apptnum'];
   $city = $_POST['city'];
   $country = $_POST['country'];
   $province = $_POST['province'];
   $postalcode = $_POST['postalcode'];
   $phonenumber = $_POST['phonenumber'];


 //---------------------------------VALIDATING -----------------------------------------------------
//check if theres empty inputs , these 4 attributes have  *,so theyre mandatory

    if( $firstname=='' || $lastname=='' || $emailaddress=='' || $pwd=='' || $pwdconfirm=='')
    {
       $errors[]='A required field is empty';
    }
    

    //check if its a valid email with built in PHP Method
        if(!filter_var($emailaddress,FILTER_VALIDATE_EMAIL))
        {
            $errors[]='Not a valid email address';
        }
      

//check if the password matches the confirmed password
    if($pwd != $pwdconfirm)
    {
         $errors[]='passwords do not match';
    }
//check if the email is already signed up/already exists

      if (isDuplicateEmail($emailaddress)==1) //the email is a duplicate
     {   $errors[]="Email already exists in our system";
     }
   
//------------------SIGN UP THE USER-------------------------------------------------------------------

    if(count($errors)==0) //if there are no errors
  {   
     createUser( $_POST); //create user using data from the filled out form
  }

}



?>
<!-- -------------------------HTML PAGE----------------------------->

<!DOCTYPE html>

<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1.0">


<head> 

<title>Sign up form</title>

	<link rel="stylesheet" type= "text/css" href="css/signupsheet.css">
	<link href="css_style_sheets/header-topbar.css" rel="stylesheet" />
	
	<script
	  src="https://kit.fontawesome.com/3b08ae2567.js"
	  crossorigin="anonymous"
	></script>
      
</head>


<body>


<!-----------HEADER--------------->
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



	<!-----------------SIGN UP TITLE AND TEXT------------------->
<div class= "signup-container">
			<h1 class="signup-title"> Sign Up</h1>

		<p class="signup-sentence"> Create your ConUmart account</p>
		<p class="disclaimer-sentence"> * required fields</p>
		
		
		<form class= "pinfo-form" method="post" action=""> 
		 <?php
         
            if(count($errors)>0) {
                echo '<ul>';
                foreach($errors as $e){
                    echo '<li style="color:#B22222; font-weight:bold" >' .$e. '</li>';
                }
                echo '</ul>';
            }
         ?>


		<!--BOX CONTAINING PERSONAL INFORMATION-->
		<div class="row">
		<div id="PersonalInfo-container" >
			<h1 class="pinfo-title"> Personal Information</h1>	
				
				<div class="pinfo-form-group1">
					<label> *First Name </label>
					<input 
						name="firstname"
						type="text"
						size="20"
						placeholder="First Name">
				</div>
				
				
				<div class="pinfo-form-group1">
					<label> *Last Name </label>
					<input 
						name="lastname"
						type="text"
						size="20"
						placeholder="Last Name">
				</div >
				<div class="pinfo-form-group1">
					<label> *Email Address </label>
					<input 
						name="emailaddress"
						type="text"
						placeholder="johndoe@example.com">
				</div>
				<div class="pinfo-form-group1">
					<label> *Password </label>
					<input 
						name="pwd"
						type="password"
						size="20"
						placeholder="Password">
				</div>
				<div class="pinfo-form-group1">
					<label> *Confirm Password </label>
					<input 
						name="pwdconfirm"
						type="password"
						placeholder="Confirm Password">
				</div>
				
		</div>
	
		<div>
		
		<pre>
		<p>                                                   
		

		</p>
		</pre>
		</div>
		
		<!--BOX CONTAINING CONTACT INFORMATION-->
		<div class="ContactInfo">
		 <h1 class="Cinfo-title"> Contact Information</h1>
		 
		 <div class="cinfo-entry">
			
			
			<div class="pinfo-form-group1">
				<label> Address (Street Number)</label>
				<input 
				class="input1"
				type="text"
				name="addressline"
				placeholder="Address">
			</div>
			
			<div class="pinfo-form-group1">
				<label> Apartment</label>
				<input 
				class="input1"
				type="text"
				name="apptnum"
				placeholder="Apartment number">
			</div>
			
			<div class="pinfo-form-group1">
				<label> City</label>
				<input 
				class="input1"
				type="text"
				name="city"
				placeholder="City">
			</div>
			
			<div class="dropdownlabels">
				<label for="Country">Select Country</label>
					<select name="country" id="Country">
					<option value="Canada"> Canada </option>
					</select>
					
		

				<label for= "Province"> Select Province</label>
				<select name="province" id="province">
				
				<option value="Alberta">Alb.</option>
				<option value="British columbia"> B.C.</option>
				<option value="Manitoba"> Man.</option>
				<option value="New Brunswick"> N.B.</option>
				<option value="Newfoundland"> N.L.</option>
				<option value="Nova Scotia"> N.S.</option>	
				<option value="Northwest Territories"> N.W.T</option>		
				<option value="Nunavut"> Nvt.</option>
				<option value="Ontario"> Ont.</button>	
				<option value="Prince Edward Island"> PEI</option>
				<option value="Quebec"> QC.</option>
				<option value="Saskatchewan"> Sask.</button>	
				<option value="Yukon"> Y.T.</button>
					</select>
			</div>
			
			<div class="cinfo-form-group2">
				<label>Postal Code</label>
				<input 
				class="input3"
        name="postalcode"
				type="text"
				placeholder="Postal Code">
			
			</div>
			
			<div class="cinfo-form-group2">
				<label> Phone Number</label>
				<input 
				class="input4"
        name="phonenumber"
				type="tel"
				placeholder="Phone Number">
			</div>
			
		 </div>
		 
		</div>
		
	
		 <a href="login_p5.php"> <p><input type="submit" value="Submit" class="submit-button" name="submitbutton"></p></a>
	
		 <p><input type="submit" value="Reset" class="reset-button" name="resetbutton"></p>
		 
		</form>
	</div>
        <p class="goback"> Already have an account?<a href="login_p5.php"> Login here.</a></p>
	    
</div>



</body>






















<!------------------------FOOTER----------------->
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