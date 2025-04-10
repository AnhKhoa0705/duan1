-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 31, 2025 lúc 03:15 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Image` varchar(255) DEFAULT NULL,
  `Status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`ID`, `Name`, `Image`, `Status`) VALUES
(1, 'Áo thun nam', 'ao-thun-nam.jpg', 'Active'),
(2, 'Áo sơ mi nam', 'ao-so-mi-nam.jpg', 'Active'),
(3, 'Quần jeans nam', 'quan-jeans-nam.jpg', 'Active'),
(4, 'Quần kaki nam', 'quan-kaki-nam.jpg', 'Active'),
(5, 'Áo thun nữ', 'ao-thun-nu.jpg', 'Active'),
(6, 'Áo sơ mi nữ', 'ao-so-mi-nu.jpg', 'Active'),
(7, 'Váy', 'vay.jpg', 'Active'),
(8, 'Quần jeans nữ', 'quan-jeans-nu.jpg', 'Active'),
(9, 'Quần kaki nữ', 'quan-kaki-nu.jpg', 'Active'),
(10, 'Phụ kiện', 'phu-kien.jpg', 'Active');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `coupons`
--

CREATE TABLE `coupons` (
  `ID` int(11) NOT NULL,
  `Code` varchar(50) NOT NULL,
  `Discount` decimal(5,2) DEFAULT NULL,
  `Expiry_Date` date DEFAULT NULL,
  `Status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `coupons`
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
-- Cấu trúc bảng cho bảng `image`
--

CREATE TABLE `image` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Image_URL` varchar(255) DEFAULT NULL,
  `Status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `image`
--

INSERT INTO `image` (`ID`, `Name`, `Image_URL`, `Status`) VALUES
(1, 'Áo thun nam màu xanh', 'ao-thun-nam-1.jpg', 'Active'),
(2, 'Áo sơ mi nam trắng', 'ao-so-mi-nam-1.jpg', 'Active'),
(3, 'Quần jeans nam slimfit', 'quan-jeans-nam-1.jpg', 'Active'),
(4, 'Quần kaki nam màu be', 'quan-kaki-nam-1.jpg', 'Active'),
(5, 'Áo thun nữ màu hồng', 'ao-thun-nu-1.jpg', 'Active'),
(6, 'Áo sơ mi nữ hoa nhí', 'ao-so-mi-nu-1.jpg', 'Active'),
(7, 'Váy đầm dự tiệc', 'vay-1.jpg', 'Active'),
(8, 'Quần jeans nữ skinny', 'quan-jeans-nu-1.jpg', 'Active'),
(9, 'Quần kaki nữ màu đen', 'quan-kaki-nu-1.jpg', 'Active'),
(10, 'Thắt lưng nam da bò', 'that-lung-nam-1.jpg', 'Active');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
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
-- Đang đổ dữ liệu cho bảng `news`
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
-- Cấu trúc bảng cho bảng `new_category`
--

CREATE TABLE `new_category` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `new_category`
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
-- Cấu trúc bảng cho bảng `orders`
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
-- Đang đổ dữ liệu cho bảng `orders`
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
-- Cấu trúc bảng cho bảng `order_detail`
--

CREATE TABLE `order_detail` (
  `ID` int(11) NOT NULL,
  `Order_ID` int(11) DEFAULT NULL,
  `Variant_ID` int(11) DEFAULT NULL,
  `Price` decimal(10,2) DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_detail`
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
-- Cấu trúc bảng cho bảng `product`
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
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`ID`, `Category_ID`, `Image_ID`, `Name`, `Discount`, `Views`, `Description`, `Detail`, `Status`) VALUES
(1, 1, 1, 'Áo thun nam cổ tròn', 10.00, 1000, 'Áo thun nam chất liệu cotton 100%, thoáng mát', 'Màu xanh, size M, L...', 'Active'),
(2, 2, 2, 'Áo sơ mi nam trắng công sở', 5.00, 800, 'Áo sơ mi nam trắng chất liệu kate, kiểu dáng slimfit', 'Màu trắng, size M, L, XL...', 'Active'),
(3, 3, 3, 'Quần jeans nam slimfit', 15.00, 1200, 'Quần jeans nam slimfit, chất liệu denim cao cấp', 'Size 30, 32, 34...', 'Active'),
(4, 4, 4, 'Quần kaki nam màu be', 10.00, 1500, 'Quần kaki nam màu be, chất liệu kaki mềm mại', 'Size 30, 32, 34...', 'Active'),
(5, 5, 5, 'Áo thun nữ tay ngắn', 5.00, 2000, 'Áo thun nữ tay ngắn, chất liệu cotton, kiểu dáng trẻ trung', 'Màu hồng, size S, M, L...', 'Active'),
(6, 6, 6, 'Áo sơ mi nữ hoa nhí', 10.00, 1800, 'Áo sơ mi nữ hoa nhí, chất liệu voan mềm mại', 'Màu hoa nhí, size S, M, L...', 'Active'),
(7, 7, 7, 'Váy đầm dự tiệc', 20.00, 1500, 'Váy đầm dự tiệc, chất liệu lụa cao cấp', 'Màu đỏ, size M, L...', 'Active'),
(8, 8, 8, 'Quần jeans nữ skinny', 12.00, 1200, 'Quần jeans nữ skinny, chất liệu denim co giãn', 'Size 27, 28, 29...', 'Active'),
(9, 9, 9, 'Quần kaki nữ màu đen', 8.00, 1000, 'Quần kaki nữ màu đen, chất liệu kaki mềm mại', 'Size 27, 28, 29...', 'Active'),
(10, 10, 10, 'Thắt lưng nam da bò', 0.00, 800, 'Thắt lưng nam da bò cao cấp, kiểu dáng sang trọng', 'Màu đen, nâu...', 'Active');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_rate`
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
-- Đang đổ dữ liệu cho bảng `product_rate`
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
-- Cấu trúc bảng cho bảng `users`
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
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`ID`, `Username`, `Password`, `Name`, `Phone`, `Email`, `Role`, `Status`) VALUES
(1, 'user1', 'password123', 'Nguyễn Văn A', '0901234567', 'user1@example.com', 'User', 'Active'),
(2, 'user2', 'password456', 'Trần Thị B', '0912345678', 'user2@example.com', 'Admin', 'Active'),
(3, 'user3', 'password789', 'Lê Văn C', '0923456789', 'user3@example.com', 'User', 'Inactive');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `variant`
--

CREATE TABLE `variant` (
  `ID` int(11) NOT NULL,
  `Product_ID` int(11) DEFAULT NULL,
  `Size` varchar(50) DEFAULT NULL,
  `Color` varchar(50) DEFAULT NULL,
  `Price` decimal(10,2) DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `variant`
--

INSERT INTO `variant` (`ID`, `Product_ID`, `Size`, `Color`, `Price`, `Quantity`) VALUES
(1, 1, 'M', 'Xanh', 250000.00, 100),
(2, 1, 'L', 'Xanh', 250000.00, 80),
(3, 2, 'M', 'Trắng', 350000.00, 120),
(4, 3, '30', 'Xanh đen', 450000.00, 150),
(5, 4, '32', 'Be', 400000.00, 200),
(6, 5, 'S', 'Hồng', 200000.00, 90),
(7, 6, 'M', 'Hoa nhí', 300000.00, 70),
(8, 7, 'M', 'Đỏ', 800000.00, 60),
(9, 8, '27', 'Xanh đen', 420000.00, 85),
(10, 9, '28', 'Đen', 380000.00, 95);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Code` (`Code`);

