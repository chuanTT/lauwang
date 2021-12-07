<div class="header">
    <div class="container dflexCenter header__content">
        <div class="header__left">
            <ul class="header__left-nav dflexCenter">
                <li class="header__left-item <?=$status=='Desk_Manager'?'active-nav':false?>">
                    <a href="?status=Desk_Manager">Quản Lý Đặt Bàn</a>
                </li>
                <li class="header__left-item <?=$status=='Menu_management'?'active-nav':false?>">
                    <a href="?status=Menu_management">Quản Lý Thực Đơn</a>
                </li>
                <li class="header__left-item <?=$status=='News_management'?'active-nav':false?>">
                    <a href="?status=News_management">Quản Lý Tin Tức</a>
                </li>
                <li class="header__left-item <?=$status=='employee_manager'?'active-nav':false?>">
                    <a href="?status=employee_manager">Quản Lý Nhân Viên</a>
                </li>
            </ul>
        </div>
        <div class="header__right">
            <div class="header__right-user dflexCenter">
                <div class="user-img">
                    <?php 
                        $sql = 'SELECT avatar FROM nhanvien WHERE nhanvien.userName = "'.$_SESSION['user'].'"';
                        $item = renderViews($sql,true);
                    ?>
                    <img src="<?=BASEURL.$item['avatar']?>" width="50" alt="">
                </div>
                <div class="user-name">
                    <span><?=$_SESSION['FullName']?></span>
                    <span>
                        <i class="fas fa-sort-down"></i>
                    </span>
                    <ul class="user-name-nav">
                        <li class="user-name-nav-item">
                            <a href="?status=profile&profile=<?=$_SESSION['user']?>">Thông tin tài khoản</a>
                        </li>
                        <li class="user-name-nav-item">
                            <a href="?action=logout">Đăng xuất</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>