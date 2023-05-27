<?php
$sql_danhmuc = "SELECT*FROM tbl_danhmuc ORDER BY id_dm DESC";
$query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);

?>

<div class="Nhom7">
    <!-- <div class="menu-button">
        <span class="fas fa-bars"></span>
    </div> -->
    <div class="dropdown-btn">
        <i class="fas fa-bars"></i>
    </div>

    <div class="dropdown-content">
        <div class="drop_findpro">
            <form action="index.php?quanly=timkiem" method="POST">
                <li><input placeholder="Tìm kiếm" type="text" name="tukhoa">
                    <input type="submit" name="timkiem" value="Tìm kiếm"></i>
                </li>
            </form>

        </div>
        <div class="drop_menu">
            <!-- <li><a href="index.php?quanly=trangchu">TRANG CHỦ</a></li> -->
            <?php
            while($row_danhmuc=mysqli_fetch_array($query_danhmuc)){
            ?>
            <li><a style="color:rgb(186, 41, 41); font-size:18px;  font-weight: bold;" 
            href="index.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['id_dm']?>"><?php echo $row_danhmuc['ten']?></a>
            </li>
            <?php
            }
            ?>
            <li><a href="index.php?quanly=vechungtoi" style="color:rgb(186, 41, 41); font-size:18px;  font-weight: bold;" >Về chúng tôi</a></li>
        </div>
    </div>

    <!-- Menu me -->
    <div class="menu">
        <?php
        $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
        while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
            ?>
            <li>
                <a style="color:rgb(186, 41, 41); font-size:18px;"
                    href="index.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['id_dm'] ?>">
                    <?php echo $row_danhmuc['ten'] ?>
                </a>
            </li>
            <?php
        }
        ?>
        <li><a href="index.php?quanly=vechungtoi" style="color:rgb(186, 41, 41); font-size:18px;">Về chúng tôi</a></li>
    </div>
    <!-- Logoweb -->
    <div class="logo">
        <a href="index.php?quanly=trangchu">
            <img src="https://nestvui.com/wp-content/uploads/2021/11/logo-nest-vui.png" width=90px; height="90px" ;>
        </a>
    </div>
    <!-- Tìm kiếm Product -->
    <div class="findpro">
        <form action="index.php?quanly=timkiem" method="POST">
            <li><input placeholder="Tìm kiếm" type="text" name="tukhoa">
                <input type="submit" name="timkiem" value="Tìm kiếm"></i>
            </li>
        </form>
        <li><a style="color:black;" class="fas fa-headset" href=""></a></li>
        <li><a style="color:black;" class="fa-solid fa-user" href=""></a></li>
        <li><a style="color:black;" class="fas fa-shopping-basket" href=""></a></li>
    </div>
    <div class="header-services">
        <li><a class="fas fa-headset"></a></li>
        <li><a class="fa-solid fa-user"></a></li>
        <li><a class="fas fa-shopping-basket"></a></li>
    </div>
</div>

</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $(".dropdown-btn").click(function () {
            $(this).toggleClass("active");
        });
    });
</script>
<script src="https://kit.fontawesome.com/76ce7bfb1d.js" crossorigin="anonymous"></script>

</html>