<?php
require_once "model/detailModel.php";

class Detail_Controller
{
    public function get_product_detail()
    {
        if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
            die("<p style='color: red; text-align: center; font-size: 18px;'>Sản phẩm không tồn tại!</p>");
        }

        $productID = intval($_GET['id']);
        $productModel = new ProductDetailModel();
        $productDetail = $productModel->getProductDetail($productID);

        if (!$productDetail) {
            die("<p style='color: red; text-align: center; font-size: 18px;'>Sản phẩm không tồn tại!</p>");
        }

        $row = $productDetail;
        require_once "view/product_detail.php";
    }
}
