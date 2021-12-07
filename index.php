<?php
// connect database
require_once "./page/admin/unitity/handel.php";
require "./page/admin/connect/views.php";

if (empty($_GET['action'])) :
    $action = 'home';
else :
    $action = getGet('action');
endif;

switch ($action):
    case 'introduce':
        $title = 'Giới thiệu - Lẩu Wang - Vua Buffet Lẩu - Chuỗi Nhà Hàng Buffet';
        break;
    case 'menu':
        $title = 'Thực đơn - Lẩu Wang';
        break;
    case 'put_table':
        $title = 'Đặt bàn - Lẩu Wang';
        break;
    case 'endow':
        $title = 'Ưu đãi - Chương Trình Khuyến Mại tại Lẩu Wang - Vua Buffet Lẩu';
        break;
    case 'blog':
        $title = 'Blog - Lẩu Wang';
        break;
    default:
        $title = 'Lẩu Wang - Vua Buffet Lẩu - Hệ Thống Chuỗi Nhà Hàng Buffet Hà Nội';
endswitch;


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <base href="https://lauwang.herokuapp.com/" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/slider.css">
    <link rel="stylesheet" href="./assets/css/app.css">
    <link rel="icon" href="https://lauwang.vn/wp-content/uploads/2020/07/cropped-gg-192x192.png" sizes="192x192">
    <title><?php echo isset($title) ? $title : 'Lẩu Wang - Vua Buffet Lẩu - Hệ Thống Chuỗi Nhà Hàng Buffet Hà Nội' ?></title>
</head>
<style>
    @media screen and (max-width: 1278px){
        
    }
