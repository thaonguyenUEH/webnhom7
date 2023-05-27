<?php
    if(isset($_POST['timkiem'])){
        $tukhoa = $_POST['tukhoa'];
    }
    $result = "SELECT *FROM tbl_sanpham WHERE tbl_sanpham.id AND tbl_sanpham.ten LIKE '%".$tukhoa."%'";
    // Cau lenh lay du lieu len
    $result = mysqli_query($mysqli,$result);
?>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<ul class="container product_list">
<?php
  $count = 0;
  //Hiển thị từng dòng
  while ($row = mysqli_fetch_array($result)) {
    $count++;
    if ($count % 3 == 1) { // Nếu sản phẩm là sản phẩm đầu tiên của hàng thì bắt đầu một hàng mới
      echo '<div class="row">';
    }
    ?>

<div class="col-md-4">
        <a href="index.php?quanly=sanpham&id=<?php echo $row['id']?>">
            <img src="<?php echo $row['anh']?>" alt="" class="zoom">
            <p class="tittle_product"><?php echo $row['ten']?> <br /> <span
                    style="display: inline-block; margin-right: 5px; color: red;"><?= number_format($row['gia'],0,",",".")?><sup>đ</sup></span>
            </p>
        </a>
    </div>


<?php
    if ($count % 3 == 0) { // Nếu sản phẩm là sản phẩm cuối cùng của hàng thì kết thúc hàng
      echo '</div>';
    }
  }
  if ($count % 3 != 0) { // Nếu số sản phẩm không chia hết cho 3 thì kết thúc hàng cuối cùng
    echo '</div>';
  }
  ?>
</ul>
<div class="fixed-tool">
        <ul>
            <li>
            <a href="tel:0931033987"><i class="fas fa-phone-alt" style="color: #ffffff;"></i></a>
            <!-- <span class="aml-text-content aml-tooltiptext">Gọi ngay</span> -->
            </li>
        <hr>
            <li> <a target="_blank" href="https://zalo.me/0785766878"><i class="fa-solid fa-comments" style="color: #ffffff;"></i></a>
                <!-- <span class="aml-text-content aml-tooltiptext">Chat ngay</span> -->
            </li>           
            
        </ul>													
    </div>
    