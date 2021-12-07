<?php
    require_once ('../../connect/views.php');
    require_once ('../../unitity/handel.php');

    if(!empty($_POST)) {
        $user = getPost('User');
        $pwd = getPost('Password');

        $msErorr = [];

        if($user === "") {
            $msErorr['user']['require'] = "Vui lòng nhập user";
        }

        if($pwd === "") {
            $msErorr['password']['require'] = 'Vui lòng nhập mật khẩu';
        }

        if(!empty($user)&&!empty($pwd)) {

            // chuyển đổi mật sang bảo mật 2 lớp
            $pwd = convertMD5($pwd);

            $sql = "SELECT * FROM nhanvien WHERE nhanvien.userName = '$user' AND nhanvien.MatKhau = '$pwd' AND nhanvien.deleted = 1";
            $result = renderViews($sql,true);
            if($result != null) {
                $msErorr['action']['erorr'] = 'Tài khoản đã bị vô hiệu hóa';
            } else {
                $sql = "SELECT * FROM NhanVien WHERE userName='$user' and MatKhau = '$pwd'";
                $result = renderViews ($sql,true);
    
                if($result != null) {
                    $_SESSION['FullName'] = $result['HoTen'];
                    $_SESSION['user'] = $result['userName'];
                    header("location: ../../index.php");
                    die();    
                } else {
                    $msErorr['action']['erorr'] = 'Đăng nhập thất bại';
                }
            }

        }

    }