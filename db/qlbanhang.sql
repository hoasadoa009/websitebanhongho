-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2019 at 02:49 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qlbanhang`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `name_admin` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `name_admin`, `username`, `password`) VALUES
(1, 'huynh', 'admin', '1'),
(2, 'abc', 'admin1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `category_brand`
--

CREATE TABLE `category_brand` (
  `id_category_brand` int(11) NOT NULL,
  `name_category_brand` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `img_category_brand` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `icon_category` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category_brand`
--

INSERT INTO `category_brand` (`id_category_brand`, `name_category_brand`, `img_category_brand`, `icon_category`) VALUES
(1, 'Đồng hồ Patek Philippe', 'item1.jpg', 'patek-philippe-logo.png'),
(2, 'Đồng hồ Thụy Sỹ', 'item2.jpg', '200px-Beatles_logo.svg.png'),
(3, 'Đồng hồ Rolex', 'item3.jpg', 'rolex_logo.jpg'),
(4, 'Đồng hồ Omega', 'item4.jpg', 'logo-Sm2.jpg'),
(5, 'Đồng hồ Longines', 'item2.jpg', 'Longines-2017.png'),
(6, 'Đồng hồ Tissot', 'item2.jpg', 'tissot.jpg'),
(7, 'Đồng hồ Timex', 'item2.jpg', 'Timex_logo.jpg'),
(8, 'Đồng hồ Calvin Klein', 'item2.jpg', 'download.png'),
(9, ' Đồng hồ Casio', 'item2.jpg', 'Casio-Logo-200x90.png');

-- --------------------------------------------------------

--
-- Table structure for table `category_product`
--

