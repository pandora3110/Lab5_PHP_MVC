<?php
namespace App\Models;
use PDO;
use PDOException;

class BaseModel {
    protected $db;

    public function __construct() {
        $host = 'localhost';
        $dbname = 'lab2_db'; // Thay tên DB của Lab 2 vào đây
        $username = 'root';
        $password = '';

        try {
            $this->db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Lỗi kết nối: " . $e->getMessage());
        }
    }
}