--
-- Chỉ mục cho bảng `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `New_Cat_ID` (`New_Cat_ID`),
  ADD KEY `Image_ID` (`Image_ID`);

--
-- Chỉ mục cho bảng `new_category`
--
ALTER TABLE `new_category`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `User_ID` (`User_ID`),
  ADD KEY `Coupon_ID` (`Coupon_ID`);

--
-- Chỉ mục cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Order_ID` (`Order_ID`),
  ADD KEY `Variant_ID` (`Variant_ID`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Category_ID` (`Category_ID`),
  ADD KEY `Image_ID` (`Image_ID`);

--
-- Chỉ mục cho bảng `product_rate`
--
ALTER TABLE `product_rate`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Product_ID` (`Product_ID`),
  ADD KEY `User_ID` (`User_ID`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Username` (`Username`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Chỉ mục cho bảng `variant`
--
ALTER TABLE `variant`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Product_ID` (`Product_ID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `coupons`
--
ALTER TABLE `coupons`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `image`
--
ALTER TABLE `image`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `new_category`
--
ALTER TABLE `new_category`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `product_rate`
--
ALTER TABLE `product_rate`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `variant`
--
ALTER TABLE `variant`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`New_Cat_ID`) REFERENCES `new_category` (`ID`);

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `users` (`ID`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`Coupon_ID`) REFERENCES `coupons` (`ID`);

--
-- Các ràng buộc cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`Order_ID`) REFERENCES `orders` (`ID`),
  ADD CONSTRAINT `order_detail_ibfk_2` FOREIGN KEY (`Variant_ID`) REFERENCES `variant` (`ID`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`Category_ID`) REFERENCES `category` (`ID`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`Image_ID`) REFERENCES `image` (`ID`);

--
-- Các ràng buộc cho bảng `product_rate`
--
ALTER TABLE `product_rate`
  ADD CONSTRAINT `product_rate_ibfk_1` FOREIGN KEY (`Product_ID`) REFERENCES `product` (`ID`),
  ADD CONSTRAINT `product_rate_ibfk_2` FOREIGN KEY (`User_ID`) REFERENCES `users` (`ID`);

--
-- Các ràng buộc cho bảng `variant`
--
ALTER TABLE `variant`
  ADD CONSTRAINT `variant_ibfk_1` FOREIGN KEY (`Product_ID`) REFERENCES `product` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
