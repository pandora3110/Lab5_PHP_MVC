<?php
namespace App\Controllers;
use App\Models\Product;

class ProductController {
    protected $model;

    public function __construct() {
        $this->model = new Product();
    }

    public function index() {
        $products = $this->model->all();
        include 'views/product_list.php';
    }

    public function detail($id) {
        $product = $this->model->find($id);
        include 'views/product-detail.php';
    }

    public function create() {
        include 'views/product-add.php';
    }

    public function store() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = ['name' => $_POST['name'], 'price' => $_POST['price'], 'image' => $_POST['image'], 'description' => $_POST['description']];
            $this->model->insert($data);
            header("Location: index.php?page=product-list");
        }
    }

    public function edit($id) {
        $product = $this->model->find($id);
        include 'views/product-edit.php';
    }

    public function update($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = ['name' => $_POST['name'], 'price' => $_POST['price'], 'image' => $_POST['image'], 'description' => $_POST['description']];
            $this->model->update($id, $data);
            header("Location: index.php?page=product-list");
        }
    }

    public function destroy($id) {
        $this->model->delete($id);
        header("Location: index.php?page=product-list");
    }
}