CREATE TABLE `category_product` (
  `id_category_product` int(11) NOT NULL,
  `name_category_product` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category_product`
--

INSERT INTO `category_product` (`id_category_product`, `name_category_product`) VALUES
(1, 'Đồng hồ nam'),
(2, 'Đồng hồ nữ'),
(3, 'đồng hồ đôi'),
(4, 'đồng hồ trẻ em'),
(5, 'Đồng hồ rẻ');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL,
  `name_customer` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `name_customer`, `username`, `password`, `address`, `phone`) VALUES
(1, 'chu văn huynh', 'admin@gmail.com', 'admin', 'Hưng Yên', 123456789),
(3, 'chu văn huynh', 'huynh', '123', 'Hưng Yên', 123456789);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id_news` int(11) NOT NULL,
  `name_news` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `img_news` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `note` text COLLATE utf8_unicode_ci NOT NULL,
  `hot_news` int(11) NOT NULL,
  `date_news` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id_news`, `name_news`, `img_news`, `short_description`, `description`, `note`, `hot_news`, `date_news`) VALUES
(1, 'Lấy cảm hứng từ anime, Seiko ra mắt đồng hồ bản giới hạn theo phong cách \"Spirited Away\"', 'blog-01.jpg', 'Ngoài thiết kế mới mẻ, bắt mắt và độc đáo, chiếc đồng hồ này còn có thêm khuôn mặt của \"Vô Diện\" trên mặt số, cực thích hợp dành cho những ai yêu thích các nhân vật bước ra từ tác phẩm Spirited Away.', 'Hãng đồng hồ nổi tiếng Nhật Bản Seiko vừa rồi đã chính thức tung ra một phiên bản đồng hồ vô cùng đặc biệt, vừa chiều lòng fan anime lại vừa thỏa mãn được niềm đam mê công nghệ của người dùng. Cụ thể, đó là mẫu đồng hồ phiên bản giới hạn \"Spirited Away\", lấy cảm hứng từ bộ phim cùng tên đến từ Ghibli Studio và có thiết kế khá độc đáo. Nằm trong dòng sản phẩm ALBA, mẫu Seiko Spirited Away có 2 màu bạc và đen. Được biết, Seiko cũng sẽ chỉ sản xuất 500 phiên bản màu bạc và 700 phiên bản màu đen trên toàn thế giới.\r\n\r\nThiết kế của đồng hồ đều dựa chủ yếu vào các chi tiết trong bộ phim hoạt hình huyền thoại của Studio Ghibli. Dễ nhận biết nhất là toàn thân đồng hồ đã được lấy cảm hứng từ tháp đồng hồ xuất hiện trong phim, ở cảnh đầu tiên khi Chihiro tìm thấy thành phố ma thuật. Nổi bật ở giữa là khuôn mặt của Vô Diện, nhân vật mang tính biểu tượng của anime Nhật Bản mà có lẽ ai cũng biết.', 'Về thời gian ra mắt, phần lớn những sản phẩm này sẽ được công bố vào tháng 10 năm nay. Một vài tin đồn cho rằng chiếc Pixel 3 Lite sẽ có ngày ra mắt sớm hơn, nhưng hiện chưa có các thông báo rõ ràng.', 1, '2019-01-28'),
(2, 'Google chi 40 triệu USD mua công nghệ đồng hồ thông minh của Fossil, có thể sắp ra mắt Pixel Watch', 'blog-02.jpg', 'Google sẽ sở hữu những công nghệ bí mật và một phần của nhóm R&D của Fossil.', 'Google và nhà sản xuất đồng hồ thông minh Fossil vừa mới công bố một thỏa thuận hợp tác. Qua đó, Google sẽ sở hữu những công nghệ bí mật và một phần của nhóm R&D của Fossil với số giá 40 triệu USD. Thỏa thuận này có vẻ như sẽ giúp Google tham gia vào thị trường smartwatch.\r\n\r\nCác công nghệ bí mật của Fossil được tiết lộ có liên quan đến lĩnh vực theo dõi và chăm sóc sức khỏe. Nền tảng WearOS của Google hiện đang được sử dụng trên nhiều thiết bị smartwatch, tuy nhiên các tính năng chăm sóc sức khỏe vẫn còn kém xa Apple Watch. Trong khi thị trường đồng hồ thông minh không có nhiều dấu ấn mạnh mẽ trong những năm gần đây, thì mảng kinh doanh theo dõi và chăm sóc sức khỏe lại đang rất được quan tâm đến. Các ông lớn trong làng công nghệ như Apple và Amazon đều đang đầu tư rất nhiều để phát triển các công nghệ mới giúp chăm sóc sức khỏe người dùng tốt hơn.\r\n\r\nPhó Chủ tịch Greg McKelvey của Fossil cho biết, công nghệ mà Fossil vừa bán cho Google hiện chưa có mặt trên thị trường. Tuy nhiên ông McKelvey không tiết lộ chính xác đó là công nghệ như thế nào.\r\n\r\nĐộng thái này cũng cho thấy khả năng Google có thể sẽ tham gia sản xuất luôn cả phần cứng smartwatch, mặc dù chưa có thông tin chính xác. Nhưng đây là một thị trường đầy hứa hẹn trong tương lai sắp tới, nơi mà Apple Watch đang thống trị.', 'Được biết, mức giá của đồng hồ Spirited Away phiên bản giới hạn sẽ rơi vào khoảng 14.000 yen, tương đương 128 USD (gần 3 triệu VND).', 0, '2019-01-27'),
(3, 'Ngỡ ngàng với 10 thiết kế đồng hồ kỳ lạ nhất Trái Đất, chiếc thứ 5 dành cho người luôn trễ hẹn', 'blog-03.jpg', 'Từ đồng hồ hình động cơ phản lực cho đến đồng hồ dành cho người mù, những mẫu thiết kế này chắc chắn sẽ khiến bạn bất ngờ.', 'Không chỉ đơn giản là một món đồ trang sức hay thiết bị để theo dõi thời gian, những mẫu đồng hồ dưới đây đã tái định nghĩa lại thế nào là đồng hồ đẹp - độc - lạ, được tạo nên từ sự sáng tạo không có giới hạn của con người:\r\n\r\n#1. Đồng hồ thiên văn học - cho phép bạn theo dõi vị trí của các hành tinh trong hệ Mặt Trời mọi lúc, mọi nơi. ', 'Không chỉ đơn giản là một món đồ trang sức hay thiết bị để theo dõi thời gian, những mẫu đồng hồ dưới đây đã tái định nghĩa lại thế nào là đồng hồ đẹp - độc - lạ, được tạo nên từ sự sáng tạo không có giới hạn của con người:', 1, '2019-01-27'),
(4, 'Marvel khởi động đồng hồ đếm ngược, khéo nhắc khán giả còn 175 ngày nữa là công chiếu Avengers 4', 'blog-04.jpg', 'Chiếc đồng hồ đếm ngược chính xác tới từng giây lại càng khiến khán giả ngóng chờ siêu phẩm này hơn bao giờ hết.', 'Sau khi khởi động đồng hồ đếm ngược tới ngày công chiếu của phần 2 series Spider-man mang tên \"Far From Home\", thì nay khán giả đã chính thức có thể đếm được từng giờ, từng giây đến lúc được thưởng thức siêu phẩm Avengers 4 tại các rạp chiếu trên toàn cầu. Cụ thể, tới thời điểm này, chúng ta sẽ phải đợi khoảng 175 ngày nữa. Các bạn có thể truy cập vào website chính thức của Marvel tại địa chỉ Marvel.com, ấn vào mục \"Movies\" và chọn \"Avengers Untitled\", hoặc truy cập trực tiếp vào đường link tại đây để cùng cả thế giới đếm ngược giờ ra mắt phim.\r\n\r\nĐây thực sự là một cách làm thông minh của Marvel, khi thậm chí có nhiều fan chia sẻ rằng, chiếc đồng hồ càng khiến họ nóng lòng chờ đợi hơn, đến nỗi ngày nào cũng truy cập vào để đếm từng ngày. \r\n\r\nĐược biết, cách làm website đi đôi với tác phẩm điện ảnh tương tự như trên cũng được khá nhiều nhà sản xuất phim áp dụng, làm tăng sự hứng thú cho khán giả. Ví dụ như với phim \"Godzilla 2: King of the Monsters\".', 'Captain Marvel dự kiến sẽ công chiếu vào ngày 08/03/2019, còn Avengers 4 sẽ ra rạp vào 03/05/2019, theo sau đó là Spider-man: Far From Home vào ngày 05/07/2019.', 1, '2019-01-27'),
(5, 'Xu hướng sử dụng đồng hồ thông minh cho trẻ', 'blog-05.jpg', 'Khi trẻ còn nhỏ, bản thân trẻ đôi khi chưa thể chủ động sắp xếp thời gian biểu mỗi ngày sao cho hợp lý giữa việc học, vui chơi, ăn uống, ngủ nghỉ. Do đó, cho trẻ đeo một chiếc đồng hồ thông minh chính là cách chúng ta đang tập cho trẻ sống theo quy tắc, nề nếp, giờ giấc nhất định.', 'Vì sao bạn nên mua đồng hồ thông minh cho trẻ?\r\n\r\nĐồng hồ thông minh – smartwatch (tên gọi trong tiếng Anh). Từ chính tên gọi của nó đã mang tính khơi gợi nhận thức trong chúng ta đây không chỉ là một chiếc đồng hồ xem giờ giấc bình thường. Nhà sản xuất trang bị cho đồng hồ thông minh hàng loạt tính năng nổi bật giúp cha mẹ có thể chăm sóc con tốt hơn. \r\nĐồng hồ thông minh tích hợp các tính năng nghe gọi hai chiều, thoải mái nhắn tin SMS, gửi tin nhắn thoại hai chiều (gửi và nhận) như một chiếc điện thoại di động.\r\n\r\nKhông chỉ vậy, smartwatch còn có thể nghe nhạc, chụp ảnh, lướt web, xem video… và Báo thức, chăm sóc sức khỏe như đo nhịp tim, đếm bước chân, tính năng lượng tiêu thụ…\r\n\r\nNgoài ra, với tính năng định vị toàn cầu chiếc điện thoại thông minh này còn giúp cha mẹ có thể kiểm soát được vị trí mà con em mình đang ở, tính năng lớp học chỉ cho phép hiển thị giờ giấc để trẻ tập trung học hành.\r\n\r\nThực trạng số lượng cửa hàng bán đồng hồ thông minh trẻ em tăng lên \"chóng mặt\"\r\n\r\nChính vì vai trò của đồng hồ thông minh trẻ em quá thiết thực trong đời sống thường nhật nên rất nhiều cha mẹ muốn trang bị cho con em họ sản phẩm này. Để có thể mua smartwatch cho trẻ hoàn toàn không khó vì hiện nay có quá nhiều cửa hàng bán sản phẩm này trên thị trường. Tuy nhiên, cái khó đối với Khách hàng đó là làm thế nào có thể nhận diện đúng cửa hàng bán đồng hồ trẻ em uy tín, có giá thành phải chăng giữa một \"rừng\" cửa hàng trên thị trường.\r\n\r\nThực tế đã có rất nhiều Khách hàng khi mua đồng hồ thông minh đều có chung tâm lý thích sản phẩm càng rẻ càng tốt vì với họ như vậy là tiết kiệm. Thậm chí họ quên đi cả việc phải xem xét chất lượng sản phẩm, chính sách bảo hành, uy tín cửa hàng kinh doanh… Hậu quả là đã có không ít trường hợp Khách hàng mua phải hàng kém chất lượng, hàng giả. Khi đó, nguy cơ sản phẩm khi mua về hay bị hỏng vặt, mau xuống cấp (phai màu, đứt dây, mặt kính ố vàng, trầy xước, thấm nước…) khiến không ít Khách hàng phải mất rất nhiều chi phí sửa chữa, thậm chí ngậm ngùi vứt bỏ.\r\n\r\nĐã có hàng triệu Khách hàng trong 5 năm qua tin tưởng mua đồng hồ thông minh cho trẻ tại Minh Tân Watch\r\n\r\nMinh Tân tự hào với hơn nửa thập kỷ chuyên bán đồng hồ thông minh cho trẻ em trên thị trường. Do đó, nếu bạn vẫn còn đang phân vân chưa biết nên mua smartwatch cho con em mình ở đâu thì hãy để Minh Tân giúp bạn tìm được sản phẩm phù hợp.', 'Minh Tân hiểu rõ Khách hàng mong muốn gì và cần gì khi đi mua đồng hồ thông minh. Do đó, Khách hàng sẽ được tư vấn tận tình từ khâu chọn mua sản phẩm phù hợp với khả năng tài chính tới những thắc mắc liên quan tới cách sử dụng, bảo trì, sửa chữa đồng hồ.', 1, '2019-01-27'),
(7, 'Chiếc đồng hồ nguyên tử 14 tỉ năm mới lệch 1 giây này sẽ giúp ta tìm hiểu bản chất của Vũ trụ', '3315901_Dell_blue_background.jpg', 'Nhà vật lý học Jun Ye là người chế tạo ra chiếc đồng hồ chính xác nhất thế giới. Với nó, ta sẽ hóa giải bí mật của tự nhiên.', 'Câu hỏi ông Jun Ye gặp phải nhiều nhất trong suốt sự nghiệp nghiên cứu khoa học cho tới giờ: Tại sao phải tạo nên chiếc đồng hồ chính xác nhất thế giới? Đa số chúng ta sống từng giờ từng phút mà không cần tới độ chính xác tuyệt đối, vậy nên ta không hiểu được lý do tại sao việc chia thời gian ra thành từng đơn vị tính nhỏ có giá trị ra sao.\r\n\r\nNhưng tại Đại học Colorado, vị giáo sư vật lý lại có cái nhìn khác về thời gian, khác hơn chúng ta chút. Theo giáo sư Ye, thời gian không chỉ là hằng số quyết định mọi việc ta làm, mà còn là yếu tố mấu chốt để ta hiểu được bản chất của vũ trụ, cách hoạt động của mọi thứ.\r\n\r\nBạn cứ tưởng tượng cuộc sống là một phương trình lớn, để giải được phương trình, ta cần những hằng số. Tìm hằng số ở đâu ra? Nhờ khoa học, ta có số lượng hạt trong một chất, số nguyên tử của chúng, … Một trong số đó, ta có hằng số luôn tăng đều đặn là thời gian.\r\nĐường đi của Mặt Trời cho phép người Ai Cập cổ đại đề ra một lịch làm việc theo thời gian, nhịp lực hấp dẫn tác động lên đồng hồ quả lắc sẽ cho người đi biển một công cụ tìm đường chính xác, rung động trong đồng hồ quartz cho ta một công cụ đo thời gian chính xác nằm trên cổ tay. Việc đo đạc thời gian đã luôn là yếu tố trọng tâm, đóng vai trò lớn trong sự phát triển của nhân loại. Cách thức ta đo thời gian thay đổi rất nhiều, hiện đại và chính xác hơn nhiều.\r\n\r\nKhi độ chính xác lên cao, giới khoa học phát hiện ra rằng những yếu tố đo đạc thời gian tự nhiên không hoàn hảo và không nhất quán. Họ muốn một cơ chế đồng hồ chính xác, không bao giờ chậm hoặc nếu có chậm, thì cũng không phải đặt lại bằng tay thường xuyên.\r\n\r\nCông cuộc kiếm tìm đồng hồ chính xác đã đưa các nhà vật lý tới với các nguyên tử: chúng có một cơ chế nhịp đều đặn, bản chất của nguyên tử đã như vậy nên chúng sẽ là một cơ chế đếm nhịp, tính thời gian vô cùng chính xác. Trong mỗi nguyên tử là những hạt nhỏ hơn, sắp xếp theo thứ tự như những hệ sao nhỏ: proton và neutron là sao trung tâm, các electron là các hành tinh quay quanh chúng theo quỹ đạo. Trong thế giới nguyên tử nhỏ xíu, chúng tuân theo một quy tắc riêng của mình: vật lý lượng tử.\r\n\r\nElectron có thể nhảy từ quỹ đạo này sang quỹ đạo khác, mỗi khi nhảy, chúng lại tạo ra những bức xạ vi sóng biến đổi theo từng trạng thái năng lượng khác nhau. Mỗi một lần nhảy tới lui được cho là một nhịp, dựa vào đó, ta có một cái đồng hồ chính xác.\r\n\r\nHai nhà vật lý học Louis Essen và Jack Parry tìm ra cách sử dụng nguyên tử cesium để tạo ra mộ trong những chiếc đồng hồ nguyên tử đầu tiên. Bằng sáng chế đó, họ định nghĩa lại thời gian, đúng nghĩa đen luôn. Một giây được xác nhận là tần số chuyển giao của 133 nguyên tử cesium, xấp xỉ 9,2 vòng chuyển.', 'Ông Ye mô tả thiết bị của Hall và Hänsch như là một viên gạch nền móng mới cho cả ngành, mở ra một khoảng rộng mới để tha hồ nghiên cứu. Hộ mô tả tấm lọc tần số quang học với tâm thế của một nhà thám hiểm vừa tìm thấy miền đất hứa.', 1, '2019-02-13');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id_order` int(11) NOT NULL,
  `address_customer` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `phone_customer` int(11) NOT NULL,
  `date_created` date NOT NULL,
  `id_customer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id_order` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `quality` int(11) NOT NULL,
  `current_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `name_product` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `color` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `img_product` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `new` int(11) NOT NULL,
  `sale` int(11) NOT NULL,
  `deals` int(11) NOT NULL,
  `special` int(11) NOT NULL,
  `short_description` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `quality` int(11) NOT NULL,
  `id_category_product` int(11) DEFAULT NULL,
  `id_category_brand` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_product`, `name_product`, `price`, `color`, `img_product`, `new`, `sale`, `deals`, `special`, `short_description`, `description`, `quality`, `id_category_product`, `id_category_brand`) VALUES
