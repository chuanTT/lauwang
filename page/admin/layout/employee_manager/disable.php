<?php 
    $sql = "SELECT ID_role FROM nhanvien WHERE nhanvien.userName = '".$_SESSION['user']."'";
    $result = renderViews($sql,true);

    if(in_array($result['ID_role'],permission)) {
        $disable = false;

        if(!empty($_POST)) {
            $id = getPost('userProfile');

            if(isset($_POST['disableProfile'])) {
                $sql= "UPDATE nhanvien SET deleted = '1' WHERE nhanvien.id = $id";

            } else if(isset($_POST['remove'])) {
                $sql= "UPDATE nhanvien SET deleted = '0' WHERE nhanvien.id = $id";
            }
            // thực hiện câu lệnh;
            connect($sql);
            // hủy dữ liệu khi đã thành công
            unset($_POST);
        }
    } else {
        $disable = true;
    }
?>