<?php 
    if(isset($_GET['act'])) {
        $act = getGet('act');

        if($act=='add') {
            $add = true;
        } else {
            $add = false;
        }
    }


    //Thêm dữ liệu 
    if(isset($_POST['newsADD'])&&!empty($_FILES)) {
        // lấy dữ liệu từ form
        $title = getPost('TitleNews');
        $type = getPost('typeNews');
        $keyWord = getPost('keyWord');
        $Decsption = getPost('Decsption');
        $shortContent = getPost('shortContent');
        $userName = $_SESSION["user"];
        $date = date("Y-m-d H:i:s");
        $filesNews = $_FILES['fileNews'];
        // end
        if(empty($title)||empty($type)||empty($Decsption)||empty($filesNews)) {
            $msg =  "Không được để chống các trường";
        } else {
            if($filesNews['error']==0) {
                $valideImg = uploadFile($filesNews,BASEURL,Valid__Image);

                if($valideImg['status']==1) {
                    $name = $valideImg['name'];
                    // thêm dữ liệu
                    $sql = "INSERT INTO endow VALUES(NULL,'$title','$name','$shortContent','$Decsption','$userName','$type','$keyWord','$date')";
                    $result = connect($sql);
                    // end thêm, dữ liệu
                    
                    if($result === true) {
                        unset($_POST);
                        $title = $type = $keyWord = $Decsption = $shortContent = '';
                        $msgBox = "Thêm dữ liệu thành công";
                        $hidden=true;
                    } else {
                        DeleteFile(BASEURL,$name);
                        $msgBox = "Thêm dữ liệu thất bại";
                        $hidden = false;
                    }
                }
                // end xử lý tin tức
            }
        }
    }


    // sửa dữ liệu 
    // lấy id từ url
    if(isset($_GET['act'])&&isset($_GET['id'])) {
        // $act = getGet('act');
        $id = getGet('id');

        $sql = "SELECT ID_Type,ID_key_word,`description`,shortContent,title, representativeImage FROM endow WHERE endow.ID = $id";
        $result = renderViews($sql,true);

        $TitleNews = $result['title'];
        $img = $result['representativeImage'];
        $shortContent = $result['shortContent'];
        $description = $result['description'];
        $keyWord = $result['ID_key_word'];
        $type = $result['ID_Type'];
    }
    // end láy id url

    // khi nhán vào nút sửa
    if(isset($_POST['update'])) {
        $TitleNews = getPost('TitleNews');
        $typeNews = getPost('typeNews');
        $keyWord = getPost('keyWord');
        $shortContent = getPost('shortContent');
        $description = getPost('Decsption');
        $img = $_FILES['fileNews']['size']<=0?$img:$_FILES['fileNews'];

        if($_FILES['fileNews']['size']<=0) {
            $sql = "UPDATE endow SET title = '$TitleNews',ID_Type = '$typeNews',ID_key_word = '$keyWord',`description` = '$description',shortContent = '$shortContent' WHERE endow.ID = $id";
            $result = connect($sql);
            if($result == true) {
                $msg = 'Thành công';
            }
        } else {
            $fileIMG = uploadFile($img,BASEURL,Valid__Image);
            $newsNameIMG = $fileIMG['name'];

            // lấy tên ảnh cũ
            $sql = "SELECT representativeImage FROM endow WHERE endow.ID = $id";
            $result = renderViews($sql,true);
            // name
            $old_img = $result['representativeImage'];

            if($fileIMG['status']==1) {
                $sql = "UPDATE endow SET title = '$TitleNews',ID_Type = '$typeNews',ID_key_word = '$keyWord',`description` = '$description',shortContent = '$shortContent', representativeImage = '$newsNameIMG' WHERE endow.ID = $id";
                $result = connect($sql);
                
                if($result == true) {
                    DeleteFile(BASEURL,$old_img);
                    $img = $newsNameIMG;
                }
            } else {
                DeleteFile(BASEURL,$newsNameIMG);
                // $msg = 'Thêm thất bại';
            }
        }


    }
    // end nhấn vào nút sửa
?>


<form method="POST" id="newsForm" enctype="multipart/form-data" onsubmit="return validateFrom()">
    <div class="heading dflexCenter margin-bottom-20">
        <h2>Thêm / Sửa Tin Tức</h2>
        <button class="btn btn-primary rounded btn-sizeL" style="font-size: 15px;">
            <a href="?status=News_management" class="colorWhite">Hiển Thị Tin Tức</a>
        </button>
    </div>
    <div class="news-group dflexCenter margin-bottom-20">
        <div class="form-group news">
            <span>Tiêu Đề</span>
            <input type="text" name="TitleNews" id="newsName" placeholder=" " value="<?=isset($TitleNews)?$TitleNews:false?>">
        </div>
        <div class="form-group news" style="margin: 0 30px;">
            <span>Loại</span>
            <select name="typeNews" id="">
                <?php 
                    $sql = "SELECT * FROM kind_of_news";
                    $result = renderViews($sql);
                    foreach($result as $item) :?>
                        <option value="<?=$item['ID']?>" 
                        <?php
                            if(isset($type)) {
                                if($type == $item['ID']) {
                                    echo 'selected';
                                }
                            }
                        ?>><?=$item['nameNews']?></option>
                <?php endforeach;?>

            </select>
        </div>
        <div class="form-group news" style="margin: 0 30px;">
            <span>Từ khóa</span>
            <select name="keyWord" id="">
                <?php 
                    $sql = "SELECT * FROM related_keywords";
                    $result = renderViews($sql);
                    foreach($result as $item) :?>
                        <option value="<?=$item['ID']?>"
                        <?php
                            if(isset($keyWord)) {
                                if($keyWord == $item['ID']) {
                                    echo 'selected';
                                }
                            }
                        ?>><?=$item['key_word']?></option>
                <?php endforeach;?>

            </select>
        </div>
    </div>
    <div class="form-group news margin-bottom-40">
        <span>Nội dung ngắn</span>
        <textarea type="text" style="padding: 20px;" name="shortContent" id="newsShort" placeholder=" " style="height: 200px; outline: none;"><?=isset($shortContent)?$shortContent:false?></textarea>
    </div>
    <div class="form-group news">
        <textarea name="Decsption" id="newsDesc" placeholder="Mô Tả" cols="30" rows="10" value="Mô tả"><?=isset($description)?$description:false?></textarea>
    </div>
    <div class="form-group news margin-bottom-20">
        <label for="fileNews" style="position: relative;">
            <i class="fas fa-upload colorPrimary"></i>
            <img src="<?=isset($img)?BASEURL.$img:false?>" alt="" id="newsIMG" width="400" >
        </label>
        <input type="file" name="fileNews" id="fileNews" style="border: none; outline: none;display: none;" onchange="change_photo()">
    </div>
    <span style="margin-bottom: 10px; color: red;display: inline-block;"><?=isset($msg)?$msg:false?></span><br>
    <?php if($add==true):?>
        <input type="submit" name="newsADD" class="btn btn-success rounded btn-sizeXL colorWhite" value="Thêm">
    <?php else:?>
        <input type="submit" name="update" class="btn btn-infor rounded btn-sizeXL colorWhite" value="Sửa">
    <?php endif;?>

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