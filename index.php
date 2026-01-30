<?php
// 1. Khởi tạo và nạp thư viện
require_once 'vendor/autoload.php';

use App\Models\Student;
use App\Controllers\HomeController;
use App\Controllers\ProductController;

$faker = Faker\Factory::create('vi_VN');
$sv = new Student();

// 2. Logic điều hướng (Router)
$page = $_GET['page'] ?? 'home';
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tổng hợp Lab 5: MVC & Database</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; line-height: 1.6; background-color: #f4f7f6; color: #333; padding: 20px; }
        .section { background: #fff; margin-bottom: 30px; padding: 25px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); border-left: 6px solid #007bff; }
        h1 { color: #2c3e50; text-align: center; margin-bottom: 30px; }
        h2 { border-bottom: 2px solid #eee; padding-bottom: 10px; color: #007bff; font-size: 1.4rem; }
        .highlight { color: #2ecc71; font-weight: bold; }
        nav { text-align: center; margin-bottom: 30px; background: white; padding: 15px; border-radius: 50px; box-shadow: 0 2px 10px rgba(0,0,0,0.05); }
        nav a { margin: 0 15px; text-decoration: none; color: #555; font-weight: 600; transition: 0.3s; }
        nav a:hover { color: #007bff; }
        .router-box { border: 2px dashed #e0e0e0; padding: 20px; background: #fafafa; border-radius: 10px; min-height: 100px; }
    </style>
</head>
<body>

<h1>KẾT QUẢ THỰC HÀNH LAB 5</h1>

<nav>
    <a href="?page=home">🏠 Trang Chủ (Bài 1-3)</a>
    <a href="?page=product">📦 Danh Sách Sản Phẩm (Bài 4)</a>
</nav>

<div class="section">
    <h2>Bài 1: Faker Library</h2>
    <p>👤 <strong>Tên:</strong> <?php echo $faker->name; ?></p>
    <p>📧 <strong>Email:</strong> <span style="color:#e67e22"><?php echo $faker->email; ?></span></p>
</div>

<div class="section">
    <h2>Bài 2: Autoloading & Namespace</h2>
    <p>Dữ liệu từ Model: <span class="highlight"><?php echo $sv->getInfo(); ?></span></p>
</div>

<div class="section">
    <h2>Nội dung Router (Bài 3 & 4)</h2>
    <p>Trạng thái Router: <code>?page=<?php echo htmlspecialchars($page); ?></code></p>

    <div class="router-box">
        <?php
        // Mọi logic gọi Controller phải nằm TRONG cặp thẻ PHP này
        if ($page === 'home') {
            $controller = new HomeController();
            $controller->index();
        } elseif ($page === 'product') {
            $controller = new ProductController();
            $controller->index();
        } else {
            echo "<h3 style='color:red;'>404 - Không tìm thấy trang!</h3>";
        }
        ?>
    </div>
</div>

</body>
</html>