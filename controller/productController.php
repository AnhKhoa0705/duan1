<<<<<<< HEAD
=======
<?php
require_once "model/productModel.php";

class productController
{
    public $productModel;
    function __construct()
    {
        $this->productModel = new ProductModel();
    }

    public function category()
    {
        $categoryResult = $this->productModel->getCategories();
        if (!$categoryResult || count($categoryResult) === 0) {
            $categoryResult = null;
        }
    
        $categoryFilter = isset($_GET['category']) ? $_GET['category'] : '';
    
        $productResult = $this->productModel->getProducts($categoryFilter);
        if (!$productResult || count($productResult) === 0) {
            $productResult = null;
        }
    
        return [
            'category' => $categoryResult,
            'product' => $productResult,
            'filter' => $categoryFilter
        ];
    }
    
}
>>>>>>> bfa0242a3038fc1da1b18ad2e6fa38ed637607fa
