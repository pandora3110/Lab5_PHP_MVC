<?php
namespace App\Controllers;

use App\Models\Student;

class HomeController {
    public function index() {
        // 1. Chuẩn bị dữ liệu
        $message = "Chào mừng đến với hệ thống Mini MVC!";

        // Gọi class Student từ Bài 2
        $student = new Student();
        $studentInfo = $student->getInfo();

        // 2. Gọi View và truyền dữ liệu (Các biến trên sẽ có tác dụng trong file home.php)
        include 'views/home.php';
    }
}
