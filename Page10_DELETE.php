<?php

require "userfunctions.php";

$userId = $_GET['Id'];

deleteUser($userId);

header("Location: page9.php");
?>