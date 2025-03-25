const products = [
    { img: "https://bizweb.dktcdn.net/100/446/974/products/ao-thun-mlb-new-era-heavy-cotton-new-york-yankees-black-13086578-1.jpg?v=1691318321487", name: "Áo Thun MLB ", price: "299.000 VNĐ" },
    { img: "https://product.hstatic.net/200000863757/product/z5594338311706_53123b2d888f84bf37ea7ce2c1371724_c360165a807e4baa8a89f5df76784e4c.jpg", name: "Áo Thu FiDe", price: "199.000 VNĐ" },
    { img: "https://myo.vn/wp-content/uploads/2023/11/Ao-Thun-Den-MYO-Hinh-Phi-Hanh-Gia-Yeu-Radio.jpg", name: "Áo Thun Đen MYO", price: "310.000 VNĐ" },
    { img: "https://bizweb.dktcdn.net/thumb/1024x1024/100/442/302/products/img-0540-min.jpg?v=1665113226883", name: "Áo Thun HAFOS", price: "150.000 VNĐ" },
    { img: "https://vulcano.sgp1.digitaloceanspaces.com/media/13585/quan-jean-3004b-vulcano01.JPG", name: "Quần Jean Đen", price: "600.000 VNĐ" },
    { img: "https://product.hstatic.net/200000370449/product/56756_2998b578e0674b618a96b9777520e898_master.jpg", name: "Quần Ống Rộng Cạp Cao", price: "189.000 VNĐ" },
    { img: "https://product.hstatic.net/1000360022/product/quan-short-kaki-nam-ong-om-lung-luon-thun-form-slim__5__e03a1fc685d7404bb705814b0c772712_master.jpg", name: "Quần Short Kaki Đỏ", price: "100.000 VNĐ" },
    { img: "https://polomanor.vn/cdn/shop/files/Polomanor_quanau_sidetab_capcao_xam_21122023_1.jpg?v=1739266746&width=1508", name: "Quần Tây Nam", price: "480.000 VNĐ" },
    { img: "https://product.hstatic.net/200000588671/product/dsc07927_39e824282073414092b7a9c98fac9b41.jpg", name: "Sơ Mi Xanh Đen", price: "360.000 VNĐ" },
    { img: "https://product.hstatic.net/1000360022/product/ao-so-mi-trang-nam_5b6f3051856e49e8bc02015c087e58e1_1024x1024.jpg", name: "Sơ Mi Trắng", price: "300.000 VNĐ" },
    { img: "https://maylanstore.com/wp-content/uploads/2024/03/ao-so-mi-flannel-ke-soc-11.jpg", name: "Sơ Mi Flannel", price: "200.000 VNĐ" },
    { img: "https://bizweb.dktcdn.net/100/396/594/products/7-33aabc7f-d571-449e-b161-4bfa6ee3c107.jpg?v=1715220037943", name: "Sơ Mi Đen Tay Ngắn", price: "350.000 VNĐ" },
];

const productContainer = document.getElementById("product-container");

products.forEach(product => {
    const productElement = document.createElement("div");
    productElement.classList.add("product");
    productElement.innerHTML = `
        <img src="${product.img}" alt="${product.name}">
        <h3>${product.name}</h3>
        <p>${product.price}</p>
        <div class="product-buttons">
            <button class="buy-now">Mua Ngay</button>
            <button class="add-to-cart">Thêm vào Giỏ</button>
        </div>
    `;

    productContainer.appendChild(productElement);
});
