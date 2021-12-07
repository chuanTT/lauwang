<?php 
    if(isset($_POST['DELETE'])) {
        $delete = getPost("DELETE");
        $ID = getPost('ID');

        // xóa ảnh
        $sql = "SELECT image FROM thucdon WHERE Ma = $ID";
        $result = renderViews($sql,true);
        
        DeleteFile(BASEURL,$result['image']);

        // xóa bảng
        $sql = "DELETE FROM thucdon WHERE Ma = $ID";
        connect($sql);

        // xóa 
        unset($_POST);

        // header("refresh: 0");
        // exit;
    }
?>
<div class="Category__right-item" id="menu" data="2">
    <div class="heading dflexCenter margin-bottom-20">
        <h2>Thực Đơn</h2>
        <button class="btn btn-success rounded btn-sizeL" style="font-size: 15px;">
            <a href="?status=Menu_management&act=add" class="colorWhite">Thêm thực đơn</a>
        </button>
    </div>
    <table border="1">
        <tr>
            <th>Hình ảnh</th>
            <th>Tên</th>
            <th>Giá</th>
            <th>Mô tả</th>
        </tr>
        <?php
            $sql = "SELECT * FROM thucdon";
            $result = renderViews($sql);
            foreach($result as $item) {
                echo '
                    <tr class="menuJS" data='.$item['Ma'].'>
                        <td style="width: 200px;"><img src="'.BASEURL.''.$item['image'].'" alt="" width="200px"></td>
                        <td>'.$item['Ten'].'</td>
                        <td>'.$item['gia'].'K</td>
                        <td>'.$item['MoTa'].'</td>
                        <td style="white-space: nowrap; width: 200px;">
                            <form action="" method="post">
                                <input type="text" name="ID" style="display: none;" value='.$item['Ma'].' readonly>
                                <input type="submit" class="btn btn-erorr btn-sizeL rounded colorWhite" name="DELETE" value="Xóa" onclick="return Click(this)">
                                <a href="?status=Menu_management&act=update&id='.$item['Ma'].'" class="btn btn-infor btn-a-sizeL rounded colorWhite">Sửa</a>
                            </form>
                        </td>
                    </tr>
                ';
            }
        ?>
    </table>
</div>