</style>
<body>
    <!-- header -->
    <div class="header">
        <div class="container header__content">
            <div class="header_left">
                <a href="">
                    <img src="./assets/img/logo-Lẩu-Wang-01.png" alt="" style="width:150px">
                </a>
            </div>
            <div class="header_center">
                <ul class="header__menu">
                    <li class="header__menu-item"><a href="">Trang Chủ</a></li>
                    <li class="header__menu-item"><a href="gioi-thieu/">Giới Thiệu</a></li>
                    <li class="header__menu-item"><a href="thuc-don/">Thực Đơn</a></li>
                    <li class="header__menu-item"><a href="uu-dai/">Ưu Đãi</a></li>
                    <li class="header__menu-item"><a href="dat-ban/">Đặt Bàn</a></li>
                    <li class="header__menu-item"><a href="blog/">Blog</a></li>
                </ul>
            </div>
            <div class="header_right">
                <div class="header-icon">
                    <a href="https://www.facebook.com/buffetlauwang" target="_blank">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://www.instagram.com/lauwang.buffet/" target="_blank">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://www.youtube.com/channel/UCFgIrScG4krCGh7eCPz8DnA/videos" target="_blank">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
            <div class="header__mobile">
                <div class="header__mobile-left">
                    <label for="mobile"><i class="fas fa-align-justify"></i></label>
                    <input type="checkbox" id="mobile" hidden style="display: none;">
                    <label for="mobile" class="opacity">
                        <ul>
                            <li class="mobile__logo"><a href=""><img src="./assets/img/logo-Lẩu-Wang-01.png" alt=""></a></li>
                            <li>
                                <ul>
                                    <li class="mobile__children"><a href="">Trang chủ</a></li>
                                    <li class="mobile__children"><a href="gioi-thieu/">Giới thiệu</a></li>
                                    <li class="mobile__children"><a href="thuc-don/">Thực đơn</a></li>
                                    <li class="mobile__children"><a href="uu-dai/">Ưu đãi</a></li>
                                    <li class="mobile__children"><a href="dat-ban/">Đặt bàn</a></li>
                                    <li class="mobile__children"><a href="blog/">Blog</a></li>
                                </ul>
                            </li>
                            <li class="mobile__icon">
                                <div class="header-icon">
                                    <a href="https://www.facebook.com/buffetlauwang" target="_blank">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="https://www.instagram.com/lauwang.buffet/" target="_blank">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                    <a href="https://www.youtube.com/channel/UCFgIrScG4krCGh7eCPz8DnA/videos" target="_blank">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </label>
                </div>
                <div class="header__mobile-center">
                    <a class="btn" href="">
                        <img src="./assets/img/gg.png" alt="">
                    </a>
                </div>
                <div class="header_node">
                    <a class="btn" href="dat-ban/">Đặt bàn</a>
                </div>
            </div>
        </div>
    </div>
    <!-- end header -->
    <!-- container -->
    <!-- Xử lý chuyển trang -->
    <?php
    switch ($action):
        case 'introduce':
            echo '<div class="margin-top-180"></div>';
            require_once "./modules/introduce/introduce.php";
            break;
        case 'menu':
            echo '<div class="margin-top-180"></div>';
            require_once "./modules/menu/menu.php";
            break;
        case 'put_table':
            echo '<div class="margin-top-180"></div>';
            require_once "./modules/put_table/put_table.php";
            echo '<div class="margin-top-60"></div>';
            $title = 'Đặt bàn - Lẩu Wang';
            break;
        case 'endow':
            require_once "./modules/endow/endow.php";
            $title = 'Đặt bàn - Lẩu Wang';
            break;
        case 'blog':
            require_once "./modules/blog/blog.php";
            break;
        default:
            $title = 'Lẩu Wang - Vua Buffet Lẩu - Hệ Thống Chuỗi Nhà Hàng Buffet Hà Nội';
            require_once "./modules/homepage/home.php";
            echo '<div class="margin-top-180"></div>';
    endswitch;
    ?>
    <!-- kết thúc xử lý -->
    <!-- end container -->
    <!-- phần footer -->
    <footer class="footer">
        <div class="grid">
            <div class="gird__now-footer">
                <div>
                    <h3 class="footer_heading">Lẩu Wang – Vua Buffet Lẩu</h3>
                    <ul class="footer_list">
                        <li class="footer-item">
                            <span class="footer-item-link"><strong>Hotline</strong>: 1900 0081</span>
                        </li>
                        <li class="footer-item">
                            <span class="footer-item-link">Lẩu Wang là hệ thống chuỗi nhà hàng buffet lẩu tại Hà Nội được đánh giá cao về chất lượng và giá cả. Buffet tại Lẩu Wang gồm: 119K – 159K – 189K, khách hàng sẽ được thưởng thức tới gần 50 món ăn từ ba chỉ bò Mỹ, hải sản tổng hợp, khai vị hấp dẫn với Cá chiên hoàng bào, Ghẹ sữa rang muối, Ngao xào sốt Thái cùng vô vàn những món ăn, thức uống hấp dẫn khác…</span>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="footer_heading">Hệ thống cơ sở Lẩu Wang</h3>
                    <ul class="footer_list">
                        <li class="footer-item">
                            <i class="fas fa-map-marker-alt iconAdress"></i>
                            <span class="footer-item-link"><strong>Cơ sở 1</strong>: 134 Trần Đại Nghĩa, HBT, Hà Nội </span>
                        </li>
                        <li class="footer-item">
                            <i class="fas fa-map-marker-alt iconAdress"></i>
                            <span class="footer-item-link"><strong>Cơ sở 3</strong>: Số 21 đường 19/5, Hà Đông, Hà Nội</span>
                        </li>
                        <li class="footer-item">
                            <i class="fas fa-map-marker-alt iconAdress"></i>
                            <span class="footer-item-link"><strong>Cơ sở 4</strong>: 17 Tam Khương, Đống Đa, Hà Nội</span>

                        </li>
                        <li class="footer-item">
                            <i class="fas fa-map-marker-alt iconAdress"></i>
                            <span class="footer-item-link"><strong>Cơ sở 5</strong>: 81B Nguyễn Khang, Cầu Giấy, Hà Nội</span>
                        </li>
                        <li class="footer-item">
                            <i class="fas fa-map-marker-alt iconAdress"></i>
                            <span class="footer-item-link"> <strong>Cơ sở 7</strong>: 51A Hồ Tùng Mậu, Cầu Giấy, Hà Nội</span>
                        </li>
                        <li class="footer-item">
                            <i class="fas fa-map-marker-alt iconAdress"></i>
                            <span class="footer-item-link"> <strong>Cơ sở 8</strong>: 143 Trâu Quỳ, Gia Lâm, Hà Nội</span>
                        </li>
                    </ul>
                </div>
                <div>
                    <h3 class="footer_heading">Theo dõi chúng tôi</h3>
                    <ul class="footer_list">
                        <li class="footer-item">
                            <span class="footer-item-link"> Theo dõi chúng tôi tại các trang thông tin</span>
                        </li>
                        <div class="footer_list-contact">
                            <li class="footer-item-contact">
                                <a href="https://www.facebook.com/buffetlauwang" target="_blank" class="footer-item-links">
                                    <i class="footer-item-icon fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="footer-item-contact">
                                <a href="https://www.instagram.com/lauwang.buffet/" target="_blank" class="footer-item-links">
                                    <i class="footer-item-icon fab fa-instagram"></i>
                                </a>
                            </li>
                            <li class="footer-item-contact">
                                <a href="https://www.youtube.com/channel/UCFgIrScG4krCGh7eCPz8DnA/videos" target="_blank" class="footer-item-links">
                                    <i class="footer-item-icon fab fa-youtube"></i>
                                </a>
                            </li>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer_bottom">
            <div class="grid_footer">
                <span class=""> <a href="dat-ban/" class=" grid__row-from ">Đặt Bàn</a> </span>
                <span class="."> <a href="tuyen-dung/" class=" grid__row-from ">Tuyển Dụng</a> </span>
                <span class="."> <a class=" grid__row-from ">Liên Hệ</a> </span>
            </div>
        </div>
    </footer>
    <!-- end footer -->
    <?php require_once "./modules/script/script.php"?>
</body>

</html>
