<?php
if (isset($_GET['newsID'])) {
    $ID = getGet('newsID');
    $sql = "SELECT * FROM endow WHERE endow.ID = $ID";
    $result = renderViews($sql, true);
    $date = date_create($result['created_at']);
    $formatDate = date_format($date, 'd-m-Y');
}
?>
<div class="endow__item-details">
    <div class="clearfix">
        <div class="endow__content-feedback">
            <div class="endow__content-date">
                <span><i class="far fa-calendar"></i></span>
                <span class="content-text"><?= $formatDate?></span>

                <span class="conten-icon" style="margin-left: 10px;margin-right: 5px; display: inline-block;">
                    <i class="far fa-user"></i>
                </span>
                <span class="content-text"><?=$result['userName']?></span>
            </div>
            <div class="endow__content-comment">
                <span><i class="far fa-comment"></i></span>
                <span class="content-text">Không có phản hồi</span>
            </div>
        </div>
    </div>
    <div class="item-details-heading">
        <h2 style="margin: 20px 0 25px; font-size: 33px; font-weight: 400;"><?= $result['title'] ?></h2>
    </div>
    <div class="item-details-contents"><?=$result['description']?></div>
    <div class="related_section">
        <?php 
            $sql = "SELECT * FROM related_keywords";
            $result = renderViews($sql);

            if($result != null) {
                foreach($result as $item) {?>
                    <button class="btn btn-sizeL btn-bdColor-gray btn-boder hoverPrimary"><?=$item['key_word']?></button>
               <?php }
            }?>
    </div>
</div>
