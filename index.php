<?php
session_start();

require_once 'view/header.php';
// user

if ($action == 'home') {
    include 'view/home.php';
    
}
require_once 'view/footer.php';
