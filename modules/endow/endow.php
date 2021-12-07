<?php 
    if (!empty($_GET['newsID'])) :
        $ID = getGet('newsID');
        echo $ID;
    endif;
?>
<div class="margin-top-100"></div>
<div class="endow">
    <div class="endow__list-left">
        <?php
        $page = isset($_GET['page'])?getGet('page'):1;

        if(isset($_GET['status'])) {
            $status = getGet('status');
            if($status == 'next') {
                ++$page;
            } elseif ($status == 'back') {
                --$page;
            }
        }

        // số lượng phần cử muốn hiện
        $itemNews = 4;
        // vị trí bắt đầu
        $start = ($page - 1) * $itemNews;
        // vị trí kết thúc
        $end = $itemNews;
        // lấy tổng số các phần tử trong bảng
        $sql = "SELECT COUNT(ID) as total FROM endow";
        $result = renderViews($sql,true);
        $total = $result['total'] / $itemNews;
        // 
        if(!empty($_GET['newsID'])&&!isset($_POST['search'])) :
            $ID = getGet('newsID');
            require_once "./modules/endow/endow_details.php";
         else :
            if(isset($_POST['search'])) {
                $search = getPost('search');
                $sql = "SELECT * FROM `endow` WHERE title LIKE '%$search%'";
            } else {
                $sql = "SELECT * FROM endow ORDER BY endow.ID DESC LIMIT $start, $end";
            }
            $result = renderViews($sql);

            if($result != null):
                foreach($result as $item):
                    $formatDate = ucfirst(strftime("%B %d, %Y", strtotime($item['created_at'])));
                    ?>
                    <?php $convert = convert_vi_to_en($item['title'])?>
                    <div class="endow__item">
                        <div class="endow__img">
                            <a href="?action=endow&newsID=<?=$item['ID']?>&Name=<?=$convert?>"><img src="<?=URL.$item['representativeImage']?>" alt=""></a>
                        </div>
                        <div class="endow__content">
                            <div class="endow__content-heding"><a href="?action=endow&newsID=<?=$item['ID']?>&Name=<?=$convert?>" class="primaryColor"><?=$item['title']?></a></div>
                            <div class="endow__content-description">
                                    <p><?=$item['shortContent']?></p>
                            </div>
                            <div class="endow__content-feedback">
                                <div class="endow__content-date">
                                    <span><i class="far fa-calendar"></i></span>
                                    <span><?= $formatDate?></span>
                                </div>
                                <div class="endow__content-comment">
                                    <span><i class="far fa-comment"></i></span>
                                    <span>Không có phản hồi</span>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php endforeach;
             else : ?>
                <span style="font-size: 30px">Your search <span style="color: #ef5122; font-size: 25px;">"<?=isset($search)?$search:false?>"</span>: 0 results</span>
            <?php endif;
        endif;
        ?>
        <div class="margin-top-20"></div>
        <?php 
        if(!isset($_GET['newsID'])&&!isset($_POST['search'])): 
            if((int)$total < $total) :
                $total += 1;
            endif;
            if($total > 1):
            ?>
            <ul class="has-next">
                <?php if($page > 1):
                        $back = $page - 1;
                    ?>
                    <li>
                        <a href="?action=endow&page=<?=$back?>">
                            <i class="fas fa-chevron-left"></i>
                        </a>
                    </li>
                <?php endif;?>
                <?php for($i=1;$i<=$total;$i++):?>
                    <li class="<?=$page==$i?'has-next-active':false?>">
                        <a href="?action=endow&page=<?=$i?>"><?=$i?></a>
                    </li>
                <?php endfor;?>

                <?php if($page < $total - 1):
                    $next = $page + 1;
                ?>
                <li>
                    <a href="?action=endow&page=<?=$next?>">
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </li>
                <?php endif;?>
            </ul>
        <?php
            endif;
         endif;?>
    </div>
    <div class="endow__control-right">
        <div class="endow__control-search">
            <form  method="post">
                <div class="form__search">
                    <input class="form__search-input" name="search" placeholder="Search..."></input>
                    <button class="btn btn-primary" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </form>
        </div>
        <div class="endow__control-start">
            <div class="control-start-heading" style="margin-bottom: 20px;">
                <h3 style="font-size: 18px; font-weight: 200;">BÀI VIẾT MỚI</h3>
            </div>
            <div class="control-start-list">
                <?php 
                    $sql = "SELECT title, ID FROM endow ORDER BY endow.ID DESC LIMIT 0, 4";
                    $result = renderViews($sql);

                    foreach($result as $item) :
                        $convert = convert_vi_to_en($item['title'])?>
                        <div class="control-start-item">
                            <h3 class="control-start-title">
                                <a href="?action=endow&newsID=<?=$item['ID']?>&Name=<?=$convert?>"><?=$item['title']?></a>
                            </h3>
                        </div>
                   <?php endforeach;
                ?>
            </div>
        </div>
    </div>
</div>
<div class="pd-top-50" style="background-color: #f4f4f4;">
    <?php
        require_once "./modules/put_table/put_table.php";
    ?>
</div>
