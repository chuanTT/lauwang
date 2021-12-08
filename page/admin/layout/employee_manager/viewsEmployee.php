<?php 
    require_once "disable.php";
?>

<div class="heading dflexCenter margin-bottom-20">
    <h2>Thông Tin Nhân Viên</h2>
    <button class="btn btn-success rounded btn-sizeL" style="font-size: 15px;">
        <a href="?status=employee_manager&act=add" class="colorWhite">Thêm Nhân Viên</a>
    </button>
</div>
<div class="employee_manager">
    <table border="1">
        <thead>
            <tr>
                <th>Hình Ảnh</th>
                <th>Họ Và Tên</th>
                <th>Ngày Sinh</th>
                <th class='mobile__item'>Số Điện Thoại</th>
                <th class='mobile__item'>Địa Chỉ</th>
                <th>Chức Vụ</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $sql = "SELECT nhanvien.userName,nhanvien.id,avatar, HoTen, NgaySinh, SDT, DiaChi,deleted, role.nameRole FROM nhanvien JOIN role ON nhanvien.ID_role = role.ID WHERE nhanvien.userName <>'".$_SESSION['user']."'";
            $result = renderViews($sql);
            foreach($result as $item):
                $date = date_create($item['NgaySinh']);
                $birtday = date_format($date,'d/m/Y');
            ?>
            <tr>
                <td class="mbWidth100" style="width: 200px; padding: 5px;">
                    <img class="mbWidth100" width="200" src="<?=BASEURL.$item['avatar']?>" alt="">
                </td>
                <td><?=$item['HoTen']?></td>
                <td><?=$birtday?></td>
                <td class='mobile__item'><?=$item['SDT']?></td>
                <td class='mobile__item'><?=$item['DiaChi']?></td>
                <td><?=$item['nameRole']?></td>
                <td>
                    <form method="post" class="dflexCenter mobile-app" style="width: 100%; justify-content: center;" onsubmit="return Check()">
                        <input type="hidden" name="userProfile" value="<?=$item['id']?>">
                        <a href="?status=profile&profile=<?=$item['userName']?>" class="btn btn-infor btn-sizeL rounded colorWhite" name="viewsProfile">Xem Thông Tin</a>
                        <input type="submit" class="btn btn-erorr btn-sizeL rounded colorWhite mobileMTop-10" name="<?=$item['deleted']==0?'disableProfile':'remove'?>" value="<?=$item['deleted']==0?'Vô Hiệu Hóa':'Đã Vô Hiệu'?>" style="margin-left: 10px;" id="node">
                    </form>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
    <?php 
        if((isset($_POST['remove'])||isset($_POST['disableProfile'])||isset($_GET['act']))&&$disable==true):?>
            <div class="error__mesage dflexCenter">
                <div class="error__mesage-box ">
                    <span>Bạn không có quyền truy cập</span>
                    <button class="btn btn-primary margin-top-20 rounded btn-sizeXL" onclick="disable(this)">Đồng ý</button>
                </div>
            </div>
        <?php endif;?>
</div>