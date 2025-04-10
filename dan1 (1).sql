-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2025 at 08:54 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dan1`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Image` varchar(255) DEFAULT NULL,
  `Status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`ID`, `Name`, `Image`, `Status`) VALUES
(1, 'Áo thun', 'ao-thun-nam.jpg', 'Active'),
(2, 'Áo sơ mi', 'ao-so-mi-nam.jpg', 'Active'),
(3, 'Quần jeans', 'quan-jeans-nam.jpg', 'Active'),
(4, 'Quần kaki', 'quan-kaki-nam.jpg', 'Active'),
(5, 'Váy', 'ao-thun-nu.jpg', 'Active'),
(6, 'Phụ kiện', 'ao-so-mi-nu.jpg', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `ID` int(11) NOT NULL,
  `Code` varchar(50) NOT NULL,
  `Discount` decimal(5,2) DEFAULT NULL,
  `Expiry_Date` date DEFAULT NULL,
  `Status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`ID`, `Code`, `Discount`, `Expiry_Date`, `Status`) VALUES
(1, 'GIAM10', 10.00, '2023-11-30', 'Active'),
(2, 'GIAM20', 20.00, '2023-12-31', 'Active'),
(3, 'FREESHIP', 5.00, '2023-11-15', 'Active'),
(4, 'VIP10', 10.00, '2023-12-15', 'Inactive'),
(5, 'NEW5', 5.00, '2023-11-20', 'Active'),
(6, 'BIGSALE', 15.00, '2023-12-20', 'Active'),
(7, 'FLASH20', 20.00, '2023-11-10', 'Inactive'),
(8, 'MEMBER10', 10.00, '2023-12-10', 'Active'),
(9, 'HOLIDAY', 25.00, '2023-11-05', 'Active'),
(10, 'ENDYEAR', 30.00, '2023-12-05', 'Inactive');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Image_URL` varchar(255) DEFAULT NULL,
  `Status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`ID`, `Name`, `Image_URL`, `Status`) VALUES
