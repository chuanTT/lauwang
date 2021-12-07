<?php 
    if(isset($_GET['act'])) {
        require_once 'addUpdate.php';
    } else {
        require_once "viewsMenu.php";
    }
?>