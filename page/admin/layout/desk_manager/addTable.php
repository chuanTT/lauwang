<?php 
    if(isset($_POST['addTableDesk'])) {
        $address = getPost('address');
        $people = getPost('people');
        if(!empty($people)) {
            $sql = "INSERT INTO ban (SoNguoiToiDa,TinhTrang,MaCS) VALUES('$people',0,$address)";
            $result = connect($sql);
        }
    }

    if(isset($_POST['addAddressDesk'])) {
        $nameAddress = getPost('nameAddress');

        if(!empty($nameAddress)) {
            $sql = "INSERT INTO coso (DiaChi) VALUES('$nameAddress')";
            connect($sql);
        }
    }
?>

<div class="add__table dflex">
    <div class="add_table-left">
        <div class="heading dflexCenter margin-bottom-20">
            <h2>Thêm Bàn</h2>
            <button class="btn btn-success rounded btn-sizeL" style="font-size: 15px;">
                <a href="?status=desk_manager" class="colorWhite">Hiểm Thị</a>
            </button>
        </div>
        <div class="margin-top-40"></div>
        <div>
            <form method="post">
                <div class="form-group">
                    <span>Số Người Tối Đa</span>
                    <input type="text" name="people" id="">
                </div>
                <div class="form-group margin-bottom-40">
                    <span>Cơ Sở</span>
                    <select name="address">
                        <?php
                            $sql = "SELECT * FROM coso";
                            $result = renderViews($sql);

                            if($result != null):
                                foreach($result as $item):?>
                                    <option value="<?=$item['Ma']?>" <?php
                                        if(isset($address)) {
                                            if($address == $item['Ma']) {
                                                echo 'selected';
                                            }
                                        }
                                    ?>><?=$item['DiaChi']?></option>
                            <?php
                            endforeach; 
                            endif;?>
                    </select>
                </div>
                <div class="form-submit">
                    <input type="submit" class="btn btn-success rounded btn-sizeXXL" name="addTableDesk" value="Thêm">
                </div>
            </form>
        </div>
    </div>
    <div class="add_table-right">
        <div class="heading dflexCenter margin-bottom-20">
            <h2>Thêm Cơ Sở</h2>
            <button class="btn btn-success rounded btn-sizeL" style="font-size: 15px;">
                <a href="?status=desk_manager" class="colorWhite">Hiển Thị</a>
            </button>
        </div>
        <div class="margin-top-40"></div>
        <div>
            <form method="post" class="dflex" style="flex-direction: column;">
                <div class="form-group margin-bottom-40">
                    <span>Tên Cơ Sở</span>
                    <input type="text" name="nameAddress" id="">
                </div>
                <div class="margin-top-60"></div>
                <div class="form-submit" style="margin-top: auto;">
                    <input type="submit" class="btn btn-success rounded btn-sizeXXL" name="addAddressDesk" value="Thêm">
                </div>
            </form>
        </div>
    </div>
</div>