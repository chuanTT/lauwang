<?php 
    $hidden = true;
    if(isset($_GET['profile'])) {
        $profile = getGet('profile');
       if($_SESSION['user'] != $profile) {
           $hidden = false;
       }

        $sql = "SELECT HoTen,avatar ,NgaySinh,SDT,role.nameRole,DiaChi FROM nhanvien JOIN role ON nhanvien.ID_role = role.ID  WHERE userName = '$profile'";
        $result = renderViews($sql,true);
    }

    if(isset($_POST['UpdateProfile'])) {
        if($_FILES['thumnail']['size'] >  0) {
            $thumnail = $_FILES['thumnail'];
        }
        $fullname = getPost('fullname');
        $Birtday = getPost('Birtday');
        $phone = getPost('phone');
        $address = getPost('address');

        if(!empty($fullname)&&!empty($Birtday)&&!empty($phone)&&!empty($address)) {
            if(isset($thumnail)) {
                // láy name ảnh cũ
                $sql = "SELECT avatar FROM nhanvien WHERE nhanvien.userName = '$profile'";
                $result = renderViews($sql,true);

                $old_picture = $result['avatar'];
                // end
                $moveThumnail = uploadFile($thumnail,BASEURL,Valid__Image);
                if($moveThumnail['status']==1) {
                    $sql = 'UPDATE nhanvien SET avatar= "'.$moveThumnail['name'].'",HoTen="'.$fullname.'", NgaySinh="'.$Birtday.'",SDT= "'.$phone.'",DiaChi="'.$address.'" WHERE nhanvien.userName = "'.$profile.'"';
                }
            } else {
                $sql = 'UPDATE nhanvien SET HoTen="'.$fullname.'", NgaySinh="'.$Birtday.'",SDT= "'.$phone.'",DiaChi="'.$address.'" WHERE nhanvien.userName = "'.$profile.'"';
            }

            $result = connect($sql);
            if($result == true) {
                if(isset($thumnail)) {
                    if(!in_array($old_picture,default_image)) {
                        unlink(BASEURL.$old_picture);
                    }
                }
                unset($_POST);
            }
        }
        header('refresh: 0');
        exit;
    }

?>

<div class="profile">
    <h2 class="txtCenter margin-bottom-40">Thông Tin Cá Nhân</h2>
    <div class="profile__list">
        <form  method="post" class="dflex" enctype="multipart/form-data">
            <div class="profile__img">
                <div class="box__thumnail">
                    <img src="<?=BASEURL.$result['avatar']?>" alt="">
                    <?php if($hidden):?>
                        <div class="box__thumnail-btn">
                            <label for="thumnail" class="btn btn-primary btn-sizeL rounded">Đổi hình ảnh</label>
                        </div>
                    <?php endif;?>
                </div>
                <input type="file" name="thumnail" id="thumnail" style="display: none;">
            </div>
            <div class="profile__infor">
                <div class="form_group">
                    <span>Họ và Tên: </span>
                    <input type="text" name="fullname" value="<?=$result['HoTen']?>" <?=!$hidden==true?'readonly':false?>>
                </div>
                <div class="form_group">
                    <span>Ngày Sinh: </span>
                    <input type="date" name="Birtday" value="<?=$result['NgaySinh']?>" <?=!$hidden==true?'readonly':false?>>
                </div>
                <div class="form_group">
                    <span>Số Điện Thoại: </span>
                    <input type="text" name="phone" value="<?=$result['SDT']?>" <?=!$hidden==true?'readonly':false?>>
                </div>
                <div class="form_group">
                    <span>Chức Vụ: </span>
                    <span class="position"><?=$result['nameRole']?></span>
                </div>
                <div class="form_group">
                    <span>Địa Chỉ: </span>
                    <input type="text" name="address" value="<?=$result['DiaChi']?>" <?=!$hidden==true?'readonly':false?>>
                </div>
                <?php if($hidden == true):?>
                    <div class="updateP mgTop-40">
                        <input type="submit" class="btn btn-infor rounded btn-sizeXL colorWhite" name="UpdateProfile" data-action = "update" value="Cập Nhật" onclick="return Click(this)">
                    </div>
                <?php endif;?>
            </div>
        </form>
    </div>
</div>