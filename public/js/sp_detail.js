const products = [
    { id:1, img: "https://bizweb.dktcdn.net/100/446/974/products/ao-thun-mlb-new-era-heavy-cotton-new-york-yankees-black-13086578-1.jpg?v=1691318321487", name: "Áo Thun MLB ", price: "299.000 VNĐ", description: "Áo thun MLB chất liệu cotton dày dặn, thoáng mát, phong cách trẻ trung và năng động." },
    { id:2, img: "https://product.hstatic.net/200000863757/product/z5594338311706_53123b2d888f84bf37ea7ce2c1371724_c360165a807e4baa8a89f5df76784e4c.jpg", name: "Áo Thu FiDe", price: "199.000 VNĐ", description: "Áo thun FiDe form rộng, chất liệu mềm mịn, phù hợp cho mọi hoạt động hàng ngày." },
    { id:3, img: "https://myo.vn/wp-content/uploads/2023/11/Ao-Thun-Den-MYO-Hinh-Phi-Hanh-Gia-Yeu-Radio.jpg", name: "Áo Thun Đen MYO", price: "310.000 VNĐ", description: "Thiết kế độc đáo với họa tiết phi hành gia, phù hợp cho các bạn trẻ yêu thích sự sáng tạo." },
    { id:4, img: "https://bizweb.dktcdn.net/thumb/1024x1024/100/442/302/products/img-0540-min.jpg?v=1665113226883", name: "Áo Thun HAFOS", price: "150.000 VNĐ", description: "Áo thun HAFOS kiểu dáng basic, dễ phối đồ, phù hợp với mọi phong cách." },
    { id:5, img: "https://vulcano.sgp1.digitaloceanspaces.com/media/13585/quan-jean-3004b-vulcano01.JPG", name: "Quần Jean Đen", price: "600.000 VNĐ", description: "Quần jean đen chất liệu denim cao cấp, form ôm vừa vặn, tạo phong cách cá tính." },
    { id:6, img: "https://product.hstatic.net/200000370449/product/56756_2998b578e0674b618a96b9777520e898_master.jpg", name: "Quần Ống Rộng Cạp Cao", price: "189.000 VNĐ", description: "Quần ống rộng cạp cao giúp tôn dáng, phù hợp cho các bạn yêu thích thời trang vintage." },
    { id:7, img: "https://product.hstatic.net/1000360022/product/quan-short-kaki-nam-ong-om-lung-luon-thun-form-slim__5__e03a1fc685d7404bb705814b0c772712_master.jpg", name: "Quần Short Kaki Đỏ", price: "100.000 VNĐ", description: "Quần short kaki chất liệu thoáng mát, phù hợp cho những ngày hè nóng bức." },
    { id:8, img: "https://polomanor.vn/cdn/shop/files/Polomanor_quanau_sidetab_capcao_xam_21122023_1.jpg?v=1739266746&width=1508", name: "Quần Tây Nam", price: "480.000 VNĐ", description: "Quần tây nam phong cách lịch lãm, chất liệu cao cấp, dễ dàng kết hợp với nhiều loại áo." },
    { id:9, img: "https://product.hstatic.net/200000588671/product/dsc07927_39e824282073414092b7a9c98fac9b41.jpg", name: "Sơ Mi Xanh Đen", price: "360.000 VNĐ", description: "Áo sơ mi xanh đen với chất liệu mềm mại, thích hợp cho môi trường công sở và sự kiện quan trọng." },
    { id:10, img: "https://product.hstatic.net/1000360022/product/ao-so-mi-trang-nam_5b6f3051856e49e8bc02015c087e58e1_1024x1024.jpg", name: "Sơ Mi Trắng", price: "300.000 VNĐ", description: "Áo sơ mi trắng classic, phong cách thanh lịch, dễ phối với các loại quần tây, jean." },
    { id:11, img: "https://maylanstore.com/wp-content/uploads/2024/03/ao-so-mi-flannel-ke-soc-11.jpg", name: "Sơ Mi Flannel", price: "200.000 VNĐ", description: "Sơ mi flannel kẻ sọc phong cách vintage, phù hợp cho những ngày se lạnh." },
    { id:12, img: "https://bizweb.dktcdn.net/100/396/594/products/7-33aabc7f-d571-449e-b161-4bfa6ee3c107.jpg?v=1715220037943", name: "Sơ Mi Đen Tay Ngắn", price: "350.000 VNĐ", description: "Áo sơ mi đen tay ngắn thoải mái, dễ phối đồ, phù hợp cho mọi dịp." },
];

// Lấy ID sản phẩm từ URL
const urlParams = new URLSearchParams(window.location.search);
const productId = parseInt(urlParams.get("id"));

// Tìm sản phẩm theo ID
const product = products.find(p => p.id === productId);

if (product) {
    document.getElementById("product-img").src = product.img;
    document.getElementById("product-img").alt = product.name;
    document.getElementById("product-name").textContent = product.name;
    document.getElementById("product-price").textContent = product.price;
    document.getElementById("product-description").textContent = product.description;
} else {
    document.querySelector(".product-detail").innerHTML = "<h2>Sản phẩm không tồn tại</h2>";
}
