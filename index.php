<?php
require_once 'vendor/autoload.php';

$page = $_GET['page'] ?? 'home';
$id = $_GET['id'] ?? null;

$productCtrl = new App\Controllers\ProductController();

switch ($page) {
    case 'product-list': $productCtrl->index(); break;
    case 'product-detail': $productCtrl->detail($id); break;
    case 'product-add': $productCtrl->create(); break;
    case 'product-store': $productCtrl->store(); break;
    case 'product-edit': $productCtrl->edit($id); break;
    case 'product-update': $productCtrl->update($id); break;
    case 'product-delete': $productCtrl->destroy($id); break;
    default: (new App\Controllers\HomeController())->index(); break;
}