<?php require_once '../config/database.php';
include_once '../admin/view/header.php';
include_once '../admin/view/home.php';
include_once '../admin/view/footer.php';

$action = $_GET['action']?? 'home';

if ($action == 'home'){
    include 'view/home.php';
}
elseif ($action='categories'){

}