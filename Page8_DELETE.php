<?php

require "productfunctions.php";

$productId = $_GET['id'];

deleteProduct($productId);

header("Location: p7.php");
?>