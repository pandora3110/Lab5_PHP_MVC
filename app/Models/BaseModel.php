<?php
namespace App\Models;
use PDO;
use PDOException;

class BaseModel {
    protected $pdo;

    public function __construct() {
        $host = 'localhost';
        $db   = 'lab2_db'; // Tên database bạn vừa tạo ở Bước 1
        $user = 'root';    // Mặc định của XAMPP là root
        $pass = '';        // Mặc định của XAMPP là trống

        try {
            $this->pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Lỗi kết nối database: " . $e->getMessage());
        }
    }
}