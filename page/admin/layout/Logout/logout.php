<?php 
    if(isset($_GET['action'])) {
        $action = $_GET['action'];
        if(!empty($action)&&$action==='logout') {
            unset($_SESSION['FullName']);
            unset($_SESSION['userName']);
            header("location: ./layout/Login/");
            die();
        }
    }