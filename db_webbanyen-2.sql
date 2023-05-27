-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 22, 2013 at 11:50 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE=NO_AUTO_VALUE_ON_ZERO;


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_webbanyen`
--
CREATE DATABASE `db_webbanyen` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `db_webbanyen`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_danhmuc`
--

CREATE TABLE IF NOT EXISTS `tbl_danhmuc` (
  `id_dm` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_dm`),
  UNIQUE KEY `ten` (`ten`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`id_dm`, `ten`) VALUES
(1, 'Tổ yến sào'),
(2, 'Tổ yến thô'),
(3, 'Yến tinh chế');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sanpham`
--

CREATE TABLE IF NOT EXISTS `tbl_sanpham` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `anh` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `gia` int(11) NOT NULL,
  `noidung` text COLLATE utf8_unicode_ci NOT NULL,
  `id_dm` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ten` (`ten`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=19 ;

--
-- Dumping data for table `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id`, `ten`, `anh`, `gia`,`noidung`,`id_dm`) VALUES
(1,'Yến tinh chế thượng hạng 10g','https://nestvui.com/wp-content/uploads/2022/09/hop-to-yen-dao-tinh-che-100g-thuong-hang.jpg',4290000,'Yến đảo thiên nhiên tinh chế thượng hạng – Làm sạch 100%
Tổ yến vẫn giữ được hình dạng nguyên tổ sợi phồng.
Khai thác từ thiên nhiên 100% – Trọng lượng: 100g
Tiện dụng để sử dụng ngay, tiết kiệm thời gian sơ chế.
Liên hệ tư vấn: 090.995.88.78',1),
(2,'Huyết yến tinh chế thượng hạng 100g','https://nestvui.com/wp-content/uploads/2022/09/hop-to-yen-dao-tinh-che-100g-thuong-hang.jpg',6290000,'Khai thác từ đảo thiên nhiên 100% – Địa hình hiểm trở
Huyết yến được tinh chế làm sạch lông và tạp chất 100% với quy trình chuẩn ISO.
Giữ nguyên vị yến và hàm lượng dinh dưỡng đến 99%.
Quy cách đóng gói hộp 100g yến tinh chế.',1),
(3,'Yến đảo (đá) tinh chế Hộp 20g','https://nestvui.com/wp-content/uploads/2022/09/hop-yen-huyet-tho-50g.jpg',850000,'Yến tinh chế thượng hạng Nest Vui khai thác từ tự nhiên với địa hình hiểm trở đã xử lý và làm sạch
Tổ yến vẫn giữ được hình dạng nguyên tổ sợi phồng.
Quy cách đóng gói hộp 20g yến + 20g đường phèn + 20g táo đỏ
Tiện dụng để sử dụng ngày, tiết kiệm thời gian sơ chế.
Liên hệ tư vấn: 0931.033.987 hoặc 0785.766.878',1),
(4,'Hồng yến tinh chế Hộp 20g','https://nestvui.com/wp-content/uploads/2022/09/hop-yen-nha-tinh-che-100g.jpg',1350000,'Khai thác từ đảo thiên nhiên 100% – Địa hình hiểm trở
Hồng yến được tinh chế làm sạch lông và tạp chất 100% với quy trình chuẩn ISO.
Giữ nguyên vị yến và hàm lượng dinh dưỡng đến 99%.
Quy cách đóng gói hộp 20g yến tinh chế.',1),
(5,'Huyết yến tinh chế 20g','https://nestvui.com/wp-content/uploads/2022/09/hop-huyet-yen-tho-100g-cao-cap.jpg',1900000,'Khai thác từ đảo thiên nhiên 100% – Địa hình hiểm trở
Huyết yến được tinh chế làm sạch lông và tạp chất 100% với quy trình chuẩn ISO.
Giữ nguyên vị yến và hàm lượng dinh dưỡng đến 99%.
Quy cách đóng gói hộp 20g yến tinh chế.',1),
(6,'Yến tinh chế nguyên tổ 20g','https://nestvui.com/wp-content/uploads/2022/09/hop-yen-dao-tho-100g.jpg',595000,'Yến tinh chế nguyên tổ đã xử lý và làm sạch
Tổ yến vẫn giữ được hình dạng nguyên tổ sợi phồng.
Quy cách đóng gói hộp 20g yến + 20g đường phèn + 20g táo đỏ
Tiện dụng để sử dụng ngày, tiết kiệm thời gian sơ chế.
Liên hệ tư vấn: 0931.033.987 hoặc 0785.766.878',1),
(7,'Hồng yến tinh chế (Hộp 100g)','https://nestvui.com/wp-content/uploads/2022/09/hop-huyet-yen-tinh-che.jpg',4390000,'Khai thác từ đảo thiên nhiên 100% – Địa hình hiểm trở
Hồng yến được tinh chế làm sạch lông và tạp chất 100% với quy trình chuẩn ISO.
Giữ nguyên vị yến và hàm lượng dinh dưỡng đến 99%.
Quy cách đóng gói hộp 100g yến tinh chế.',1),
(8,'Yến tinh chế cao cấp 100g','https://nestvui.com/wp-content/uploads/2022/09/hop-to-huyet-yen-tho-100g.jpg',2390000,'Yến tinh chế cao cấp – Làm sạch 100%
Tổ yến vẫn giữ được hình dạng nguyên tổ sợi phồng.
Khai thác từ thiên nhiên 100% – Trọng lượng: 100g
Tiện dụng để sử dụng ngay, tiết kiệm thời gian sơ chế.
Liên hệ tư vấn: 090.995.88.78',1),
(9,'Yến đảo (đá) THÔ loại thượng hạng 20g','https://nestvui.com/wp-content/uploads/2022/08/hop-yen-dao-tho-nguyen-chat.jpg',630000,'Khai thác từ thiên nhiên 100% – Trọng lượng: 20g
Tổ yến đảo thô còn nguyên tổ và lông, đảm bảo giữ nguyên giá trị dinh dưỡng
Tổ yến đảo thô nguyên tổ 20g vẫn có vị tanh nhẹ đặc trưng của yến.
Sản phẩm đã trải qua quá trình sấy khô trước khi đóng gói.',2),
(10,'Yến đảo (đá) THÔ loại thượng hạng 50g','https://nestvui.com/wp-content/uploads/2021/11/yen-dao-tho-thuong-hang-50g-nguyen-to-510x510.jpg',1575000,'Khai thác trên các vách đá, đảo tự nhiên – Tai yến to, dày
Tổ yến nguyên tổ, còn lông chim yến và có màu hơi ngả vàng
Sau quá trình làm sạch để chưng yến sẽ có vị tanh đặc trưng
Quy cách đóng tổ yến thô hộp 50g gồm 6 – 7 tai yến/hộp
Liên hệ tư vấn: 090.995.88.78',2),
(11,'Yến đảo (đá) THÔ loại thượng hạng 100g','https://nestvui.com/wp-content/uploads/2022/09/hop-yen-dao-tho-100g.jpg',3150000,'Yến thô khai thác tự nhiên tại vách núi, hang động tại Ninh Thuận, Khánh Hòa.
Tổ yến thô tự nhiên loại đặc biệt được chọn lọc theo tiêu chuẩn khắt khe.
Tổ yến dày và nhiều sợi và ít lông hơn hơn so với loại 2 và yến thô nhà nuôi loại 1.
Quy cách 10 – 12 tai yến thô nguyên tổ loại đặc biệt
Quy cách: hộp 100g – TẶNG KÈM: Nhiều sản phẩm chất lượng.',2),
(12,'Yến sào THÔ loại 2 (Hộp 100g)','https://nestvui.com/wp-content/uploads/2022/09/hop-to-yen-nha-tho-100g-loai-2.jpg',1550000,'Yến thô thu hoạch từ nhà yến có tuổi đời trên 15 năm
Tổ yến nhà thô loại 2 được chọn lọc theo tiêu chuẩn khắt khe ISO.
Sợi yến mỏng, hơn ngắn và có  mùi đặc trưng của yến
Quy cách 10 – 12 tai yến thô nhà nguyên tổ loại 2
Quy cách: hộp 100g – TẶNG KÈM: Nhiều sản phẩm chất lượng.',2),
(13,'Yến Thô Đá (Đảo) Loại Thượng Hạng 50g','https://nestvui.com/wp-content/uploads/2022/09/hop-yen-dao-tho-50g.jpg',1575000,'Khai thác trên các vách đá, đảo tự nhiên – Tai yến to, dày
Tổ yến nguyên tổ, còn lông chim yến và có màu hơi ngả vàng
Sau quá trình làm sạch để chưng yến sẽ có vị tanh đặc trưng
Quy cách đóng tổ yến thô hộp 50g gồm 6 – 7 tai yến/hộp
Liên hệ tư vấn: 090.995.88.78',2),
(14,'Yến sào THÔ loại 1 100g','https://nestvui.com/wp-content/uploads/2022/09/hop-to-huyet-yen-tho-100g.jpg',2495000,'Tổ yến thô còn nguyên tổ và lông chim yến, lồi lõm không đều.
Tổ yến sào thô loại 1 hộp 100g có vị yến tanh nhẹ đặc trưng.
Sản phẩm trải qua quy trình sấy khô trước khi đóng gói.
Một hộp 100g yến thô sẽ có khoảng 10 – 12 tổ yến.',2),
(15,'Yến Thô Đá (Đảo) Loại Thượng Hạng 100g','https://nestvui.com/wp-content/uploads/2022/09/hop-yen-dao-tho-100g.jpg',3150000,'Yến thô khai thác tự nhiên tại vách núi, hang động tại Ninh Thuận, Khánh Hòa.
Tổ yến thô tự nhiên loại đặc biệt được chọn lọc theo tiêu chuẩn khắt khe.
Tổ yến dày và nhiều sợi và ít lông hơn hơn so với loại 2 và yến thô nhà nuôi loại 1.
Quy cách 10 – 12 tai yến thô nguyên tổ loại đặc biệt
Quy cách: hộp 100g – TẶNG KÈM: Nhiều sản phẩm chất lượng.',2),
(16,'Huyết yến THÔ  cao cấp 100g','https://nestvui.com/wp-content/uploads/2022/08/hop-yen-dao-tho-nguyen-chat.jpg',3890000,'Khai thác từ đảo thiên nhiên 100% – Trọng lượng: 100g
Tổ yến huyết thô còn nguyên tổ và lông, đảm bảo giữ nguyên giá trị dinh dưỡng
Tổ yến huyết thô cao cấp 100g vẫn có vị tanh nhẹ đặc trưng của yến.
Sản phẩm đã trải qua quá trình sấy khô trước khi đóng gói.',2),
(17,'Hồng yến THÔ thượng hạng 20g','https://nestvui.com/wp-content/uploads/2022/09/hop-huyet-yen-tinh-che.jpg',1350000,'Khai thác từ thiên nhiên 100% – Trọng lượng: 20g
Tổ yến đảo thô còn nguyên tổ và lông, đảm bảo giữ nguyên giá trị dinh dưỡng
Tổ yến đảo thô nguyên tổ 20g vẫn có vị tanh nhẹ đặc trưng của yến.
Sản phẩm đã trải qua quá trình sấy khô trước khi đóng gói.',2),
(18,'Hồng yến THÔ (Hộp 100g)','https://nestvui.com/wp-content/uploads/2022/09/hop-huyet-yen-tho-100g-cao-cap.jpg',2390000,'Yến thô thu hoạch từ nhà yến có tuổi đời trên 15 năm
Tổ yến nhà thô loại 2 được chọn lọc theo tiêu chuẩn khắt khe ISO.
Sợi yến mỏng, hơn ngắn và có  mùi đặc trưng của yến
Quy cách 10 – 12 tai yến thô nhà nguyên tổ loại 2
Quy cách: hộp 100g – TẶNG KÈM: Nhiều sản phẩm chất lượng.',2),
(19,'Huyết yến THÔ loại 1 (Hộp 50g)','https://nestvui.com/wp-content/uploads/2022/09/hop-yen-nha-tinh-che-100g.jpg',3795000,'Khai thác từ thiên nhiên 100% – Trọng lượng: 50g
Tổ yến đảo thô còn nguyên tổ và lông, đảm bảo giữ nguyên giá trị dinh dưỡng
Tổ yến đảo thô nguyên tổ 20g vẫn có vị tanh nhẹ đặc trưng của yến.
Sản phẩm đã trải qua quá trình sấy khô trước khi đóng gói.',2),
(20,'Huyết yến đảo THÔ 100g','https://nestvui.com/wp-content/uploads/2022/09/hop-yen-huyet-tho-50g.jpg',7990000,'Hồng yến thô cao cấp 20g – Nhà phân phối NEST VUI
Tổ yến còn nguyên tổ, lông và có mùi tanh đặc trưng của yến
Khai thác từ đảo thiên nhiên 100% – giữ nguyên giá trị dinh dưỡng cao
Tặng kèm nhiều quà tặng chất lượng, giá trị dinh dưỡng cao',2),
(21,'Huyết yến THÔ 100g','https://nestvui.com/wp-content/uploads/2022/09/hop-yen-dao-tinh-che-thuong-hang.jpg',7990000,'Khai thác từ đảo thiên nhiên 100% – Trọng lượng: 100g
Tổ yến huyết thô còn nguyên tổ và lông, đảm bảo giữ nguyên giá trị dinh dưỡng
Tổ yến huyết thô cao cấp 100g vẫn có vị tanh nhẹ đặc trưng của yến.
Sản phẩm đã trải qua quá trình sấy khô trước khi đóng gói.',2),
(22,'Chân huyết yến THÔ cao cấp 50g','https://nestvui.com/wp-content/uploads/2022/08/chan-yen-huyet-tho-50g-2.jpg',1875000,'Chân yến huyết thô cao cấp 50g 
Chất lượng – bổ dưỡng – giá thành rẻ – nguyên chất 100%
Xuất xứ từ nhà nuôi yến Nest Vui – Quy cách: hộp 50g
Tặng kèm nhiều quà tặng chất lượng, giá trị dinh dưỡng cao
Tiện dụng để sử dụng ngày, tiết kiệm thời gian sơ chế.',2),
(23,'Chân Yến Huyết THÔ Cao Cấp 20g','https://nestvui.com/wp-content/uploads/2022/08/chan-huyet-yen-tho-20g.jpg',750000,'Chân yến huyết thô thượng hạng – Nguyên Chất 100%
Khai thác trực tiếp từ thiên nhiên tại hang đá sâu ngoài đảo
Xuất xứ từ nhà nuôi yến Nest Vui – Quy cách: hộp 20g
Tặng kèm nhiều quà tặng chất lượng, giá trị dinh dưỡng cao
Tiện dụng để sử dụng ngày, tiết kiệm thời gian sơ chế.',2),
(24,'Chân Yến Huyết THÔ Cao Cấp 100g','https://nestvui.com/wp-content/uploads/2022/08/chan-yen-huyet-tho-100g-1.jpg',3750000,'Chân yến huyết thô thượng hạng – Nguyên Chất 100%
Nhiều hàm lượng chất dinh dưỡng bổ ích cho sức khoẻ
Xuất xứ từ nhà nuôi yến Nest Vui – Quy cách: Hộp 100g
Tặng kèm nhiều quà tặng chất lượng, giá trị dinh dưỡng cao
Tiện dụng để sử dụng ngày, tiết kiệm thời gian sơ chế.',2),
(25,'Yến Làm Sạch Loại 1 100g','https://nestvui.com/wp-content/uploads/2022/09/hop-yen-nha-tinh-che-100g.jpg',4300000,'Yến tinh chế loại 1 được làm sạch hoàn toàn thủ công
Tổ yến vẫn giữ được hình dạng nguyên tổ sợi phồng.
Xuất xứ từ nhà yến Nest Vui với trọng lượng 8-10g/tổ
Quy cách đóng gói hộp 100g tinh chế gồm 14-16 tai yến
Tiện dụng để sử dụng ngay, tiết kiệm thời gian sơ chế.
Liên hệ tư vấn: 090.995.88.78',3),
(26,'Yến Tinh Chế Thượng Hạng 100g','https://nestvui.com/wp-content/uploads/2022/09/hop-to-yen-dao-tinh-che-100g-thuong-hang.jpg',5200000,'Khác với sản phẩm tổ yến thô, yến tinh chế loại 1 là dòng yến đã được trải qua quá trình làm sạch hoàn toàn mang đến cho khách hàng một tổ yến chất lượng, thơm ngon không chứa chút tạp chất hay hoá chất gây hại đến sức khoẻ người dùng.
Một trong những tiện ích lớn nhất khi mua tổ yến làm sạch loại 1 là giúp bạn tiết kiệm được khoảng thời gian và công sức, thay vì tốn phần lớn thời gian ngồi làm sạch tổ yến chưa xử lý thì với yến làm sạch loại 1 chỉ cần ngâm trong nước đúng thời gian là có thể sử dụng nhanh chóng, đơn giản. Để biết thêm nhiều thông tin hữu ích hơn của tổ yến loại 1 hộp 100g, xem ngay bài viết dưới đây nhé!',3),
(27,'Yến Huyết Tinh Chế 100g','https://nestvui.com/wp-content/uploads/2022/09/hop-yen-nha-tinh-che-50g.jpg',3390000,'Yến làm sạch loại 2 hiện đang là dòng yến rất được ưa chuộng tại Nest Vui, đã được trải qua quy trình sơ chế sạch sẽ không dính các tạp chất lông chim hay bụi bẩn, sở hữu hàm lượng chất dinh dưỡng cao hơn các dòng yến tinh chế loại 1 góp phần tăng cường sức khoẻ tốt cho người dùng.
Khi mua yến làm sạch loại 2 100g bạn sẽ tiết kiệm được nhiều thời gian và công sức làm sạch yến hơn. Đặc biệt yến tinh chế loại 2 được tạo thành dạng các phiến lá vô cùng bắt, các sợi yến dài và phồng hơn so với yến loại 1, có hương vị đậm đà và ngon hơn. Có thể nói, tổ yến làm sạch loại 2 100g là loại thực phẩm chức năng mà bạn không nên bỏ qua!',3),
(28,'Yến Đảo Tinh Chế 50g','https://nestvui.com/wp-content/uploads/2022/08/yen-dao-tinh-che-20g-650x550.jpg',2145000,'Yến sào tinh chế loại 1 (hộp 50g) tại Nest Vui được khai thác trực tiếp trên đảo trong các hang đá hoặc vách đá lớn, có chứa hàm lượng chất dinh dưỡng cao hơn gấp nhiều lần so với các loại yến nhà thông thường, vì các tổ yến đảo này được tạo nên khá chắc chắn và chất lượng từ loài chim yến có sức sống mãnh liệt, chịu được sự khắc nghiệt của môi trường trên đảo.
Muốn biết thêm nhiều thông tin chi tiết hơn về tổ yến sào thiên nhiên tinh chế loại 1 (50g) tại Nest Vui, hãy xem ngay bài viết dưới đây nhé!',3),
(29,'Chân Yến Đảo Tinh Chế 100g','https://nestvui.com/wp-content/uploads/2022/02/chan-yen-dao-tinh-che-100g-1-600x550.jpg',4900000,'Yến tinh chế loại 2 tại Nest Vui được làm sạch thủ công
Tổ yến vẫn giữ được hình dạng nguyên tổ sợi phồng.
Xuất xứ từ nhà yến Nest Vui với trọng lượng 8-10g/tổ
Quy cách đóng gói hộp 100g tinh chế gồm 14-16 tai yến
Tiện dụng để sử dụng ngay, tiết kiệm thời gian sơ chế.
Liên hệ tư vấn: 090.995.88.78',3),
(30,'Yến Tinh Chế Loại 2 (Hộp 100g) – Gỗ
','https://nestvui.com/wp-content/uploads/2022/07/yen-tinh-che-50g-loai-1-600x550.jpg',2150000,'Yến tinh chế loại 2 tại Nest Vui được làm sạch thủ công
Tổ yến vẫn giữ được hình dạng nguyên tổ sợi phồng.
Xuất xứ từ nhà yến Nest Vui với trọng lượng 8-10g/tổ
Quy cách đóng gói hộp 100g tinh chế gồm 14-16 tai yến
Tiện dụng để sử dụng ngay, tiết kiệm thời gian sơ chế.
Liên hệ tư vấn: 090.995.88.78',3),
(31,'Yến Đá (Đảo) Tinh Chế Thượng Hạng Loại 50g
','https://nestvui.com/wp-content/uploads/2022/09/hop-yen-dao-tinh-che-thuong-hang.jpg',2145000,'Yến tinh chế loại 1 được làm sạch hoàn toàn thủ công
Tổ yến vẫn giữ được hình dạng nguyên tổ sợi phồng.
Xuất xứ từ nhà yến Nest Vui với trọng lượng 8-10g/tổ
Quy cách đóng gói hộp 100g tinh chế gồm 14-16 tai yến
Tiện dụng để sử dụng ngay, tiết kiệm thời gian sơ chế.
Liên hệ tư vấn: 090.995.88.78',3),
(32,'Yến Tinh Chế Loại 1 (Hộp 100g) – Gỗ','https://nestvui.com/wp-content/uploads/2022/09/hop-yen-nha-tinh-che-100g.jpg',3590000,'Yến tinh chế loại 1 Nest Vui khai thác từ tự nhiên đã xử lý và làm sạch
Tổ yến vẫn giữ được hình dạng nguyên tổ sợi phồng.
Quy cách đóng gói hộp 50g tinh chế gồm 6 – 7 tai yến
Tiện dụng để sử dụng ngày, tiết kiệm thời gian sơ chế.
Liên hệ tư vấn: 090.995.88.78',3),
(33,'Chân Huyết Yến TINH CHẾ Cao Cấp 30g
','https://nestvui.com/wp-content/uploads/2022/08/chan-yen-huyet-tinh-che-100g-1-1.jpg',4990000,'Chân huyết yến tinh chế Hảo Hạng – Giòn dai
Xuất xứ từ: Ninh Thuận, Khánh Hòa – Quy cách: Hộp 100g
Tặng kèm nhiều quà tặng chất lượng, giá trị dinh dưỡng cao
Tiện dụng để sử dụng ngày, tiết kiệm thời gian sơ chế.',3),
(34,'Huyết Yến TINH CHẾ Cao Cấp 50gr – Thượng Hạng
','https://nestvui.com/wp-content/uploads/2022/09/hop-huyet-yen-tinh-che-20g.jpg',2695000,'Khai thác từ đảo thiên nhiên 100% – Địa hình hiểm trở
Huyết yến được tinh chế làm sạch lông và tạp chất 100% với quy trình chuẩn ISO.
Giữ nguyên vị yến và hàm lượng dinh dưỡng đến 99%.
Quy cách đóng gói hộp 50g yến tinh chế.',3),
(35,'Huyết Yến TINH CHẾ Cao Cấp 100g – Thượng Hạng
','https://nestvui.com/wp-content/uploads/2022/09/hop-to-huyet-yen-tho-100g.jpg',5390000,'Khai thác từ đảo thiên nhiên 100% – Địa hình hiểm trở
Huyết yến được tinh chế làm sạch lông và tạp chất 100% với quy trình chuẩn ISO.
Giữ nguyên vị yến và hàm lượng dinh dưỡng đến 99%.
Quy cách đóng gói hộp 100g yến tinh chế.',3),
(36,'Chân Huyết Yến TINH CHẾ Cao Cấp 40g
','https://nestvui.com/wp-content/uploads/2022/08/chan-yen-huyet-tinh-che-50g-1.jpg',2495000,'Chân huyết yến tinh chế Hảo Hạng – Giòn dai
Xuất xứ từ: Ninh Thuận, Khánh Hòa – Quy cách: Hộp 50g
Tặng kèm nhiều quà tặng chất lượng, giá trị dinh dưỡng cao
Tiện dụng để sử dụng ngày, tiết kiệm thời gian sơ chế.',3),
(37,'Huyết Yến TINH CHẾ Cao Cấp 20gr – Thượng Hạng
','https://nestvui.com/wp-content/uploads/2022/09/hop-huyet-yen-tinh-che-20g.jpg',1078000,'Khai thác từ đảo thiên nhiên 100% – Địa hình hiểm trở
Huyết yến được tinh chế làm sạch lông và tạp chất 100% với quy trình chuẩn ISO.
Giữ nguyên vị yến và hàm lượng dinh dưỡng đến 99%.
Quy cách đóng gói hộp 20g yến tinh chế.',3),
(38,'Chân Huyết Yến TINH CHẾ Cao Cấp 50g
','https://nestvui.com/wp-content/uploads/2022/08/chan-yen-huyet-tinh-che-50g.jpg',2495000,'Chân huyết yến tinh chế Hảo Hạng – Giòn dai
Xuất xứ từ: Ninh Thuận, Khánh Hòa – Quy cách: Hộp 50g
Tặng kèm nhiều quà tặng chất lượng, giá trị dinh dưỡng cao
Tiện dụng để sử dụng ngày, tiết kiệm thời gian sơ chế.',3);
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


