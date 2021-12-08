<?php 
    if(isset($_GET['act'])) {
        $act = getGet('act');

        if($act=='add') {
            $add = true;
        } else {
            $add = false;
        }
    }

    if(isset($_GET['act'])&&isset($_GET['id'])) {
        $sql = 'SELECT * FROM thucdon WHERE thucdon.Ma ='.$_GET['id'];
        $result = renderViews($sql,true);
        $Name = $result['Ten'];
        $Price = $result['gia'];
        $image = $result['image'];
        $Description = $result['MoTa'];
    }

    // thêm dữ liệu
    if(isset($_POST['add'])&&isset($_FILES['image'])) {
        $Name = getPost('Name');
        $Price = getPost('Price');
        $Description = getPost('Description');
        $img = $_FILES['image'];

        if(empty($Name)||empty($Price)||empty($Description)||empty($img)) {
            $msg = 'Vui lòng nhập đủ thông tin các trường';
        } else {
            // check UPLOAD FILE 
            $checkUpload = uploadFile ($img,BASEURL,Valid__Image);
            $newsName = $checkUpload['name'];
            if($checkUpload['status']==1) {
                if(isset($_POST['add'])) {
                    $sql = "INSERT INTO thucdon VALUES(NULL,'$Name','$Price','$newsName','$Description')";
                }
                $result = connect($sql);
                if($result == true) {
                    $Name = $Price = $Description = '';
                    unset($_POST);
                    $hidden = true;
                    $msgBox = 'Thêm thành công';
                } else {
                    $hidden = false;
                    $msgBox = 'Thêm thất bại';
                    DeleteFile(BASEURL,$newsName);
                }
            } else {
                $msg = 'vui lòng kiểm tra lại file';
            }
        }
        // header("refresh: 0");
        // exit;
    }
    // end thêm dữ liệu

    // sửa dử liệu
    if(isset($_POST['update'])) {
        $id = getGet('id');
        $Name = getPost('Name');
        $Price = getPost('Price');
        $Description = getPost('Description');
        $img = $_FILES['image']['size']<=0?$image:$_FILES['image'];
        // 
        if(isset($id)&&$_FILES['image']['size']<=0) {
            $sql = "UPDATE thucdon SET Ten = '$Name', gia='$Price', `image`='$img',MoTa='$Description' WHERE Ma = $id";
            $result = connect($sql);
            if($result == true) {
                unset($_POST);
                $msg = 'update thành công';
            } else {
                $msg = 'update thất bại';
            }
        } else {
            $resultIMG = uploadFile($img,BASEURL,Valid__Image);
            $img = $resultIMG['name'];
            if($resultIMG['status']==1) {
                // lay ra ten anhr cu
                $sql = "SELECT thucdon.image FROM thucdon WHERE thucdon.Ma = '$id'";
                $result = renderViews($sql,true);
                // tên ảnh cũ
                $old_picture =$result['image'];
                // update du lieu
                $sql = "UPDATE thucdon SET Ten = '$Name', gia='$Price', `image`='$img',MoTa='$Description' WHERE thucdon.Ma = $id";
                $result = connect($sql);
                if($result == true) {
                    // kiem tra
                    DeleteFile(BASEURL,$old_picture);
                    unset($_POST);
                    $msg = 'update thành công';
                } else {
                    DeleteFile(BASEURL, $img);
                    $msg = 'update thất bại';
                }
            } else {
                $msg = 'update thất bại';
            }
        }
    }
?>

<div class="span-line"></div>
<form method="post" enctype="multipart/form-data" id="insertMenu" class="form3" onsubmit="return validateFrom()">
    <div class="heading dflexCenter margin-bottom-20">
        <h2>Thêm / Sửa Thực Đơn</h2>
        <button class="btn btn-success rounded btn-sizeL" style="font-size: 15px;">
            <a href="?status=Menu_management" class="colorWhite">Hiện Thị Thực Đơn</a>
        </button>
    </div>
    <div class="news-group dflexCenter margin-bottom-20 mobile-app">
        <div class="form-group news">
            <span>Tên</span>
            <input type="text" name="Name" placeholder=" " value="<?=isset($Name)?$Name:false?>">
        </div>
        <div class="form-group news mobileMG" style="margin-left: 40px;">
            <span>Giá</span>
            <input type="text" name="Price" placeholder=" " value="<?=isset($Price)?$Price:false?>">
        </div>
    </div>
    <div class="form-group news">
        <span>Mô tả</span>
        <textarea name="Description" id='thucDonNode' style="height: 300px; padding: 20px; outline: none;"><?=isset($Description)?$Description:false?></textarea>
    </div>
    <div class="form-group margin-top-20" style="flex-direction: column;">
        <label for="fileMenu">
            <i class="fas fa-upload colorPrimary"></i>
            <img src="<?=isset($image)?BASEURL.$image:false?>" alt="" id="imgFile" width="400px" style="<?=isset($image)?'height: 250px':false?>">
        </label>
        <input type="file" name="image" id="fileMenu" style="outline: none; display: none;"><br>
    </div>
    <span><?=isset($msg)?$msg:false?></span>
    <div class="submit-form mgTop-40">
        <?php if($add):?>
            <input type="submit" name="add" class="btn btn-success rounded btn-sizeXL colorWhite" value="Thêm">
        <?php else:?>
            <input type="submit" name="update" class="btn btn-infor rounded btn-sizeXL colorWhite" value="Sửa">
        <?php endif;?>
    </div>

    <?php 
        if(isset($hidden)):?>
            <div class="error__mesage dflexCenter">
                <div class="error__mesage-box ">
                    <span><?=$msgBox?></span>
                    <button class="btn btn-primary margin-top-20 rounded btn-sizeXL" onclick="disable(this)">Đồng ý</button>
                </div>
            </div>
        <?php endif;?>
</form>