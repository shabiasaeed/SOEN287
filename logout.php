<?php
session_start();
session_destroy();
header('Location: login_p5.php');