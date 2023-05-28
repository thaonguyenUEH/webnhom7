<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<ul class="container product_list">
  
<select name="sort_order" onchange="this.form.submit()">
  <option value="">Chọn thứ tự sắp xếp</option>
  <option value="asc">Giá tăng dần</option>
  <option value="desc">Giá giảm dần</option>
</select>
<?php
$id = $_GET['id'];
$sort_order = isset($_GET['sort_order']) ? $_GET['sort_order'] : ""; // Kiểm tra xem 'sort_order' đã được truyền hay chưa

$order = ""; // Biến lưu trữ thứ tự sắp xếp

// Kiểm tra giá trị được chọn từ combobox và đặt thứ tự sắp xếp tương ứng
if ($sort_order == "asc") {
  $order = "ASC"; // Sắp xếp tăng dần
} elseif ($sort_order == "desc") {
  $order = "DESC"; // Sắp xếp giảm dần
}

$sql_pro = "SELECT * FROM tbl_sanpham WHERE tbl_sanpham.id_dm=$id ORDER BY gia $order";
$query_pro = mysqli_query($mysqli, $sql_pro);


 ?>

<?php
  $count = 0;
  while ($row_pro = mysqli_fetch_array($query_pro)) {
    $count++;
    if ($count % 3 == 1) { // Nếu sản phẩm là sản phẩm đầu tiên của hàng thì bắt đầu một hàng mới
      echo '<div class="row">';
    }
    ?>

<div class="col-md-4">
        <a href="index.php?quanly=sanpham&id=<?php echo $row_pro['id']?>">
            <img src="<?php echo $row_pro['anh']?>" alt="" class="zoom">
            <p class="tittle_product"><?php echo $row_pro['ten']?> <br /> <span
                    style="display: inline-block; margin-right: 5px; color: red;"><?= number_format($row_pro['gia'],0,",",".")?><sup>đ</sup></span>
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


    
      <!-- chỗ chat ngay gọi ngay -->
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
    
