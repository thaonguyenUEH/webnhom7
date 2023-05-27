<?php
    $id = $_GET['id'];
    $sql_pro = "SELECT *FROM tbl_sanpham, tbl_danhmuc WHERE tbl_sanpham.id_dm=tbl_danhmuc.id_dm ORDER BY tbl_sanpham.id DESC LIMIT 25";
    $query_pro = mysqli_query($mysqli,$sql_pro);
?>

<h3>Sản phẩm mới nhất</h3>
<ul class="product_list">
    <?php
    while($row = mysqli_fetch_array($query_pro)){
        ?>
        <li>
        <div class="cartegory-right-content-item">
            <a href="index.php?quanly=sanpham&id=<?php echo $row['id']?>">
                        <img src="<?php echo $row['anh']?>"
                            alt="" class="zoom">

                        <h8><p class="tittle_product"><?php echo $row['ten']?></p></h8>
                        <br>
                        <span
                            style="display: inline-block; margin-right: 5px; color: red;"><?php echo $row['gia']?><sup>đ</sup></span>
                    </div>
    </li>
        
        <?php
    }
    ?>
    </ul>
    