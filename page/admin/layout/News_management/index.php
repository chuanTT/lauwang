<?php 
    if(isset($_GET['act'])) {
        require_once 'addUpdateNews.php';
    } else {
        require_once "viewsNews.php";
    }