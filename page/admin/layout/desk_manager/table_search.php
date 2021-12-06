<?php 
    $DiaChi = 1;
    $TinhTrang = 0;
    $check = true;
    if(!empty($_POST)) {
        $DiaChi = getPost('DiaChi');
        $TinhTrang = getPost('chart');
        
        if(getPost('chart')==0) {
            $check = true;
        } else {
            $check = false;
        }
        // 
        $idTable = getPost('Table_ID');
        $KH_ID = getPost('KH_ID');

        if(isset($_POST['payTable'])) {
            $sql = "DELETE FROM `khachhang` WHERE `khachhang`.`id` = $KH_ID";
            connect($sql);
            
            $sql = "UPDATE `ban` SET `TinhTrang` = b'0' WHERE `ban`.`MaBan` = $idTable";
            connect($sql);
        }
    }
?>

<div class="Category__right-item" id="table" data="1">
    <h2 class="margin-bottom-20 colorPrimary">Bàn đã được đặt và bàn trống</h2>
    <form method="POST" class="form2">
        <div class="dflexCenter margin-bottom-20">
            <div class="form-left">
                <span>Cơ sở</span>
                <select name="DiaChi" id="selectTable" style="width: fit-content; padding: 10px">
                    <?php
                    $select = false;
                    $sql = "SELECT * FROM coso";
                    $result = renderViews($sql);
                    foreach ($result as $item) {
                        $element = '<option value='. $item['Ma'] .'>' . $item['DiaChi'] . '</option>';
                        if(isset($DiaChi)) {
                            $element = '<option selected value='. $item['Ma'] .'>' . $item['DiaChi'] . '</option>';
                            if($DiaChi!=$item['Ma']) {
                                $element = str_replace('selected','',$element);
                            }
                        }
                        echo $element;
                    }
                    ?>
                </select>

                <div class="check">
                    <input type="radio" name="chart" value="0" id='emty' <?php 
                        if(isset($check)&&$check) {
                            echo 'checked';
                        }
                    ?>>
                    <label for="emty">Bàn trống</label>
                </div>

                <div class="check">
                    <input type="radio" name="chart" value="1" id='placed' <?php
                        if(isset($check)&&!$check) {
                            echo 'checked';
                        }
                    ?>>
                    <label for="placed">Bàn được đặt</label>
                </div>
            </div>
            <div class="form-right">
                <input type="submit" class="btn btn-primary btn-sizeL rounded" style="font-size: 15px;color: white" value="Lọc" name="filter">
                <button class="btn btn-success btn-sizeL rounded"><a href="?status=desk_manager&act=add" class="colorWhite">Thêm bàn</a></button>
            </div>

            </div>
            <div>
            <table border=1>
                <tr>
                    <?php
                    $erorr = false;
                    if (isset($TinhTrang)) {
                        if ($TinhTrang == 0) {
                            echo '
                            <tr>
                                <th>Mã Bàn</th>
                                <th>Địa chỉ</th>
                                <th>Số người tối đa</th>
                                <th>Tình Trạng</th>
                            </tr>
                            ';
                            $sql = "SELECT SoNguoiToiDa,MaBan,DiaChi, TinhTrang FROM ban, coso  WHERE ban.MaCS = coso.Ma AND TinhTrang='$TinhTrang' AND coso.Ma = '$DiaChi'";
                        } else {
                            echo '
                                <tr>
                                    <th>Số Bàn</th>
                                    <th>Họ Tên</th>
                                    <th>Số Điện thoại</th>
                                    <th>Địa chỉ cơ sở</th>
                                    <th>Ngày</th>
                                    <th>Giờ</th>
                                    <th>Số người lớn</th>
                                    <th>Số trẻ em</th>
                                </tr>
                            ';
                            $sql = "SELECT khachhang.MaCS,khachhang.id,khachhang.MaBan,khachhang.HoTen,khachhang.SDT,khachhang.Ngay, khachhang.Gio ,coso.DiaChi,ban.TinhTrang,num_adult,num_child 
                                                    FROM khachhang, coso, ban WHERE khachhang.MaCS = coso.Ma AND ban.MaBan = khachhang.MaBan AND khachhang.MaCS ='$DiaChi'";
                        }

                        $result = renderViews($sql);
                        if ($result == null) {
                            $erorr = true;
                        } else {
                            for ($i = 0; $i < count($result); $i++) {
                                $tinhtrang = $result[$i]['TinhTrang'] == '0' ? "Bàn trống" : "Bàn đã được đặt";
                                if ($result[$i]['TinhTrang'] == 0) {
                                    echo '
                                    <tr>
                                        <td>' . $result[$i]['MaBan'] . '</td>
                                        <td>' . $result[$i]['DiaChi'] . '</td>
                                        <td>' . $result[$i]['SoNguoiToiDa'] . '</td>
                                        <td>' . $tinhtrang . '</td>
                                    </tr>
                                    ';
                                } else {
                                    echo '
                                        <tr>
                                            <td>' . $result[$i]['MaBan'] . '</td>
                                            <td>' . $result[$i]['HoTen'] . '</td>
                                            <td>' . $result[$i]['SDT'] . '</td>
                                            <td>' . $result[$i]['DiaChi'] . '</td>
                                            <td>' . $result[$i]['Ngay'] . '</td>
                                            <td>' . $result[$i]['Gio'] . '</td>
                                            <td>' . $result[$i]['num_adult'] . '</td>
                                            <td>' . $result[$i]['num_child'] . '</td>
                                            <td>
                                                <input type="text" name="Table_ID" value='.$result[$i]['MaBan'].' style="display: none;" readonly>
                                                <input type="text" name="KH_ID" value='.$result[$i]['id'].' style="display: none;" readonly>
                                                <input type="submit" class="btn btn-erorr btn-sizeL rounded colorWhite" name="payTable" value="Trả bàn" onclick="return Click(this)" />
                                            </td>
                                        </tr>
                                    ';
                                }
                            }
                        }
                    }
                    ?>
                </tr>
            </table>
        </div>
    </form>
    <span class="margin-top-20" style="display: inline-block; 
        <?php
            if ($erorr == false) {
                echo 'display: none;';
            }
        ?>
    ">
        Không tìm thấy dữ liệu.....
    </span>
</div>