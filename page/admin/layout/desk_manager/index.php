<?php 
    if(isset($_GET['act'])) {
        require_once "addTable.php";
    } else {?>
        <!-- Phần đã duyệt bàn và bàn trống -->
        <?php require "table_search.php"?>
        <!-- //Phần đã duyệt bàn và bàn trống -->
        <div class="margin-top-40"></div>
        <!-- phần Chờ duyệt bàn -->
        <?php require_once "order.php"?>
        <!-- // phần Chờ duyệt bàn -->
    <?php }
?>
