<?php 
    if(isset($_GET['act'])) {
        $sql = "SELECT ID_role FROM nhanvien WHERE nhanvien.userName = '".$_SESSION['user']."'";
        $result = renderViews($sql,true);

        if($result['ID_role']==1) {
            require_once "add.php";
        } else {
            $disable = true;
            require_once "viewsEmployee.php";
        }
    } else {    
        require_once "viewsEmployee.php";
    }
?>