(1, 'Áo thun nam màu xanh', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkoLoy5DVcBovEDKJm_DY6OsmOYnAMYMl7iA&s', 'Active'),
(2, 'Áo sơ mi nam trắng', 'aosomi.jpg', 'Active'),
(3, 'Quần jeans nam slimfit', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRdQcBgDs2LyfmtjtY0sjEIr4LhOIAciKhimKLNz7pxi_kIQ9Lxm1uGp25XNV8PEPPnUXk&usqp=CAU', 'Active'),
(4, 'Quần kaki nam màu be', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQz8TROYl411hnUfmDtw1LMo_LewN2PRc8HhDjwrdiRuouHt3e39SHltPKLgke3cPxZP8g&usqp=CAU', 'Active'),
(5, 'Áo thun nữ màu hồng', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQfvyyTvU2sp4uq57k0Cd7lnJBuOTM5Ghm4PQ&s', 'Active'),
(6, 'Áo sơ mi nữ hoa nhí', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXESvBjP-wP-Z3gjC6rInA2WH7Ckq6GR5HhEJ2T7J43UKd3V0uRrbFpbWU1pz1Te8Q0uI&usqp=CAU', 'Active'),
(7, 'Váy đầm dự tiệc', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTOLx3yx3bSveMXF671lhcZ8UHaYINTuuZYzA&s', 'Active'),
(8, 'Quần jeans nữ skinny', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR70fkPw9LOhfgI-Jmfke950BxA5kYXS3YcJQ&s', 'Active'),
(9, 'Quần kaki nữ màu đen', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR3PxZD7BwE_Egx7NJh-Bd9ZJUBWxx34MtvWA&s', 'Active'),
(10, 'Thắt lưng nam da bò', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR3PxZD7BwE_Egx7NJh-Bd9ZJUBWxx34MtvWA&s', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `ID` int(11) NOT NULL,
  `New_Cat_ID` int(11) DEFAULT NULL,
  `Image_ID` int(11) DEFAULT NULL,
  `Name` varchar(255) NOT NULL,
  `Create_Date` date DEFAULT NULL,
  `Content` text DEFAULT NULL,
  `Status` varchar(50) DEFAULT NULL,
  `Likes` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`ID`, `New_Cat_ID`, `Image_ID`, `Name`, `Create_Date`, `Content`, `Status`, `Likes`) VALUES
(1, 1, 1, 'Xu hướng áo thun nam hè 2023', '2023-10-26', 'Các mẫu áo thun nam hot nhất hè 2023...', 'Active', 100),
(2, 2, 5, 'Váy hoa nhí lên ngôi hè này', '2023-10-25', 'Váy hoa nhí là item không thể thiếu trong tủ đồ hè này...', 'Active', 80),
(3, 3, 10, 'Khuyến mãi khủng cuối tuần', '2023-10-24', 'Giảm giá lên đến 50% cho tất cả sản phẩm...', 'Active', 120),
(4, 4, 2, 'Áo sơ mi nam mới nhất', '2023-10-23', 'Bộ sưu tập áo sơ mi nam công sở và dạo phố...', 'Active', 50),
(5, 5, 3, 'Mẹo phối đồ với quần jeans nam', '2023-10-22', 'Hướng dẫn chi tiết cách phối đồ với quần jeans nam...', 'Active', 90),
(6, 6, 6, 'Review áo sơ mi nữ hoa nhí', '2023-10-21', 'Đánh giá chi tiết áo sơ mi nữ hoa nhí...', 'Active', 70),
(7, 7, 7, 'Xu hướng váy đầm dự tiệc', '2023-10-20', 'Các mẫu váy đầm dự tiệc hot nhất hiện nay...', 'Active', 60),
(8, 8, 8, 'Sự kiện thời trang Thu Đông 2023', '2023-10-19', 'Thông tin về sự kiện thời trang Thu Đông 2023...', 'Active', 85),
(9, 9, 9, 'Hỏi đáp về quần kaki nữ', '2023-10-18', 'Giải đáp các thắc mắc về quần kaki nữ...', 'Active', 95),
(10, 10, 4, 'Thanh lý quần kaki nam giá rẻ', '2023-10-17', 'Quần kaki nam thanh lý giá cực sốc...', 'Active', 55);

-- --------------------------------------------------------

--
-- Table structure for table `new_category`
--

CREATE TABLE `new_category` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `new_category`
--

INSERT INTO `new_category` (`ID`, `Name`, `Status`) VALUES
(1, 'Tin thời trang nam', 'Active'),
(2, 'Tin thời trang nữ', 'Active'),
(3, 'Khuyến mãi', 'Active'),
(4, 'Sản phẩm mới', 'Active'),
(5, 'Mẹo phối đồ', 'Active'),
(6, 'Review sản phẩm', 'Active'),
(7, 'Xu hướng thời trang', 'Active'),
(8, 'Sự kiện thời trang', 'Active'),
(9, 'Hỏi đáp thời trang', 'Active'),
(10, 'Thanh lý hàng tồn', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `ID` int(11) NOT NULL,
  `User_ID` int(11) DEFAULT NULL,
  `Coupon_ID` int(11) DEFAULT NULL,
  `Name` varchar(255) NOT NULL,
  `Phone` varchar(20) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Order_Date` date DEFAULT NULL,
  `Payment_Method` varchar(50) DEFAULT NULL,
  `Total_Amount` decimal(10,2) DEFAULT NULL,
  `Delivery_Date` date DEFAULT NULL,
  `Status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ID`, `User_ID`, `Coupon_ID`, `Name`, `Phone`, `Address`, `Order_Date`, `Payment_Method`, `Total_Amount`, `Delivery_Date`, `Status`) VALUES
(1, 1, 1, 'Nguyễn Văn A', '0901234567', '123 Đường ABC, Quận 1, TP.HCM', '2023-10-26', 'COD', 2500000.00, '2023-10-27', 'Completed'),
(2, 2, 2, 'Trần Thị B', '0912345678', '456 Đường XYZ, Quận 2, TP.HCM', '2023-10-25', 'Credit Card', 3000000.00, '2023-10-25', 'Completed'),
(3, 3, 3, 'Lê Văn C', '0923456789', '789 Đường MNO, Quận 3, TP.HCM', '2023-10-24', 'PayPal', 1500000.00, '2023-10-24', 'Completed'),
(4, 2, 3, 'Phạm Thị D', '0934567890', '101 Đường PQR, Quận 4, TP.HCM', '2023-10-23', 'COD', 650000.00, '2023-10-24', 'Processing'),
(5, 3, 2, 'Hoàng Văn E', '0945678901', '112 Đường STU, Quận 5, TP.HCM', '2023-10-22', 'Credit Card', 4800000.00, '2023-10-22', 'Completed'),
(6, 2, 2, 'Vũ Thị F', '0956789012', '131 Đường VWX, Quận 6, TP.HCM', '2023-10-21', 'PayPal', 3800000.00, '2023-10-21', 'Completed'),
(7, 1, 1, 'Đỗ Văn G', '0967890123', '141 Đường YZA, Quận 7, TP.HCM', '2023-10-20', 'COD', 800000.00, '2023-10-21', 'Processing'),
(8, 2, 3, 'Bùi Thị H', '0978901234', '151 Đường BCD, Quận 8, TP.HCM', '2023-10-19', 'Credit Card', 5500000.00, '2023-10-19', 'Completed'),
(9, 3, 2, 'Phan Văn I', '0989012345', '161 Đường EFG, Quận 9, TP.HCM', '2023-10-18', 'PayPal', 2800000.00, '2023-10-18', 'Completed'),
(10, 1, 1, 'Hồ Thị K', '0990123456', '171 Đường HIJ, Quận 10, TP.HCM', '2023-10-17', 'COD', 500000.00, '2023-10-18', 'Processing');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `ID` int(11) NOT NULL,
  `Order_ID` int(11) DEFAULT NULL,
  `Variant_ID` int(11) DEFAULT NULL,
  `Price` decimal(10,2) DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`ID`, `Order_ID`, `Variant_ID`, `Price`, `Quantity`) VALUES
(1, 1, 1, 250000.00, 1),
(2, 2, 3, 350000.00, 1),
(3, 3, 4, 450000.00, 1),
(4, 4, 5, 400000.00, 1),
(5, 5, 6, 200000.00, 1),
(6, 6, 7, 300000.00, 1),
(7, 7, 8, 800000.00, 1),
(8, 8, 9, 420000.00, 1),
(9, 9, 10, 380000.00, 1),
(10, 10, 2, 250000.00, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ID` int(11) NOT NULL,
  `Category_ID` int(11) DEFAULT NULL,
  `Image_ID` int(11) DEFAULT NULL,
  `Name` varchar(255) NOT NULL,
  `Discount` decimal(5,2) DEFAULT NULL,
  `Views` int(11) DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `Detail` text DEFAULT NULL,
  `Status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID`, `Category_ID`, `Image_ID`, `Name`, `Discount`, `Views`, `Description`, `Detail`, `Status`) VALUES
(1, 1, 1, 'Áo thun nam cổ tròn', 10.00, 1000, 'Áo thun nam chất liệu cotton 100%, thoáng mát', 'Màu xanh, size M, L...', 'Active'),
(2, 2, 2, 'Áo sơ mi nam xanh đen công sở', 5.00, 800, 'Áo sơ mi nam xanh đen chất liệu kate, kiểu dáng slimfit', 'Màu trắng, size M, L, XL...', 'Active'),
(3, 3, 3, 'Quần jeans nam slimfit', 15.00, 1200, 'Quần jeans nam slimfit, chất liệu denim cao cấp', 'Size 30, 32, 34...', 'Active'),
(4, 4, 4, 'Quần kaki nam màu be', 10.00, 1500, 'Quần kaki nam màu be, chất liệu kaki mềm mại', 'Size 30, 32, 34...', 'Active'),
(5, 1, 5, 'Áo thun nữ tay ngắn', 5.00, 2000, 'Áo thun nữ tay ngắn, chất liệu cotton, kiểu dáng trẻ trung', 'Màu hồng, size S, M, L...', 'Active'),
(6, 2, 6, 'Áo sơ mi nữ hoa nhí', 10.00, 1800, 'Áo sơ mi nữ hoa nhí, chất liệu voan mềm mại', 'Màu hoa nhí, size S, M, L...', 'Active'),
(7, 5, 7, 'Váy đầm dự tiệc', 20.00, 1500, 'Váy đầm dự tiệc, chất liệu lụa cao cấp', 'Màu đỏ, size M, L...', 'Active'),
(8, 3, 8, 'Quần jeans nữ skinny', 12.00, 1200, 'Quần jeans nữ skinny, chất liệu denim co giãn', 'Size 27, 28, 29...', 'Active'),
(9, 4, 9, 'Quần kaki nữ màu đen', 8.00, 1000, 'Quần kaki nữ màu đen, chất liệu kaki mềm mại', 'Size 27, 28, 29...', 'Active'),
(10, 6, 10, 'Thắt lưng nam da bò', 0.00, 800, 'Thắt lưng nam da bò cao cấp, kiểu dáng sang trọng', 'Màu đen, nâu...', 'Active'),
(11, 1, 1, 'Áo thun nam basic', 10.00, 1500, 'Chất liệu cotton, thoáng mát', 'Màu đen, trắng, xanh, size M, L, XL', 'Active'),
(12, 1, 1, 'Áo thun nam thể thao', 5.00, 1200, 'Co giãn tốt, phù hợp tập gym', 'Màu đen, xanh lá, size S, M, L', 'Active'),
(13, 2, 2, 'Áo sơ mi nam tay dài', 12.00, 800, 'Kiểu dáng công sở', 'Màu trắng, đen, xanh, size M, L, XL', 'Active'),
(14, 2, 2, 'Áo sơ mi nam caro', 10.00, 900, 'Chất liệu kate, thoáng khí', 'Màu đỏ, xanh dương, size M, L', 'Active'),
(15, 3, 3, 'Quần jeans nam rách gối', 15.00, 1300, 'Phong cách trẻ trung', 'Màu xanh đậm, đen, size 30, 31, 32', 'Active'),
(16, 3, 3, 'Quần jeans nam ống suông', 8.00, 1200, 'Dáng classic', 'Màu xanh nhạt, size 29, 30, 31', 'Active'),
(17, 5, 7, 'Váy đầm dự tiệc', 12.00, 700, 'Thiết kế sang trọng', 'Màu đỏ, xanh navy, size S, M, L', 'Active'),
(18, 3, 8, 'Quần jeans nữ skinny', 10.00, 1000, 'Dáng ôm, tôn dáng', 'Màu xanh, size 26, 27, 28', 'Active'),
(19, 3, 8, 'Quần jeans nữ boyfriend', 8.00, 1100, 'Phong cách năng động', 'Màu xanh đậm, size 28, 29, 30', 'Active'),
(21, 1, 1, 'Áo thun nam cổ tim', 10.00, 1100, 'Chất liệu cotton 100%, co giãn tốt', 'Màu trắng, đen, xanh, size M, L, XL', 'Active'),
(22, 1, 1, 'Áo thun nam oversize', 5.00, 900, 'Phong cách rộng rãi, thoải mái', 'Màu be, nâu, xanh rêu, size M, L', 'Active'),
(23, 2, 2, 'Áo sơ mi nam kẻ sọc', 12.00, 850, 'Thiết kế thanh lịch, phù hợp công sở', 'Màu xanh, đỏ, trắng, size M, L, XL', 'Active'),
(24, 2, 2, 'Áo sơ mi nam trơn', 10.00, 950, 'Kiểu dáng slimfit, tôn dáng', 'Màu đen, trắng, xám, size M, L, XL', 'Active'),
(25, 3, 3, 'Quần jeans nam skinny', 15.00, 1400, 'Dáng ôm body, co giãn tốt', 'Màu xanh nhạt, xanh đậm, size 29, 30, 31', 'Active'),
(26, 3, 3, 'Quần jeans nam baggy', 8.00, 1250, 'Phong cách hiện đại, thoải mái', 'Màu đen, xám, xanh, size 28, 29, 30', 'Active'),
(27, 9, 9, 'Quần kaki nữ ống rộng', 10.00, 1050, 'Chất liệu mềm mại, dễ phối đồ', 'Màu be, nâu, đen, size S, M, L', 'Active'),
(28, 9, 9, 'Quần kaki nữ lưng cao', 5.00, 980, 'Dáng slimfit, tôn vòng eo', 'Màu trắng, đen, xanh rêu, size S, M, L', 'Active'),
(29, 10, 10, 'Dây nịt da nam', 5.00, 800, 'Chất liệu da bò thật, bền đẹp', 'Màu đen, nâu', 'Active'),
(30, 10, 10, 'Mũ lưỡi trai nam nữ', 8.00, 1200, 'Chất liệu cotton, chống nắng', 'Màu trắng, đen, xanh, đỏ', 'Active'),
(31, 7, 7, 'Váy hoa nữ vintage', 12.00, 1350, 'Thiết kế cổ điển, phong cách vintage', 'Màu xanh, vàng, hồng, size S, M, L', 'Active'),
(32, 7, 7, 'Váy bodycon nữ', 10.00, 1100, 'Dáng ôm, tôn dáng quyến rũ', 'Màu đen, đỏ, trắng, size S, M, L', 'Active'),
(33, 7, 7, 'Váy maxi đi biển', 15.00, 1400, 'Phong cách nhẹ nhàng, nữ tính', 'Màu xanh biển, trắng, vàng, size M, L', 'Active'),
(34, 5, 5, 'Áo thun nữ crop top', 8.00, 1250, 'Dáng lửng, trẻ trung, năng động', 'Màu trắng, đen, hồng, size S, M, L', 'Active'),
(35, 5, 5, 'Áo thun nữ form rộng', 5.00, 950, 'Thoải mái, dễ phối đồ', 'Màu xanh, cam, nâu, size M, L, XL', 'Active'),
(36, 5, 5, 'Áo thun nữ in hình', 10.00, 1150, 'Chất liệu cotton, họa tiết đẹp', 'Màu trắng, hồng, xanh, size M, L', 'Active'),
(37, 8, 8, 'Quần jeans nữ baggy', 15.00, 1400, 'Dáng rộng, thoải mái', 'Màu xanh, đen, trắng, size 26, 27, 28', 'Active'),
(38, 8, 8, 'Quần jeans nữ rách gối', 12.00, 1300, 'Phong cách cá tính', 'Màu xanh đậm, xanh nhạt, size 26, 27, 28', 'Active'),
(39, 8, 8, 'Quần jeans nữ skinny', 10.00, 0, 'Dáng ôm, co giãn tốt', 'Màu đen, trắng, xanh, size 25, 26, 27', 'Active'),
(40, 10, 10, 'Thắt lưng nữ da cao cấp', 10.00, 900, 'Chất liệu da thật, bền đẹp', 'Màu đen, nâu, size Freesize', 'Active'),
(41, 2, 2, 'Áo sơ mi nam cổ tàu', 8.00, 1200, 'Chất liệu vải linen, mát mẻ', 'Màu be, trắng, đen, size M, L', 'Active'),
(42, 3, 3, 'Quần jeans nam slimfit', 12.00, 1400, 'Dáng ôm, co giãn nhẹ', 'Màu xanh, đen, size 28, 29, 30', 'Active'),
(43, 4, 4, 'Quần kaki nam ống đứng', 10.00, 1300, 'Phong cách lịch lãm, dễ phối đồ', 'Màu be, xanh rêu, nâu, size 30, 31, 32', 'Active'),
(44, 5, 5, 'Áo thun nữ cổ tròn', 8.00, 1500, 'Chất liệu cotton, thoải mái', 'Màu trắng, hồng, xanh pastel, size S, M, L', 'Active'),
(45, 6, 6, 'Áo sơ mi nữ tay phồng', 15.00, 1100, 'Thiết kế tay bồng nữ tính', 'Màu trắng, xanh navy, be, size M, L', 'Active'),
(46, 7, 7, 'Váy xòe công sở', 10.00, 1200, 'Phong cách thanh lịch, nữ tính', 'Màu đen, đỏ đô, xanh dương, size S, M, L', 'Active'),
(47, 8, 8, 'Quần jeans nữ ống loe', 12.00, 1400, 'Dáng tôn dáng, chất vải cao cấp', 'Màu xanh đậm, xanh nhạt, size 26, 27, 28', 'Active'),
(48, 9, 9, 'Quần kaki nữ dáng baggy', 10.00, 1300, 'Thoải mái, dễ phối đồ', 'Màu be, nâu, xanh rêu, size S, M, L', 'Active'),
(49, 10, 10, 'Dây nịt nam da bò', 8.00, 1000, 'Chất liệu da thật, khóa kim loại cao cấp', 'Màu nâu, đen, size Freesize', 'Active'),
(50, 1, 1, 'Áo thun nam Oversize', 10.00, 1600, 'Form rộng, phong cách streetwear', 'Màu đen, trắng, xám, size M, L, XL', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `product_rate`
--

CREATE TABLE `product_rate` (
  `ID` int(11) NOT NULL,
  `Product_ID` int(11) DEFAULT NULL,
  `User_ID` int(11) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Status` varchar(50) DEFAULT NULL,
  `Rating` int(11) DEFAULT NULL,
  `Review` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_rate`
--

INSERT INTO `product_rate` (`ID`, `Product_ID`, `User_ID`, `Date`, `Status`, `Rating`, `Review`) VALUES
(1, 1, 1, '2023-10-26', 'Active', 5, 'Sản phẩm tuyệt vời!'),
(2, 2, 2, '2023-10-25', 'Active', 4, 'Rất tốt, nhưng giá hơi cao.'),
(3, 3, 3, '2023-10-24', 'Active', 5, 'Quần jeans rất đẹp.'),
(4, 4, 1, '2023-10-23', 'Active', 4, 'Quần kaki mặc thoải mái.'),
(5, 5, 3, '2023-10-22', 'Active', 5, 'Áo thun nữ rất xinh.'),
(6, 6, 3, '2023-10-21', 'Active', 4, 'Áo sơ mi nữ đẹp.'),
(7, 7, 2, '2023-10-20', 'Active', 5, 'Váy rất sang trọng.'),
(8, 8, 3, '2023-10-19', 'Active', 4, 'Quần jeans nữ mặc vừa vặn.'),
(9, 9, 2, '2023-10-18', 'Active', 5, 'Quần kaki nữ đẹp.'),
(10, 10, 1, '2023-10-17', 'Active', 4, 'Thắt lưng đẹp.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Phone` varchar(20) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Role` varchar(50) DEFAULT NULL,
  `Status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Username`, `Password`, `Name`, `Phone`, `Email`, `Role`, `Status`) VALUES
(1, 'user1', 'password123', 'Nguyễn Văn A', '0901234567', 'user1@example.com', 'User', 'Active'),
(2, 'user2', 'password456', 'Trần Thị B', '0912345678', 'user2@example.com', 'Admin', 'Active'),
(3, 'user3', 'password789', 'Lê Văn C', '0923456789', 'user3@example.com', 'User', 'Inactive');

-- --------------------------------------------------------

--
-- Table structure for table `variant`
--

CREATE TABLE `variant` (
  `ID` int(11) NOT NULL,
  `Product_ID` int(11) DEFAULT NULL,
  `option_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `variant`
--

INSERT INTO `variant` (`ID`, `Product_ID`, `option_ID`) VALUES
(51, 1, 1),
(52, 1, 2),
(53, 1, 3),
(54, 1, 4),
(55, 2, 5),
(56, 2, 6),
(57, 2, 7),
(58, 2, 8),
(59, 3, 9),
(60, 3, 10),
(61, 3, 1),
(62, 3, 2),
(63, 4, 3),
(64, 4, 4),
(65, 4, 5),
(66, 4, 6),
(67, 5, 7),
(68, 5, 8),
(69, 5, 9),
(70, 5, 10),
(71, 6, 1),
(72, 6, 2),
(73, 6, 3),
(74, 6, 4),
(75, 7, 5),
(76, 7, 6),
(77, 7, 7),
(78, 7, 8),
(79, 8, 9),
(80, 8, 10),
(81, 8, 1),
(82, 8, 2),
(83, 9, 3),
(84, 9, 4),
(85, 9, 5),
(86, 9, 6),
(87, 10, 7),
(88, 10, 8),
(89, 10, 9),
(90, 10, 10),
(91, 11, 1),
(92, 11, 2),
(93, 11, 3),
(94, 11, 4),
(95, 12, 5),
(96, 12, 6),
(97, 12, 7),
(98, 12, 8),
(99, 13, 9),
(100, 13, 10),
(101, 13, 1),
(102, 13, 2),
(103, 14, 3),
(104, 14, 4),
(105, 14, 5),
(106, 14, 6),
(107, 15, 7),
(108, 15, 8),
(109, 15, 9),
(110, 15, 10),
(111, 16, 1),
(112, 16, 2),
(113, 16, 3),
(114, 16, 4),
(115, 17, 5),
(116, 17, 6),
(117, 17, 7),
(118, 17, 8),
(119, 18, 9),
(120, 18, 10),
(121, 18, 1),
(122, 18, 2),
(123, 19, 3),
(124, 19, 4),
(125, 19, 5),
(126, 19, 6),
(127, 21, 1),
(128, 21, 2),
(129, 21, 3),
(130, 21, 4),
(131, 22, 5),
(132, 22, 6),
(133, 22, 7),
(134, 22, 8),
(135, 23, 9),
(136, 23, 10),
(137, 23, 1),
(138, 23, 2),
(139, 24, 3),
(140, 24, 4),
(141, 24, 5),
(142, 24, 6),
(143, 25, 7),
(144, 25, 8),
(145, 25, 9),
(146, 25, 10),
(147, 26, 1),
(148, 26, 2),
(149, 26, 3),
(150, 26, 4),
(151, 27, 5),
(152, 27, 6),
(153, 27, 7),
(154, 27, 8),
(155, 28, 9),
(156, 28, 10),
(157, 28, 1),
(158, 28, 2),
(159, 29, 3),
(160, 29, 4),
(161, 29, 5),
(162, 29, 6),
(163, 30, 7),
(164, 30, 8),
(165, 30, 9),
(166, 30, 10),
(167, 31, 1),
(168, 31, 2),
(169, 31, 3),
(170, 31, 4),
(171, 32, 5),
(172, 32, 6),
(173, 32, 7),
(174, 32, 8),
(175, 33, 9),
(176, 33, 10),
(177, 33, 1),
(178, 33, 2),
(179, 34, 3),
(180, 34, 4),
(181, 34, 5),
(182, 34, 6),
(183, 35, 7),
(184, 35, 8),
(185, 35, 9),
(186, 35, 10),
(187, 36, 1),
(188, 36, 2),
(189, 36, 3),
(190, 36, 4),
(191, 37, 5),
(192, 37, 6),
(193, 37, 7),
(194, 37, 8),
(195, 38, 9),
(196, 38, 10),
(197, 38, 1),
(198, 38, 2),
(199, 39, 3),
(200, 39, 4),
(201, 39, 5),
(202, 39, 6),
(203, 40, 7),
(204, 40, 8),
(205, 40, 9),
(206, 40, 10),
(207, 41, 1),
(208, 41, 2),
(209, 41, 3),
(210, 41, 4),
(211, 42, 5),
(212, 42, 6),
(213, 42, 7),
(214, 42, 8),
(215, 43, 9),
(216, 43, 10),
(217, 43, 1),
(218, 43, 2),
(219, 44, 3),
(220, 44, 4),
(221, 44, 5),
(222, 44, 6),
(223, 45, 7),
(224, 45, 8),
(225, 45, 9),
(226, 45, 10),
(227, 46, 1),
(228, 46, 2),
(229, 46, 3),
(230, 46, 4),
(231, 47, 5),
(232, 47, 6),
(233, 47, 7),
(234, 47, 8),
(235, 48, 9),
(236, 48, 10),
(237, 48, 1),
(238, 48, 2),
(239, 49, 3),
(240, 49, 4),
(241, 49, 5),
(242, 49, 6),
(243, 50, 7),
(244, 50, 8),
(245, 50, 9),
(246, 50, 10);

-- --------------------------------------------------------

--
-- Table structure for table `variant_option`
--

CREATE TABLE `variant_option` (
  `id` int(11) NOT NULL,
  `size` varchar(10) DEFAULT NULL,
  `color` varchar(50) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `variant_option`
--

INSERT INTO `variant_option` (`id`, `size`, `color`, `price`, `quantity`) VALUES
(1, 'S', 'Đỏ', 200000.00, 10),
(2, 'M', 'Đỏ', 210000.00, 15),
(3, 'L', 'Đỏ', 220000.00, 20),
(4, 'XL', 'Xanh', 200000.00, 10),
(5, 'M', 'Xanh', 210000.00, 15),
(6, 'L', 'Xanh', 220000.00, 20),
(7, 'S', 'Đen', 200000.00, 10),
(8, 'XL', 'Đen', 210000.00, 15),
(9, 'L', 'Đen', 220000.00, 20),
(10, 'XL', 'Trắng', 250000.00, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Code` (`Code`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `New_Cat_ID` (`New_Cat_ID`),
  ADD KEY `Image_ID` (`Image_ID`);

--
-- Indexes for table `new_category`
--
ALTER TABLE `new_category`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `User_ID` (`User_ID`),
  ADD KEY `Coupon_ID` (`Coupon_ID`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Order_ID` (`Order_ID`),
  ADD KEY `Variant_ID` (`Variant_ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Category_ID` (`Category_ID`),
  ADD KEY `Image_ID` (`Image_ID`);

--
-- Indexes for table `product_rate`
--
ALTER TABLE `product_rate`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Product_ID` (`Product_ID`),
  ADD KEY `User_ID` (`User_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Username` (`Username`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `variant`
--
ALTER TABLE `variant`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Product_ID` (`Product_ID`),
  ADD KEY `fk_variant_option` (`option_ID`);

--
-- Indexes for table `variant_option`
--
ALTER TABLE `variant_option`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `new_category`
--
ALTER TABLE `new_category`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `product_rate`
--
ALTER TABLE `product_rate`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `variant`
--
ALTER TABLE `variant`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;

--
-- AUTO_INCREMENT for table `variant_option`
--
ALTER TABLE `variant_option`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`New_Cat_ID`) REFERENCES `new_category` (`ID`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `users` (`ID`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`Coupon_ID`) REFERENCES `coupons` (`ID`);

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`Order_ID`) REFERENCES `orders` (`ID`),
  ADD CONSTRAINT `order_detail_ibfk_2` FOREIGN KEY (`Variant_ID`) REFERENCES `variant` (`ID`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`Category_ID`) REFERENCES `category` (`ID`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`Image_ID`) REFERENCES `image` (`ID`);

--
-- Constraints for table `product_rate`
--
ALTER TABLE `product_rate`
  ADD CONSTRAINT `product_rate_ibfk_1` FOREIGN KEY (`Product_ID`) REFERENCES `product` (`ID`),
  ADD CONSTRAINT `product_rate_ibfk_2` FOREIGN KEY (`User_ID`) REFERENCES `users` (`ID`);

--
-- Constraints for table `variant`
--
ALTER TABLE `variant`
  ADD CONSTRAINT `fk_variant_option` FOREIGN KEY (`option_ID`) REFERENCES `variant_option` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `variant_ibfk_1` FOREIGN KEY (`Product_ID`) REFERENCES `product` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
