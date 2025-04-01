const products = [
    {
        id: 1,
        img: "https://bizweb.dktcdn.net/100/446/974/products/ao-thun-mlb-new-era-heavy-cotton-new-york-yankees-black-13086578-1.jpg?v=1691318321487",
        name: "Áo Thun MLB",
        price: "299.000 VNĐ",
        colors: ["#000000", "#FFFFFF"],
        description: "Áo thun MLB phong cách thể thao, chất liệu cotton cao cấp, thoáng mát, phù hợp cho cả nam và nữ."
    },
    {
        id: 2,
        img: "https://product.hstatic.net/200000863757/product/z5594338311706_53123b2d888f84bf37ea7ce2c1371724_c360165a807e4baa8a89f5df76784e4c.jpg",
        name: "Áo Thu FiDe",
        price: "199.000 VNĐ",
        colors: ["#FFFFFF"],
        description: "Áo thun FiDe thiết kế tối giản, màu trắng tinh tế, dễ phối đồ, phù hợp cho các dịp casual."
    },
    {
        id: 3,
        img: "https://myo.vn/wp-content/uploads/2023/11/Ao-Thun-Den-MYO-Hinh-Phi-Hanh-Gia-Yeu-Radio.jpg",
        name: "Áo Thun Đen MYO",
        price: "310.000 VNĐ",
        colors: ["#000000"],
        description: "Áo thun MYO màu đen với họa tiết phi hành gia độc đáo, chất liệu mềm mại, thoải mái khi mặc."
    },
    {
        id: 4,
        img: "https://bizweb.dktcdn.net/thumb/1024x1024/100/442/302/products/img-0540-min.jpg?v=1665113226883",
        name: "Áo Thun HAFOS",
        price: "150.000 VNĐ",
        colors: ["#FFFFFF", "#000000"],
        description: "Áo thun HAFOS giá rẻ, thiết kế đơn giản, có hai màu trắng và đen, phù hợp cho mọi lứa tuổi."
    },
    {
        id: 5,
        img: "https://vulcano.sgp1.digitaloceanspaces.com/media/13585/quan-jean-3004b-vulcano01.JPG",
        name: "Quần Jean Đen",
        price: "600.000 VNĐ",
        colors: ["#000000"],
        description: "Quần jean đen thời thượng, form slim fit, chất liệu denim cao cấp, bền đẹp, dễ phối đồ."
    },
    {
        id: 6,
        img: "https://product.hstatic.net/200000370449/product/56756_2998b578e0674b618a96b9777520e898_master.jpg",
        name: "Quần Ống Rộng Cạp Cao",
        price: "189.000 VNĐ",
        colors: ["#000000", "#FFFFFF"],
        description: "Quần ống rộng cạp cao, phong cách hiện đại, có hai màu đen và trắng, tôn dáng, thoải mái."
    },
    {
        id: 7,
        img: "https://product.hstatic.net/1000360022/product/quan-short-kaki-nam-ong-om-lung-luon-thun-form-slim__5__e03a1fc685d7404bb705814b0c772712_master.jpg",
        name: "Quần Short Kaki Đỏ",
        price: "100.000 VNĐ",
        colors: ["#FF0000"],
        description: "Quần short kaki đỏ nổi bật, lưng thun thoải mái, form slim, lý tưởng cho các hoạt động ngoài trời."
    },
    {
        id: 8,
        img: "https://polomanor.vn/cdn/shop/files/Polomanor_quanau_sidetab_capcao_xam_21122023_1.jpg?v=1739266746&width=1508",
        name: "Quần Tây Nam",
        price: "480.000 VNĐ",
        colors: ["#808080"],
        description: "Quần tây nam màu xám, thiết kế lịch lãm, cạp cao, phù hợp cho công việc và các sự kiện trang trọng."
    },
    {
        id: 9,
        img: "https://product.hstatic.net/200000588671/product/dsc07927_39e824282073414092b7a9c98fac9b41.jpg",
        name: "Sơ Mi Xanh Đen",
        price: "360.000 VNĐ",
        colors: ["#1C2526"],
        description: "Áo sơ mi xanh đen, phong cách trẻ trung, chất liệu lụa mềm, thích hợp cho các buổi tiệc tối."
    },
    {
        id: 10,
        img: "https://product.hstatic.net/1000360022/product/ao-so-mi-trang-nam_5b6f3051856e49e8bc02015c087e58e1_1024x1024.jpg",
        name: "Sơ Mi Trắng",
        price: "300.000 VNĐ",
        colors: ["#FFFFFF"],
        description: "Áo sơ mi trắng cổ điển, chất liệu cotton thoáng mát, dễ phối đồ, phù hợp cho mọi dịp."
    },
    {
        id: 11,
        img: "https://maylanstore.com/wp-content/uploads/2024/03/ao-so-mi-flannel-ke-soc-11.jpg",
        name: "Sơ Mi Flannel",
        price: "200.000 VNĐ",
        colors: ["#FF0000", "#000000"],
        description: "Áo sơ mi flannel kẻ sọc đỏ đen, phong cách năng động, chất liệu flannel ấm áp, phù hợp mùa đông."
    },
    {
        id: 12,
        img: "https://bizweb.dktcdn.net/100/396/594/products/7-33aabc7f-d571-449e-b161-4bfa6ee3c107.jpg?v=1715220037943",
        name: "Sơ Mi Đen Tay Ngắn",
        price: "350.000 VNĐ",
        colors: ["#000000"],
        description: "Áo sơ mi đen tay ngắn, thiết kế hiện đại, chất liệu thoáng mát, lý tưởng cho thời tiết nóng."
    }
];

// Hiển thị sản phẩm lên trang
const productContainer = document.getElementById("product-container");

products.forEach(product => {
    const productElement = document.createElement("div");
    productElement.classList.add("product");
    productElement.innerHTML = `
        <a href="product-detail.html?id=${product.id}">
            <img src="${product.img}" alt="${product.name}">
            <h3>${product.name}</h3>
        </a>
        <p>${product.price}</p>
        <div class="product-buttons">
            <button class="buy-now">Mua Ngay</button>
            <button class="add-to-cart">Thêm vào Giỏ</button>
        </div>
    `;

    productContainer.appendChild(productElement);
});
