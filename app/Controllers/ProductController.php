<?php
namespace App\Controllers;
use App\Models\Product;

class ProductController {
    public function index() {
        // 1. Lấy dữ liệu từ Model
        $productModel = new Product();
        $products = $productModel->getAllProducts();

        // 2. Truyền dữ liệu sang View
        include 'views/product_list.php';
    }
}