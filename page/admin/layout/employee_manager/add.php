<?php 
    if(isset($_POST['submitEmployeeUser'])) {
        $fullName = getPost('fullname');
        $birtday = getPost('birtday');
        $phone = getPost('phone');
        $address = getPost('address');
        $user = getPost('user');
        $password = getPost('password');
        $gender = getPost('gender');
        $confirmPassword = getPost('confirmPassword');
        

        $erorr = [];

        if(empty($fullName)) {
            $erorr['fullname']['required'] = "Vui lòng nhập trường này";
        } 

        $sql = "SELECT * FROM nhanvien WHERE nhanvien.userName = '".$user."'";
        $result = renderViews($sql,true);

        if(empty($user)) {
            $erorr['user']['required'] = "Vui lòng nhập trường này";
        } elseif ($result != null) {
            $erorr['user']['error'] = 'Tài khoản đã tồn tại';
        }

        if(empty($password)) {
            $erorr['password']['required'] = "Vui lòng nhập trường này";
        }

        if(empty($confirmPassword)) {
            $erorr['confirmPassword']['required'] = "Vui lòng nhập trường này";
        } elseif ($confirmPassword != $password) {
            $erorr['confirmPassword']['mismatched'] = "Mật khẩu không khớp";
        }

        if(empty($erorr)) {
            $avart = default_image[$gender];
            // convert
            $convertPass = convertMD5($password);
            // end convert
            $sql = "INSERT INTO nhanvien VALUES(NULL,'$fullName','$avart','$birtday','$phone','$address','$gender','$convertPass','$user',0,0)";
            $result = connect($sql);

            if($result == true) {
                $fullName = $birtday = $phone = $address = $password = $user = $gender = $confirmPassword = '';
            }

            unset($_POST);
        }


    }

?>

<div class="addEmployee">
    <div class="heading dflexCenter margin-bottom-20">
        <h2>Thêm Nhân Viên</h2>
        <button class="btn btn-success rounded btn-sizeL" style="font-size: 15px;">
            <a href="?status=employee_manager" class="colorWhite">Hiện Thị DS Nhân Viên</a>
        </button>
    </div>
    <div class="addEmployeeUser">
        <form action="" method="post">
            <div class="form-group">
                <span>Họ Tên (*)</span>
                <input type="text" name="fullname" value="<?=isset($fullName)?$fullName:false?>">
                <span class="mgTop-5 colorRed"><?php
                    if(isset($erorr['fullname']['required'])) {
                        echo $erorr['fullname']['required'];
                    }
                ?></span>
            </div>
            <div class="form-group">
                <span>Ngày Sinh</span>
                <input type="date" name="birtday" value="<?=isset($birtday)?$birtday:false?>">
            </div>
            <div class="form-group">
                <span>Số Điện Thoại</span>
                <input type="text" name="phone" value="<?=isset($phone)?$phone:false?>">
            </div>
            <div class="form-group">
                <span>Địa Chỉ</span>
                <input type="text" name="address" value="<?=isset($address)?$address:false?>">
            </div>
            <div class="form-group">
                <span>Tên Đăng Nhập (*)</span>
                <input type="text" name="user" value="<?=isset($user)?$user:false?>">
                <span class="mgTop-5 colorRed"><?php 
                    if(isset($erorr['user']['required'])) {
                        echo $erorr['user']['required'];
                    } else if(isset($erorr['user']['error'])) {
                        echo $erorr['user']['error'];
                    }
                ?></span>
            </div>
            <div class="form-group">
                <span>Giới Tính</span>
                <div class="gender dflexCenter">
                    <div class="gender-male">
                        <input type="radio" name="gender" value="1" checked>
                        <span>Nam</span>
                    </div>
                    <div class="gender-female" style="margin-left: 20px;">
                        <input type="radio" name="gender" value="0">
                        <span>Nữ</span>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <span>Mật Khẩu (*)</span>
                <input type="password" name="password" value="<?=isset($password)?$password:false?>">
                <span class="mgTop-5 colorRed"><?php 
                    if(isset($erorr['password']['required'])) {
                        echo $erorr['password']['required'];
                    }
                ?></span>
            </div>

            <div class="form-group">
                <span>Xác Nhận Mật Khẩu (*)</span>
                <input type="password" name="confirmPassword" value="<?=isset($confirmPassword)?$confirmPassword:false?>">
                <span class="mgTop-5 colorRed"><?php 
                    if(isset($erorr['confirmPassword']['required'])) {
                        echo $erorr['confirmPassword']['required'];
                    } elseif(isset($erorr['confirmPassword']['mismatched'])) {
                        echo $erorr['confirmPassword']['mismatched'];
                    }
                ?></span>
            </div>

            <div class="submitEmployeeUser mgTop-40">
                <input type="submit" class="btn btn-success rounded btn-sizeXXL" name="submitEmployeeUser" value="Thêm">
            </div>
        </form>
    </div>
</div>
