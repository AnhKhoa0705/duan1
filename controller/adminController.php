<?php
require_once 'model/productModel.php';

class AdminController {
    private $productModel;

    public function __construct() {
        $this->productModel = new ProductModel();
    }

    public function products() {
        return $this->productModel->getAllProducts();
    }

    public function deleteProduct($id) {
        return $this->productModel->deleteProduct($id);
    }
}
?>