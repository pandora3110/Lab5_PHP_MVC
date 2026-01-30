<?php
namespace App\Models;

class Product extends BaseModel {
    public function getAllProducts() {
        $sql = "SELECT * FROM products"; // Đảm bảo bảng này tồn tại từ Lab 2
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}