(1, 'Đồng hồ King Watch Casio', 1000, 'white', 'item1.jpg', 1, 12, 1, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 10, 1, 9),
(25, 'Đồng hồ 1', 1000, 'black', 'item11.jpg', 1, 15, 1, 1, 'Vẻ ngoài quý ông lịch lãm với mẫu Orient FAG02003W0 với thiết kế độc đáo cùng ô chân kính trong suốt phô diễn ra 1 phần bên trong của bộ máy cơ chứa đựng cả một trải nghiệm đầy nam tính.', 'Vẻ ngoài quý ông lịch lãm với mẫu Orient FAG02003W0 với thiết kế độc đáo cùng ô chân kính trong suốt phô diễn ra 1 phần bên trong của bộ máy cơ chứa đựng cả một trải nghiệm đầy nam tính.', 5, 2, 2),
(26, 'Đồng hồ 2', 2000, 'white', 'item12.jpg', 1, 8, 1, 1, 'Vẻ ngoài quý ông lịch lãm với mẫu Orient FAG02003W0 với thiết kế độc đáo cùng ô chân kính trong suốt phô diễn ra 1 phần bên trong của bộ máy cơ chứa đựng cả một trải nghiệm đầy nam tính.', 'Vẻ ngoài quý ông lịch lãm với mẫu Orient FAG02003W0 với thiết kế độc đáo cùng ô chân kính trong suốt phô diễn ra 1 phần bên trong của bộ máy cơ chứa đựng cả một trải nghiệm đầy nam tính.Vẻ ngoài quý ông lịch lãm với mẫu Orient FAG02003W0 với thiết kế độc đáo cùng ô chân kính trong suốt phô diễn ra 1 phần bên trong của bộ máy cơ chứa đựng cả một trải nghiệm đầy nam tính.', 4, 3, 3),
(27, 'Đồng hồ 3', 5000, 'black', 'item13.png', 0, 50, 0, 1, 'Vẻ ngoài quý ông lịch lãm với mẫu Orient FAG02003W0 với thiết kế độc đáo cùng ô chân kính trong suốt phô diễn ra 1 phần bên trong của bộ máy cơ chứa đựng cả một trải nghiệm đầy nam tính.', 'Vẻ ngoài quý ông lịch lãm với mẫu Orient FAG02003W0 với thiết kế độc đáo cùng ô chân kính trong suốt phô diễn ra 1 phần bên trong của bộ máy cơ chứa đựng cả một trải nghiệm đầy nam tính.', 10, 4, 4),
(28, 'Đồng hồ 4', 123, 'black', 'item14.jpg', 0, 8, 0, 1, 'Vẻ ngoài quý ông lịch lãm với mẫu Orient FAG02003W0 với thiết kế độc đáo cùng ô chân kính trong suốt phô diễn ra 1 phần bên trong của bộ máy cơ chứa đựng cả một trải nghiệm đầy nam tính.', 'Vẻ ngoài quý ông lịch lãm với mẫu Orient FAG02003W0 với thiết kế độc đáo cùng ô chân kính trong suốt phô diễn ra 1 phần bên trong của bộ máy cơ chứa đựng cả một trải nghiệm đầy nam tính.', 4, 5, 5),
(29, 'Đồng hồ 5', 2000, 'black', 'item15.jpg', 1, 45, 1, 1, 'Vẻ ngoài quý ông lịch lãm với mẫu Orient FAG02003W0 với thiết kế độc đáo cùng ô chân kính trong suốt phô diễn ra 1 phần bên trong của bộ máy cơ chứa đựng cả một trải nghiệm đầy nam tính.', 'Vẻ ngoài quý ông lịch lãm với mẫu Orient FAG02003W0 với thiết kế độc đáo cùng ô chân kính trong suốt phô diễn ra 1 phần bên trong của bộ máy cơ chứa đựng cả một trải nghiệm đầy nam tính.', 5, 1, 1),
(30, 'Đồng hồ 6', 123, 'purple', 'item16.jpg', 1, 45, 1, 1, 'Vẻ ngoài quý ông lịch lãm với mẫu Orient FAG02003W0 với thiết kế độc đáo cùng ô chân kính trong suốt phô diễn ra 1 phần bên trong của bộ máy cơ chứa đựng cả một trải nghiệm đầy nam tính.', 'Vẻ ngoài quý ông lịch lãm với mẫu Orient FAG02003W0 với thiết kế độc đáo cùng ô chân kính trong suốt phô diễn ra 1 phần bên trong của bộ máy cơ chứa đựng cả một trải nghiệm đầy nam tính.', 4, 2, 2),
(31, 'Đồng hồ 7', 5000, 'black', 'item17.jpg', 0, 50, 1, 1, 'Vẻ ngoài quý ông lịch lãm với mẫu Orient FAG02003W0 với thiết kế độc đáo cùng ô chân kính trong suốt phô diễn ra 1 phần bên trong của bộ máy cơ chứa đựng cả một trải nghiệm đầy nam tính.', 'Vẻ ngoài quý ông lịch lãm với mẫu Orient FAG02003W0 với thiết kế độc đáo cùng ô chân kính trong suốt phô diễn ra 1 phần bên trong của bộ máy cơ chứa đựng cả một trải nghiệm đầy nam tính.', 15, 3, 3),
(32, 'Đồng hồ 8', 3000, 'white', 'item18.jpg', 0, 42, 0, 1, 'Vẻ ngoài quý ông lịch lãm với mẫu Orient FAG02003W0 với thiết kế độc đáo cùng ô chân kính trong suốt phô diễn ra 1 phần bên trong của bộ máy cơ chứa đựng cả một trải nghiệm đầy nam tính.', 'Vẻ ngoài quý ông lịch lãm với mẫu Orient FAG02003W0 với thiết kế độc đáo cùng ô chân kính trong suốt phô diễn ra 1 phần bên trong của bộ máy cơ chứa đựng cả một trải nghiệm đầy nam tính.', 4, 4, 4),
(33, 'Đồng hồ 9', 5000, 'black', 'item19.jpg', 1, 50, 1, 1, 'Vẻ ngoài quý ông lịch lãm với mẫu Orient FAG02003W0 với thiết kế độc đáo cùng ô chân kính trong suốt phô diễn ra 1 phần bên trong của bộ máy cơ chứa đựng cả một trải nghiệm đầy nam tính.', 'Vẻ ngoài quý ông lịch lãm với mẫu Orient FAG02003W0 với thiết kế độc đáo cùng ô chân kính trong suốt phô diễn ra 1 phần bên trong của bộ máy cơ chứa đựng cả một trải nghiệm đầy nam tính.', 4, 5, 5),
(34, 'Đồng hồ 10', 6000, 'brow', 'item20.jpg', 1, 55, 1, 1, 'Vẻ ngoài quý ông lịch lãm với mẫu Orient FAG02003W0 với thiết kế độc đáo cùng ô chân kính trong suốt phô diễn ra 1 phần bên trong của bộ máy cơ chứa đựng cả một trải nghiệm đầy nam tính.', 'Vẻ ngoài quý ông lịch lãm với mẫu Orient FAG02003W0 với thiết kế độc đáo cùng ô chân kính trong suốt phô diễn ra 1 phần bên trong của bộ máy cơ chứa đựng cả một trải nghiệm đầy nam tính.', 4, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `id` int(11) NOT NULL,
  `big_img` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `small` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `big_content` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `sale` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id`, `big_img`, `small`, `big_content`, `sale`) VALUES
(1, 'slide1.jpg', 'small-slide1.jpg', 'this is big centent', 15),
(2, 'slide2.jpg', 'small-slide2.jpg', 'this is big centent 2', 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `category_brand`
--
ALTER TABLE `category_brand`
  ADD PRIMARY KEY (`id_category_brand`);

--
-- Indexes for table `category_product`
--
ALTER TABLE `category_product`
  ADD PRIMARY KEY (`id_category_product`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_news`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_customer` (`id_customer`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD KEY `id_order` (`id_order`),
  ADD KEY `id_product` (`id_product`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `id_category_product` (`id_category_product`,`id_category_brand`),
  ADD KEY `id_category_brand` (`id_category_brand`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category_brand`
--
ALTER TABLE `category_brand`
  MODIFY `id_category_brand` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `category_product`
--
ALTER TABLE `category_product`
  MODIFY `id_category_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`);

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `order` (`id_order`),
  ADD CONSTRAINT `order_detail_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`id_category_product`) REFERENCES `category_product` (`id_category_product`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`id_category_brand`) REFERENCES `category_brand` (`id_category_brand`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
