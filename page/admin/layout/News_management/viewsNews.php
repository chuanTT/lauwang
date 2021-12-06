<?php 
    if(isset($_POST['newsDelete'])) {
        $ID = getPost('ID');

        // Xóa ảnh
        $sql = "SELECT * FROM endow WHERE ID = $ID";
        $result = renderViews($sql,true);

        DeleteFile(BASEURL,$result['representativeImage']);

        // xóa bảng
        $sql = "DELETE FROM endow WHERE ID = $ID";
        connect($sql);

        unset($_POST);
    }
?>


<div class="Category__right-item" id="news" data="3">
    <div class="heading dflexCenter margin-bottom-20">
        <h2>Tin Tức</h2>
        <button class="btn btn-success rounded btn-sizeL" style="font-size: 15px;">
            <a href="?status=News_management&act=add" class="colorWhite">Thêm thực đơn</a>
        </button>
    </div>
    <table border="1">
        <tr>
            <th>Hình ảnh đại diện</th>
            <th>Tiêu đề</th>
            <th>Người đăng</th>
            <th>Loại</th>
            <th>Từ khóa</th>
            <th>Thời gian đăng</th>
        </tr>
        <?php 
            $sql = "SELECT created_at,endow.ID,title, representativeImage, userName, kind_of_news.nameNews, related_keywords.key_word FROM endow JOIN kind_of_news JOIN related_keywords ON endow.ID_Type = kind_of_news.ID AND endow.ID_key_word = related_keywords.ID";
            $result = renderViews($sql);

            foreach($result as $item) {
                $date = date_create($item['created_at']);
                $formatDate = date_format($date, 'd-m-Y');
                echo '
                <tr>
                    <td><img src="'.BASEURL.$item['representativeImage'].'" alt="" width="150px"></td>
                    <td>'.$item['title'].'</td>
                    <td>'.$item['userName'].'</td>
                    <td>'.$item['nameNews'].'</td>
                    <td>'.$item['key_word'].'</td>
                    <td>'.$formatDate.'</td>
                    <td>
                        <form action="" method="post" class="newsForm">
                            <input type="text" name="ID" style="display: none;" value='.$item['ID'].' readonly>
                            <input type="submit" class="btn btn-erorr rounded btn-sizeL colorWhite" name="newsDelete" value="Xóa Bài" onclick="return Click(this)">
                            <a href="?status=News_management&act=update&id='.$item['ID'].'" class="btn btn-infor rounded btn-a-sizeL colorWhite" name="newsUpDate">Sửa Bài</a>
                        </form>
                    </td>
                </tr>
                ';
            }
        ?>
    </table>
</div>