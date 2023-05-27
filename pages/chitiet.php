<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
        integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous">
    </script>

    <script src="https://kit.fontawesome.com/76ce7bfb1d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.3/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="pages/style.css" />

    <title>đồ án</title>
</head>

<body>
    <?php
 $id = $_GET['id'];
$sql_chitiet="SELECT*FROM tbl_sanpham WHERE tbl_sanpham.id=$id LIMIT 1";
$query_chitiet=mysqli_query($mysqli,$sql_chitiet);
while($row_chitiet=mysqli_fetch_array($query_chitiet)){
?>
    <!-- Phần chi tiết sản phẩm -->
    <section class="product">
        <div class="container">
            <div class="product-content">
                <div class="product-content-left">
                    <div class="prod-content">
                        <div class="product-content-left-big-img">
                            <img src="<?php echo $row_chitiet['anh']?>" alt="" class="zoom">
                        </div>
                        <div class="product-content-left-small-img">
                            <img src="https://nestvui.com/wp-content/uploads/2022/09/hop-huyet-yen-tinh-che.jpg" alt="">
                            <img src="https://nestvui.com/wp-content/uploads/2021/11/to-yen-sao-thien-nhiien-tinh-che-50g.jpg"
                                alt="" style="margin-top: 12px; margin-bottom: 12px;">
                            <img src="https://nestvui.com/wp-content/uploads/2022/08/chan-yen-huyet-tinh-che-100g-2.jpg"
                                alt="">
                        </div>
                    </div>
                    <img style="max-width: 100%; height: auto; margin-top: 20px;"
                        src="https://nestvui.com/wp-content/uploads/2022/08/giay-ket-qua-thu-nghiem-yen-nestvui.jpg">
                </div>
                <div class="product-content-right">
                    <div class="product-content-right-product-name">
                        <h1><?php echo $row_chitiet['ten']?></h1>
                        <p>MSP: <?php echo $row_chitiet['id']?></p>
                    </div>
                    <div class="product-content-right-product-price">
                        <p><?= number_format($row_chitiet['gia'],0,",",".")?><sup>đ</sup></p>
                    </div>
                    <div class="icon-box featured-box icon-box-left text-left" style="margin:auto;">
                        <div class="icon-box-img">
                            <div class="icon-1 row">
                                <div class="icon-inner">
                                    <img width="70" height="20"
                                        src="https://nestvui.com/wp-content/uploads/2022/02/Du-an-moi-2-1.png"
                                        class="attachment-medium size-medium" alt="" loading="lazy">
                                </div>
                                <div class="icon-box-text last-reset">
                                    <p><span style="font-size: 75%; color: #000000;">Miễn phí vận chuyển toàn
                                            quốc</span><br><span style="font-size: 75%; color: #808080;">Áp dụng cho đơn
                                            hàng từ 2.000.000₫</span></p>
                                </div>

                            </div>
                        </div>

                        <div class="icon-box featured-box icon-box-left text-left" style="margin:auto;">
                            <div class="icon-box-img">
                                <div class="icon-2 row">
                                    <div class="icon-inner">
                                        <img width="70" height="20"
                                            src="https://nestvui.com/wp-content/uploads/2022/02/Du-an-moi-3.png"
                                            class="attachment-medium size-medium" alt="" loading="lazy">
                                    </div>
                                    <div class="icon-box-text last-reset">
                                        <p><span style="font-size: 75%; color: #000000;">Miễn phí giao hàng hỏa
                                                tốc</span><br><span style="font-size: 75%; color: #808080;">Áp dụng tại
                                                TP.HCM cho đơn hàng từ 2.000.000₫</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="quantity">
                            <p style="font-weight: bold;">Số lượng:</p>
                            <input type="number" min="0" value="1">
                        </div>
                        <div class="product-content-right-product-button">
                            <button>
                                <p>THÊM VÀO GIỎ HÀNG</p>
                            </button>
                            <button>
                                <p>MUA NGAY</p>
                            </button>
                        </div>

                        <div class="product-content-right-bottom">
                            <div class="product-content-right-bottom-top">
                                &#6662;
                            </div>
                            <div class="product-content-right-bottom-content-big">
                                <div class="product-content-right-bottom-content-title row">
                                    <div class="product-content-right-bottom-content-title-item chitiet">
                                        <p>THÔNG TIN CHI TIẾT</p>
                                    </div>
                                    <hr>
                                    <div class="product-content-right-bottom-content-title-item camket">
                                        <p>CAM KẾT</p>
                                    </div>
                                </div>
                                <div class="product-content-right-bottom-content">
                                    <div class="product-content-right-bottom-content-chitiet">
                                        <ul>
                                            <?php echo $row_chitiet['noidung']?>
                                        </ul>
                                    </div>
                                    <div class="product-content-right-bottom-content-camket">
                                        <div class="commitment-content">
                                            <div class="list-commitment">
                                                <div class="item-commitment">
                                                    <p>Hoàn tiền 200% nếu phát hiện hàng giả, hàng nhái.</p>
                                                </div>
                                                <div class="item-commitment">
                                                    <p>Chuyên gia tư vấn trực tiếp qua hotline/zalo: 0947.180.202</p>
                                                </div>
                                                <div class="item-commitment">
                                                    <p>Tuyệt đối không chia sẻ thông tin khách hàng cho bên thứ 3.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <?php
}
?>

                    </div>



                </div>
    </section>

    <div class="container section-title-container">
        <h5 class="section-title section-title-center">

            <span class="section-title-main" style="font-size:18px; color: #cf0909;">
                <b>SẢN PHẨM TƯƠNG TỰ</b>
            </span>
        </h5>
    </div>
    <div class="container">
        <!-- Tạo slideshow sản phẩm -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-3">
                            <a href="index.php?quanly=sanpham&id=9">
                                <img src="https://nestvui.com/wp-content/uploads/2022/08/hop-yen-dao-tho-nguyen-chat.jpg"
                                    class="zoom">
                                <h1>Yến đảo (đá) THÔ loại thượng hạng 20g</h1>
                                <p>630.000<sup>đ</sup></p>
                        </div>
                        <div class="col-md-3">
                            <a href="index.php?quanly=sanpham&id=25">
                                <img src="https://nestvui.com/wp-content/uploads/2022/09/hop-yen-nha-tinh-che-100g.jpg"
                                    class="zoom">
                                <h1>Yến Làm Sạch Loại 1 100g</h1>
                                <p>4.300.000<sup>đ</sup></p>
                        </div>
                        <div class="col-md-3">
                            <a href="index.php?quanly=sanpham&id=32">
                                <img src="https://nestvui.com/wp-content/uploads/2022/09/hop-yen-dao-tho-100g.jpg"
                                    class="zoom">
                                <h1>Yến Tinh Chế Loại 1 (Hộp 100g) – Gỗ</h1>
                                <p>3.590.000<sup>đ</sup></p>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="index.php?quanly=sanpham&id=38">
                                <img src="https://nestvui.com/wp-content/uploads/2022/09/hop-yen-dao-tho-100g.jpg"
                                    class="zoom">
                                <h1>Chân Huyết Yến TINH CHẾ Cao Cấp 50g</h1>
                                <p>2.495.000<sup>đ</sup></p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-3">
                            <a href="index.php?quanly=sanpham&id=23">
                                <img src="https://nestvui.com/wp-content/uploads/2022/08/chan-huyet-yen-tho-20g.jpg"
                                    class="zoom">
                                <h1>Chân Yến Huyết THÔ Cao Cấp 20g</h1>
                                <p>750.000<sup>đ</sup></p>
                        </div>
                        <div class="col-md-3">
                            <a href="index.php?quanly=sanpham&id=35">
                                <img src="https://nestvui.com/wp-content/uploads/2022/09/hop-to-huyet-yen-tho-100g.jpg"
                                    class="zoom">
                                <h1>Huyết Yến TINH CHẾ Cao Cấp 100g – Thượng Hạng</h1>
                                <p>5.390.000<sup>đ</sup></p>
                        </div>
                        <div class="col-md-3">
                            <a href="index.php?quanly=sanpham&id=38">
                                <img src="https://nestvui.com/wp-content/uploads/2022/08/chan-yen-huyet-tinh-che-50g.jpg"
                                    class="zoom">
                                <h1>Yến Huyết Thô Cao Cấp 20g</h1>
                                <p>2.690.000<sup>đ</sup></p>
                        </div>
                        <div class="col-md-3">
                            <a href="index.php?quanly=sanpham&id=36">
                                <img src="https://nestvui.com/wp-content/uploads/2022/08/chan-yen-huyet-tinh-che-50g-1.jpg"
                                    class="zoom">
                                <h1>Chân Huyết Yến TINH CHẾ Cao Cấp 40g</h1>
                                <p>2.495.000<sup>đ</sup></p>
                        </div>

                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    </div>

    </div>
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
<script type="text/javascript" src="js/chitiet.js"></script>

</html>