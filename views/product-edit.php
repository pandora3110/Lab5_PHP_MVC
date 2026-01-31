<h3>Sửa sản phẩm</h3>
<form action="?page=product-update&id=<?= $product['id'] ?>" method="POST">
    Tên: <input type="text" name="name" value="<?= $product['name'] ?>" required><br>
    Giá: <input type="number" name="price" value="<?= $product['price'] ?>" required><br>
    Ảnh: <input type="text" name="image" value="<?= $product['image'] ?>"><br>
    Mô tả: <textarea name="description"><?= $product['description'] ?></textarea><br>
    <button type="submit">Cập nhật</button>
</form>