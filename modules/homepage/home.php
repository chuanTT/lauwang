<div class="container">
        <div class="container__banner">
            <img src="./assets/img/banner.jpg" alt="" class="container__banner-img">
            <a href="dat-ban/" class="container__banner-order-btn">Đặt bàn ngay</a href="">
        </div>


        <div class="container__main">
            <div class="container__story">
                <div class="story__wrap">
                    <div class="story__head">
                        <div class="story__head-title">Câu chuyện thương hiệu</div>
                        <div class="story__head-descript">- Tinh hoa ẩm thực việt -</div>
                    </div>

                    <div class="margin-top-60"></div>
    
                    <div class="story__content">
                        <div class="story__content-para">
                            <p class="story__content-para-descript">
                                Lẩu Wang là hệ thống chuỗi nhà hàng buffet lẩu tại Hà Nội được
                                tin tưởng và đánh giá cao về chất lượng và giá cả với 3 set buffet
                                119K – 159K – 189K, khách hàng sẽ được thưởng thức tới gần 50 món ăn
                                từ ba chỉ bò Mỹ, hải sản tổng hợp, khai vị hấp dẫn với cá chiên hoàng bào, ghẹ sữa rang muối, 
                                ngao xào cùng vô vàn những món ăn, thức uống hấp dẫn khác.
                            </p>
                            <p class="story__content-para-descript">
                                Với sự phát triển không ngừng, đến nay Lẩu Wang đã xây dựng và hoạt động 7 cơ sở: 
                            </p>
                            <ul class="story__content-list">
                                
                                <li class="story__list-item">
                                    CS1: 134 Trần Đại Nghĩa, Hai Bà Trưng.
                                </li>
                                <li class="story__list-item">
                                    CS3: Số 21 đường 19/5, Văn Quán, Hà Đông (cổng sau Học Viện An Ninh).
                                </li>
                                <li class="story__list-item">
                                    CS4: 17 Tam Khương (số 17 ngõ 10 Tôn Thất Tùng).
                                </li>
                                <li class="story__list-item">
                                    CS5: 81B Nguyễn Khang, Yên Hòa, Cầu Giấy.
                                </li>
                                <li class="story__list-item">
                                    CS6: 265 Tô Hiệu, Cầu Giấy.
                                </li>
                                <li class="story__list-item">
                                    CS7: Số 51A Hồ Tùng Mậu, Cầu Giấy.
                                </li>
    
                            </ul>
                        </div>
                        <div class="story__content-avatar">
                            <img src="./assets/img/stores1.jpg" alt="" class="story__content-avatar-img">
                        </div>
                    </div>
                </div>

                <div class="margin-top-30"></div>

                <div class="story__wrap">
                    <div class="story__head">
                        <div class="story__head-title">TINH HOA NGŨ VỊ LẨU</div>
                        <div class="story__head-descript">- Hương vị lẩu chỉ có tại Wang -</div>
                    </div>

                    <div class="margin-top-60"></div>
    
                    <div class="story__content">
                        <div class="story__content-avatar">
                            <img src="./assets/img/5-vi.jpg" alt="" class="story__content-avatar-img">
                        </div>
                        
                        <div class="story__content-para">
                            <p class="story__content-para-descript">
                                Ẩm thực chính là tấm gương phản chiếu văn hóa của mỗi quốc gia. Hiểu được điều này, 
                                Lẩu Wang luôn kế thừa và giữ gìn cốt lõi vị lẩu bản địa đồng thời phát huy điều chỉnh 
                                hương vị lẩu để hợp ý người Việt mang lại sự trải nghiệm vẹn toàn với 5 hương vị tuyệt 
                                vời của tinh hoa sắc vị.
                            </p>
                            <ul class="story__content-list">
                                
                                <li class="story__list-item">
                                    Nước lẩu Wang: Độc quyền nước lẩu thần thánh là sự kết hợp hoàn hảo các loại gia vị lẩu của
                                    Thái và Nhật, chua chua cay cay của hương vị thái kết hợp với vừng mè ăn ngon khó cưỡng. 
                                </li>
                                <li class="story__list-item">
                                    Lẩu Thái: Chua cay truyền thống với sự kết hợp của gia vị thật tài tình và hợp lý,
                                    đủ chua, đủ cay mang đến sự cảm nhận tê tê đầu lưỡi, thật sự tuyệt hảo.
                                </li>
                                <li class="story__list-item">
                                    Lẩu Kim chi: Những hương vị cầu kỳ cay nồng mang hương vị chuẩn xứ kim chi.
                                </li>
                                <li class="story__list-item">
                                    Lẩu Tứ Xuyên: Vị cay nồng hòa quyện với hương thơm của thảo mộc đánh thức vị giác
                                </li>
                                <li class="story__list-item">
                                    Lẩu Nấm: Thanh tao, ngọt vị phù hợp với mọi lứa tuổi.
                                </li>
    
                            </ul>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
        <div class="margin-top-40"></div>

        <div class="container__option bg-gray" style="width: 100%; padding-top: 20px;">
            <?php
            $sql = "SELECT * FROM thucdon ORDER BY thucdon.Ma DESC LIMIT 3";
            $result = renderViews($sql);
            
             var_dump($result);
          
            if($result != null):?>
                <div class="story__head">
                    <div class="story__head-title" style="margin-top: 20px;">Thực đơn</div>
                    <div class="story__head-descript">- Tất cả các ngày trong tuần -</div>
                </div>
            <?php endif?>

            <div class="margin-top-60"></div>

            <div class="option__content gutter-30" style="padding: 0 25px">
                <?php 
                    if($result != null) {
                        foreach($result as $item) {?>
                        <div class="option__content-item w33pc col">
                            <div class="option__content-item-wrap">
                                <a href="thuc-don/" class="opion__item-link">
                                    <img src="<?=URL.$item['image']?>" alt="" class="option__item-img">
                                </a>
                                <div class="option__item-brand">
                                    <span><?=$item['Ten']?></span>
                                    <span class="price"><?=$item['gia']?>k</span>
                                </div>
                            </div>
                            <p class="option__item-descript"><?=$item['MoTa']?></p>
                        </div>
                        <?php }
                    }
                ?>
            </div>
            <?php require_once "./modules/put_table/put_table.php"?>
            <div class="margin-top-40"></div>
        </div>

        <!-- Phần khoảnh khắc -->
        <div class="container__monent">
            <div class="opacity bg-earth-yellow"></div>
            <div class="container__monent-content">
                <div class="container__moment-head">
                    <div class="container__moment-title">Khoảnh khắc về lẩu wang</div>
                    <div class="container__moment-descript">- Khai chương lẩu wang Tam Khương -</div>
                </div>
                
                <div class="margin-top-35"></div>

                <div class="container__moment-content-wrap">
                    <div class="container__moment-content-item-group w50pc">
                        <div class="container__moment-content-item col w50pc">
                            <img src="./assets/img/khoanh-khac-1.jpg" alt="" class="container__moment-content-item-img">
                        </div>
                        <div class="container__moment-content-item col w50pc">
                            <img src="./assets/img/khoanh-khac-2.jpg" alt="" class="container__moment-content-item-img">
                        </div>
                    </div>
                    <div class="container__moment-content-item col w50pc moblie-group">
                        <iframe class="container__moment-content-item-video" width="972" height="547" src="https://www.youtube.com/embed/6N_atuav4oU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                        </iframe>
                    </div>
                </div>

                <div class="margin-top-35"></div>
            </div>
        </div>

        <!-- phần phản hồi khách hàng -->
        <div class="container__option">
            <div class="story__wrap">
                <div class="story__head">
                    <div class="story__head-title">Phản hồi khách hàng</div>
                    <div class="story__head-descript">- Sẵn sàng lắng nghe -</div>
                </div>

                <div class="margin-top-60"></div>

                <div class="feedback__list">
                    
                    <div class="w33pc margin-top-30">
                        <div class="feedback__item">
                            <div class="feedback__item-marker">&#10075;&#10075;</div>
                            <p class="feedback__item-content">
                                Lan Ngọc có dịp ghé Lẩu Wang vào dịp trời thu Hà Nội. Ăn một lần mà rất nhớ vị lẩu ở đây, có gì đó khác 
                                so với các nhà hàng buffet mình đã từng ăn. Nếu có dịp quay lại Hà Nội, mình sẽ lại ghé qua lần nữa. 
                                Mọi người cứ đến ăn Lẩu Wang để trải nghiệm như Lan Ngọc nhé.
                            </p>
                            <h3 class="feedback__item-author">Diễn viên Ninh Dương Lan Ngọc</h3>
                            <img src="./assets/img/feedbak3.png" alt="" class="feedback__item-img">
                        </div>
                    </div>
             
                    <div class="w33pc margin-top-30">
                        <div class="feedback__item">
                            <div class="feedback__item-marker">&#10075;&#10075;</div>
                            <p class="feedback__item-content">
                                Thu Quỳnh thực sự hài lòng về đồ ăn tại Lẩu Wang. Nhiều đồ ăn tươi ngon giá cả lại hợp lý với hầu hết các 
                                bạn trẻ. Khi nào có liên hoan đông người chắc chắn Quỳnh sẽ rủ bạn bè đến đây. Hi vọng nhà hàng sẽ phát triển 
                                hơn nữa. Nhiều bạn đến đây sẽ thích cho xem. 
                            </p>
                            <h3 class="feedback__item-author">Diễn viên Thu Quỳnh</h3>
                            <img src="./assets/img/feedbak2.jpg" alt="" class="feedback__item-img">
                        </div>
                    </div>

                    <div class="w33pc margin-top-30">
                        <div class="feedback__item">
                            <div class="feedback__item-marker">&#10075;&#10075;</div>
                            <p class="feedback__item-content">
                                Lẩu Wang là nhà hàng mình thấy đặc biệt ngon và phù hợp với các bạn trẻ. Đồ ăn ở đây vừa tươi, 
                                ngon miệng rất vừa vị mà còn đẹp mắt. Mọi người cứ thử đến ăn Lẩu Wang để trải nghiệm nhé. Minh Vương 
                                nghiện Lẩu Wang mất rồi. Chắc chắn sẽ còn đến đây nhiều lần đấy !
                            </p>
                            <h3 class="feedback__item-author">Ca sĩ Minh Vương</h3>
                            <img src="./assets/img/feedback1.png" alt="" class="feedback__item-img">
                        </div>
                    </div>
                </div>
                <div class="margin-top-60"></div>
            </div>
        </div>
        <div class="margin-top-30"></div>

        <!-- phần tin tức -->
        <div class="container__option">
            <div class="story__head">
                <div class="story__head-title">Tin tức</div>
                <div class="story__head-descript">- Thông tin cập nhật -</div>
            </div>
            <div class="margin-top-40"></div>
            <div class="news">
                <?php 
                    $sql = "SELECT * FROM  endow ORDER BY endow.ID DESC LIMIT 3";
                    $result = renderViews($sql);

                    if($result != null ) {
                        foreach($result as $item) {?>
                        <?php $convert = convert_vi_to_en($item['title'])?>
                        <div class="w33pc dflex">
                            <div class="news__item">
                                <div class="news__wrap-img">
                                    <a href="?action=endow&newsID=<?=$item['ID']?>&Name=<?=$convert?>" class="news__img-link">
                                        <img src="<?=URL.$item['representativeImage']?>" alt="" class="news__img">
                                    </a>
                                </div>
                                <div class="news__content">
                                    <h3 class="news__content-head">
                                        <a href="?action=endow&newsID=<?=$item['ID']?>&Name=<?=$convert?>" class="news__content-link">
                                            <?=$item['title']?>
                                        </a>
                                    </h3>
                                    <p class="news__content-para">
                                        <?=$item['shortContent']?>
                                    </p>
                                </div>
                            </div>
                        </div>
                     <?php }
                    }
                ?>
            </div>
        </div>
    </div>
