<div id="main">
    <div class="maincontent">
        <?php
        if (isset($_GET['quanly'])) {
            $tam = $_GET['quanly'];
        } else {
            $tam = '';
        }
        if ($tam == 'trangchu') {
            include("pages/trangchu.php");
        } elseif ($tam == 'danhmucsanpham') {
            include("pages/danhmuc.php");
            // }elseif($tam=='toyensao'){
            //     include("pages/toyensao.php");
            // }elseif($tam=='yentinhche'){
            //     include("pages/yentinhche.php");
            // }elseif($tam=='toyentho'){
            //     include("pages/toyentho.php");
        } elseif ($tam == 'vechungtoi') {
            include("pages/vechungtoi.php");
        } elseif ($tam == 'timkiem') {
            include("pages/timkiem.php");
        } elseif ($tam == 'sanpham') {
            include("pages/chitiet.php");
        } else {
            include("pages/trangchu.php");
        }