
<?php

include 'productfunctions.php';
$errors=array();
 
if(isset($_POST['savebutton'])) 
{
    $category = $_POST['category'];
    $name = $_POST['name'];
    $brand = $_POST['brand'];
    $id =  $_POST['id'];
    $description = $_POST['description'];

     if (substr($_POST['image'], 0, 3) == "img/"){
          $image = $_POST['image'];
     } else if (substr($_POST['image'], 0, 3) == "http") {
          $image = $_POST['image'];
     } else {
          $image = "img/".$_POST['image'];
     }


   $image = "img/".$_POST['image'];
   $qInStock = $_POST['qInStock'];
   $weight = $_POST['weight'];
   $isOnSale = $_POST['isOnSale'];
   $offerExpiry = $_POST['offerExpiry'];
   $saleQuantity = $_POST['saleQuantity'];
   $salePrice = $_POST['salePrice'];
   $pricePerWeight = $_POST['pricePerWeight'];

if(count($errors)==0) //if there are no errors
{
     createProduct($_POST);
     header("Location: p7.php");
}
}
?>