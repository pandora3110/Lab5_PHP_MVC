<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Trang chủ MVC</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; padding: 30px; line-height: 1.6; }
        .container { max-width: 600px; margin: auto; border: 1px solid #ddd; padding: 20px; border-radius: 10px; }
        h1 { color: #2c3e50; }
        .alert { color: #27ae60; font-weight: bold; }
    </style>
</head>
<body>
<div class="container">
    <h1><?php echo $message; ?></h1>
    <p>Thông tin từ Model: <span class="alert"><?php echo $studentInfo; ?></span></p>
</div>
</body>
</html>