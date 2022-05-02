<?php

include 'page12function.php';
//The change must be reflected in P9, and the user must be able to sign in afterward.
$errors=array();

//---------------------------------VALIDATING -----------------------------------------------------
//check if theres empty inputs , these 4 attributes have  ,so theyre mandatory

if(isset($_POST['savebutton'])) //check if submit button was pressed
{
    //grabbing the data
    $name = $_POST['name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];


//---------------------------------VALIDATING -----------------------------------------------------
//check if theres empty inputs , these 4 attributes have  ,so theyre mandatory
if( $name=='' || $price=='' || $quantity=='' )
{
   $errors[]='A required field is empty';
}

//------------------ADDING ORDER-------------------------------------------------------------------


    if(count($errors)==0) //if there are no errors
    {
        addItemInOrder($name, $price, $quantity);
        header("Location: page12.php");
    }
}
?>