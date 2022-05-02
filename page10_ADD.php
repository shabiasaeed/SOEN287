


<?php

include 'userfunctions.php';
//The change must be reflected in P9, and the user must be able to sign in afterward.
$errors=array();

//---------------------------------VALIDATING -----------------------------------------------------
//check if theres empty inputs , these 4 attributes have  ,so theyre mandatory

if(isset($_POST['savebutton'])) //check if submit button was pressed
{
    //grabbing the data
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $emailaddress = $_POST['emailaddress'];
    $pwd =  $_POST['pwd'];


   $addressline = $_POST['addressline'];
   $apptnum = $_POST['apptnum'];
   $city = $_POST['city'];
   $country = $_POST['country'];
   $province = $_POST['province'];
   $postalcode = $_POST['postalcode'];
   $phonenumber = $_POST['phonenumber'];


//---------------------------------VALIDATING -----------------------------------------------------
//check if theres empty inputs , these 4 attributes have  ,so theyre mandatory
if( $firstname=='' || $lastname=='' || $emailaddress=='' || $pwd=='' )
{
   $errors[]='A required field is empty';
}


//check if its a valid email with built in PHP Method
    if(!filter_var($emailaddress,FILTER_VALIDATE_EMAIL))
    {
        $errors[]='Not a valid email address';
    }
  


//check if the email is already signed up/already exists

 
      if (isDuplicateEmail($emailaddress)==1) //the email is a duplicate
     {   $errors[]="Email already exists in our system"; }

//------------------SIGN UP THE USER-------------------------------------------------------------------


    if(count($errors)==0) //if there are no errors
    {
         createUser($_POST);
         header("Location: page9.php");
    }
}
?>
