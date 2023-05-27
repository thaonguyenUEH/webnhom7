<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script>
    // Hàm thực thi khi chọn kiểu sắp xếp giá
  // Gửi request về backend để truy vấn sản phẩm theo kiểu sắp xếp và id được qui định
    function performSort(id) {
      const xhttp = new XMLHttpRequest();
      xhttp.onload = function () {
        // In kết quả nhận được từ back-end
        // console.log(this.responseText);
      }

      var e = document.getElementById("sort_order");
      var value = e.value;
      let url = "index.php?quanly=danhmucsanpham&id=".concat(id, "&sort_order=".concat(value));
      xhttp.open("GET", url, true);
      xhttp.send();
    }
  </script>
</head>

<body>

  <?php
  $id = $_GET['id'];

  // Kiểm tra xem 'sort_order' đã được chọn hay chưa
  $sort_order = isset($_GET['sort_order']) ? $_GET['sort_order'] : "";

  $order = ""; // Biến lưu trữ thứ tự sắp xếp
  
  // Kiểm tra giá trị được chọn từ combobox và đặt thứ tự sắp xếp tương ứng
  if ($sort_order == "asc") {
    $order = "ASC"; // Sắp xếp tăng dần
  } elseif ($sort_order == "desc") {
    $order = "DESC"; // Sắp xếp giảm dần
  } else {
    $order = "ASC";
  }

  // Truy vấn
  $sql_pro = "SELECT * FROM tbl_sanpham WHERE tbl_sanpham.id_dm=$id ORDER BY gia $order";
  $query_pro = mysqli_query($mysqli, $sql_pro);
  
  // Chuyển kết quả truy vấn sql thành mảng
  $myArray = array();
  while ($row = $query_pro->fetch_assoc()) {
    $myArray[] = $row;
  }

  // Trả về kết quả cho front-end
  // echo json_encode($myArray);
  ?>

  <select name="sort_order" id="sort_order" onchange="performSort(<?php echo $id; ?>);">
    <option value="none">Chọn thứ tự sắp xếp</option>
    <option value="asc">Giá tăng dần</option>
    <option value="desc">Giá giảm dần</option>
  </select>

  <ul class="container product_list">
    <?php
    $query_pro = mysqli_query($mysqli, $sql_pro);

    // Hiển thị các mặt hàng với danh sách mặt hàng cho trước
    function render($query_pro_array)
    {

      $count = 0;

      foreach ($query_pro_array as $row_pro) {
        $count++;
        // Nếu sản phẩm là sản phẩm đầu tiên của hàng thì bắt đầu một hàng mới
        if ($count % 3 == 1) {
          echo '<div class="row">';
        }
        ?>

        <div class="col-md-4">
          <a href="index.php?quanly=sanpham&id=<?php echo $row_pro['id'] ?>">
            <img src="<?php echo $row_pro['anh'] ?>" alt="" class="zoom">
            <p class="tittle_product">
              <?php echo $row_pro['ten'] ?> <br />
              <span style="display: inline-block; margin-right: 5px; color: red;">
                <?= number_format($row_pro['gia'], 0, ",", ".") ?>
                <sup>đ</sup>
              </span>
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
    }

    render($myArray);
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
      <li> <a target="_blank" href="https://zalo.me/0785766878"><i class="fa-solid fa-comments"
            style="color: #ffffff;"></i></a>
        <!-- <span class="aml-text-content aml-tooltiptext">Chat ngay</span> -->
      </li>

    </ul>
  </div>


</body>

</html>