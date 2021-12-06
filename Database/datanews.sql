-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 06, 2021 lúc 04:21 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `datanews`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `name` varchar(256) NOT NULL,
  `cmt` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`name`, `cmt`) VALUES
('Mai Thị Nhật Lan', 'đẹp'),
('Mai Thị Nhật Lan', 'đẹp'),
('Vũ Đại An', 'đẹp'),
('Vũ Đại An', 'đẹp');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `customer_name` varchar(256) NOT NULL,
  `customer_pass` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`customer_name`, `customer_pass`) VALUES
('vudaian12a7@gmail.com', '123'),
('vudaian12a7@gmail.com', '123'),
('mr.vuan24@gmail.com', '12345'),
('mr.vuan24@gmail.com', '123456'),
('maithilan25122002@gmail.com', '123'),
('vudaian12a7@gmail.com', '12345'),
('vudaian12a7@gmail.com', '111'),
('maithilan25122002@gmail.com', '123'),
('maithilan25122002@gmail.com', '123'),
('vudaian12a7@gmail.com', '123'),
('vudaian', '123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tinmoi`
--

CREATE TABLE `tinmoi` (
  `ID` int(11) NOT NULL,
  `titlenew` varchar(256) DEFAULT NULL,
  `imagenew` varchar(500) DEFAULT NULL,
  `timenew` varchar(500) DEFAULT NULL,
  `detailsnew` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tinmoi`
--

INSERT INTO `tinmoi` (`ID`, `titlenew`, `imagenew`, `timenew`, `detailsnew`) VALUES
(42, 'Lộ chiêu bài Tịnh thất Bồng Lai - Thiền am bên bờ vũ trụ sử dụng nhiều năm qua để \"hái ra tiền\" một cách nhẹ nhàng', 'https://cdnmedia.tinmoi.vn/upload/camnhung/2021/11/16/lo-chieu-bai-ong-le-tung-van-su-dung-nhieu-nam-de-tinh-that-bong-lai-hai-ra-tien-1637055486-3.jpg', '11/12/2021', 'Tịnh thất Bồng Lai nay được đổi tên là Thiền am bên bờ vũ trụ đang là cái tên được dư luận quan tâm đặc biệt. Là nơi nhận những em bé mồ côi những người có hoàn cảnh khó khăn nhưng người đứng đầu Tịnh thất Bồng Lai và những \"thầy tu\" bên trong thường xuyên khoe cuộc sống đủ đầy vật chất từ xe sang đến điện thoại thời thường.  Nhiều người không khỏi thắc mắc nguồn thu chính của Tịnh thất Bồng Lai đến từ đâu mà lại có cuộc sống sang chảnh đến vậy. Theo dõi những hoạt động của Thiền am bên bờ vũ trụ, cư dân mạng đã nhanh chóng phát hiện ra một chiêu bài mà ông Lê Tùng Vân thường sử dụng để \"hái ra tiền\" chính là cử các \"đệ tử\" của mình tham gia các chương trình gameshow.  Đây được xem là cách kiếm tiền thông minh của ông Lê Tùng Vân. Lợi dụng sức hút của truyền thông khi tham gia các gameshow, Tịnh thất Bồng Lai sẽ được nhiều người biết đến. Không chỉ vậy, những chú tiểu, \"thầy tu\" tham gia gameshow còn luôn có bài làm thôi thúc lòng trắc ẩn của khán giả xem chương trình. Cụ thể, Lê Thanh Huyền Trân tham gia chương trình Giọng hát Việt nhí với những ca khúc sâu lắng cùng câu chuyện mồ côi cha mẹ từ nhỏ. Thời điểm đó, câu chuyện của Lê Thanh Huyền Trân đã lấy đi nước mắt của biết bao người và cũng từ đây, nhiều người biết đến Tịnh thất Bồng Lai'),
(43, 'UBND TP. Hà Nội quyết định siết chặt quản lý, đưa ra những ...', 'https://cdnmedia.tinmoi.vn/upload/honghoavideo/2021/11/17/nhung-thay-doi-trong-quy-dinh-danh-cho-nguoi-tu-vung-dich-tro-ve-ha-noi-1637146815-2.jpg', '09/12/2021', 'Tất cả các trường hợp trên ngay khi về đến Hà Nội phải khai báo y tế và thông báo, cam kết với chính quyền địa phương; trong suốt thời gian cách ly, tự theo dõi sức khỏe luôn thực hiện 5K. Quy định mới của Hà Nội khiến nhiều người bất ngờ. Văn bản được ban hành lúc 18h30 ngày 16/11 và áp dụng từ ngày 17/11. Như vậy, người dân có chưa đầy 6 giờ để \"thích ứng\" với quy định mới. Tuy nhiên, chia sẻ trên Trí thức trẻ, đại diện Trung tâm kiểm soát bệnh tật (CDC) Hà Nội cho hay, như công điện số 23 của Chủ tịch Hà Nội đã nêu rõ, từ nay dứt khoát phải tiến hành cách ly tại nhà 7 ngày đối với người về từ các tỉnh, thành có dịch. Lý giải việc này, đại diện CDC Hà Nội nêu rõ, kể từ sau ngày 20/10 (thời điểm Hà Nội ban hành Công điện 22 về việc triển khai các biện pháp tạm thời \"Thích ứng an toàn, linh hoạt, kiểm soát hiệu quả dịch Covid-19\" -PV) số lượng người từ các địa phương có dịch về thành phố đông. Cũng theo đại diện CDC Hà Nội, với các khu vực vùng 4 (vùng đỏ), người dân không được ra khỏi nhà và với vùng 3 (vùng màu da cam) cũng có khuyến cáo hạn chế di chuyển.'),
(44, 'Bất ngờ tại phiên xử Đường \"Nhuệ\": Nhiều luật sư bào chữa đứng dậy ra về', 'https://cdnmedia.tinmoi.vn/upload/camnhung/2021/11/17/tin-tuc-phap-luat-24h-bat-ngo-tai-phien-xu-duong-nhue-nhieu-luat-su-bao-chua-dung-day-ra-ve-1637142934-3.jpg', '09/12/2021', 'Khi được cho phép trình bày tâm tư nguyện vọng, Tiến giơ tờ giấy lên đọc và khẳng định sai phạm đến đâu xin chịu đến đó, nhưng cho rằng mình không có tội. Bị cáo này cho rằng, bản thân đã bị bố nuôi đổ trách nhiệm trong nhiều vụ án. Còn Nguyễn Xuân Đường đề nghị HĐXX triệu tập những người liên quan trong vụ án, cụ thể, đó là những bị hại (chủ cơ sở dịch vụ tang lễ) mà Đường nói họ chỉ là đối tác làm ăn và muốn thay đổi kiểm sát viên. Một luật sư khác là người bào chữa cho Nguyễn Thị Dương đề nghị hoãn phiên tòa để triệu tập bị hại vì \"có nhiều lời khai không khách quan\". Các luật sư khác bảo vệ cho 7 bị cáo cùng quan điểm, họ cho rằng vụ án vi phạm quy định tố tụng. Sau khi hội ý, Chủ tọa phiên tòa nêu quan điểm, yêu cầu thay đổi kiểm sát viên của bị cáo Đường không có cơ sở chấp nhận. Các bị hại, nhân chứng, người liên quan vắng mặt nhưng đã có lời khai tại giai đoạn điều tra, nếu cần sẽ công bố nên HĐXX quyết định tiếp tục làm việc. Đáp lại quyết định của tòa, 8 luật sư bào chữa cho các bị cáo cho rằng HĐXX vi phạm nghiêm trọng luật tố tụng, không tôn trọng pháp luật nên cùng ra về, không tham gia phiên tòa. Chỉ còn luật sư của bị cáo Úy ở lại. Gần trưa, bản cáo trạng truy tố tội danh các bị cáo mới được các cơ quan tiến hành tố tụng công bố.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tinthethao`
--

CREATE TABLE `tinthethao` (
  `ID` int(11) NOT NULL,
  `titlesport` varchar(150) DEFAULT NULL,
  `imagesport` varchar(500) DEFAULT NULL,
  `timesport` varchar(500) DEFAULT NULL,
  `detailssport` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tinthethao`
--

INSERT INTO `tinthethao` (`ID`, `titlesport`, `imagesport`, `timesport`, `detailssport`) VALUES
(24, 'Sau hai trận thua liên tiếp trong tháng 11 của vòng loại thứ 3 World Cup 2022 ', 'https://cdnmedia.tinmoi.vn/upload/theanhbtv/2021/11/17/1637115756-1.jpg', '11/12/2021', 'Ở lượt trận thứ 6 vòng loại thứ ba World Cup 2022, dù có được lợi thế sân nhà cùng sự cổ vũ của hơn 10.000 CĐV trên sân Mỹ Đình, Việt Nam vẫn phải chịu thất bại với tỷ số 0-1 trước Saudi Arabia. Các học trò của HLV Park Hang Seo đã thi đấu rất nỗ lực nhưng vẫn không thể san lấp được khoảng cách về đẳng cấp trước đối thủ hàng đầu châu Á. Như vậy, chúng ta tiếp tục kéo dài thành tích toàn thua lên con số 6 trận. Không những vậy, sau trận đấu, HLV Park Hang Seo còn gặp thêm những vấn đề về tình hình nhân sự. Ở phút 38, đội trưởng Quế Ngọc Hải đã có tình huống nổi nóng với đội trưởng Al Faraj của Saudi Arabia sau khi chứng kiến đối phương liên tiếp phạm lỗi với Công Phượng và Duy Mạnh. Trung vệ đội trưởng của ĐT Việt Nam đã chạy tới đẩy Al Faraj và liên tục chỉ vào mặt cầu thủ này. Với hành động không đẹp, Quế Ngọc Hải đã nhận thẻ vàng từ trọng tài chính Hattab Hanna. Đây là thẻ vàng thứ 2 của Hải Quế ở vòng loại thứ 3, qua đó khiến cho anh sẽ bị treo giò ở trận đấu tiếp của ĐT Việt Nam gặp Australia. Trước đó, a'),
(25, 'Sau thất bại đáng tiếc với tỷ số 0-1 trên sân nhà Mỹ Đình ...', 'https://cdnmedia.tinmoi.vn/upload/theanhbtv/2021/11/17/1637115756-1.jpg', '11/12/2021', 'Ở lượt trận thứ 6 vòng loại thứ ba World Cup 2022, dù có được lợi thế sân nhà cùng sự cổ vũ của hơn 10.000 CĐV trên sân Mỹ Đình, Việt Nam vẫn phải chịu thất bại với tỷ số 0-1 trước Saudi Arabia. Các học trò của HLV Park Hang Seo đã thi đấu rất nỗ lực nhưng vẫn không thể san lấp được khoảng cách về đẳng cấp trước đối thủ hàng đầu châu Á. Như vậy, chúng ta tiếp tục kéo dài thành tích toàn thua lên con số 6 trận. Không những vậy, sau trận đấu, HLV Park Hang Seo còn gặp thêm những vấn đề về tình hình nhân sự. Ở phút 38, đội trưởng Quế Ngọc Hải đã có tình huống nổi nóng với đội trưởng Al Faraj của Saudi Arabia sau khi chứng kiến đối phương liên tiếp phạm lỗi với Công Phượng và Duy Mạnh. Trung vệ đội trưởng của ĐT Việt Nam đã chạy tới đẩy Al Faraj và liên tục chỉ vào mặt cầu thủ này. Với hành động không đẹp, Quế Ngọc Hải đã nhận thẻ vàng từ trọng tài chính Hattab Hanna. Đây là thẻ vàng thứ 2 của Hải Quế ở vòng loại thứ 3, qua đó khiến cho anh sẽ bị treo giò ở trận đấu tiếp của ĐT Việt Nam gặp Australia. Trước đó, anh cũng lĩnh thẻ trong trận đấu với Oman.'),
(26, 'Không phải đối đầu với Erling Haaland, ĐT Hà Lan vẫn có một trận đấu ...', 'https://cdnmedia.tinmoi.vn/upload/theanhbtv/2021/11/17/1637112324-1.jpg', '11/12/2021', 'Sau khi lỡ hẹn với World Cup 2018 và bị làng bóng đá thế giới chê cười, ĐT Hà Lan đã rất nỗ lực ở vòng loại World Cup 2022 lần này. Trước lượt đấu cuối cùng, họ chỉ hơn Na Uy và Thổ Nhĩ Kỳ đúng 2 điểm, và hoàn toàn có thể đánh mất vị trí dẫn đầu, thậm chí mất luôn vị trí thứ 2 có quyền đá play-off nếu để thua trước Na Uy.  May mắn đầu tiên đến với họ là việc chân sút “khét tiếng” Erling Haaland của Na Uy đã phải vắng mặt vì chấn thương. Ở trận lượt đi, sao trẻ của Dortmund cũng đã phá lưới Hà Lan và giúp Na Uy cầm hòa cơn lốc màu da cam. Khi không có tiền đạo đã đóng góp 5 bàn thắng ở vòng loại trong đội hình, Na Uy buộc phải chọn lối chơi phòng ngự phản công trên sân của Hà Lan. Thế trận chặt chẽ khiến cho cả hai đội đều không tạo ra nhiều cơ hội trong 45 phút đầu tiên của trận đấu. Memphis Depay vẫn chơi nổi bật nhất với những cơ hội khá nguy hiểm trong hiệp 1. Anh có một lần đánh đầu cận thành, một cú đánh gót bất ngờ và một cú vô lê cực mạnh từ ngoài vòng cấm nhưng đều không thể đánh bại thủ môn Nyland. Bước sang hiệp 2, thế trận vẫn không có nhiều khác biệt khi cả hai đội đều muốn đặt rủi ro thua trận ở mức thấp nhất. Na Uy là đội cần phải chiến thắng nhưng họ cũng chẳng thể tạo ra nhiều cơ hội thực sự nguy hiểm nào. Chỉ đến những phút cuối trận, kịch tính mới xảy ra trên sân Rotterdam. Chỉ trong vòng 7 phút, đội chủ nhà Hà Lan đã có liền 2 bàn thắng.');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tinmoi`
--
ALTER TABLE `tinmoi`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `tinthethao`
--
ALTER TABLE `tinthethao`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tinmoi`
--
ALTER TABLE `tinmoi`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT cho bảng `tinthethao`
--
ALTER TABLE `tinthethao`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
