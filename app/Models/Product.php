<?php
namespace App\Models;

class Product extends BaseModel {
    // Phần 1: Lấy danh sách
    public function all() {
        return $this->pdo->query("SELECT * FROM products ORDER BY id DESC")->fetchAll(\PDO::FETCH_ASSOC);
    }

    // Phần 2.2 & 5: Tìm theo ID
    public function find($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM products WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    // Phần 4: Thêm mới
    public function insert($data) {
        $sql = "INSERT INTO products (name, price, image, description) VALUES (:name, :price, :image, :description)";
        return $this->pdo->prepare($sql)->execute($data);
    }

    // Phần 5: Cập nhật
    public function update($id, $data) {
        $sql = "UPDATE products SET name = :name, price = :price, image = :image, description = :description WHERE id = :id";
        $data['id'] = $id;
        return $this->pdo->prepare($sql)->execute($data);
    }

    // Phần 2.1: Xóa
    public function delete($id) {
        return $this->pdo->prepare("DELETE FROM products WHERE id = :id")->execute(['id' => $id]);
    }
}