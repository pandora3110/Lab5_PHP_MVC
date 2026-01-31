<style>
    table { width: 100%; border-collapse: collapse; }
    th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
</style>
<h2>Danh sách sản phẩm</h2>
<a href="?page=product-add">[+] Thêm mới</a>
<table>
    <tr><th>ID</th><th>Tên</th><th>Giá</th><th>Ảnh</th><th>Hành động</th></tr>
    <?php foreach ($products as $p): ?>
        <tr>
            <td><?= $p['id'] ?></td>
            <td><?= $p['name'] ?></td>
            <td><?= number_format($p['price']) ?>đ</td>
            <td><img src="<?= $p['image'] ?>" width="50"></td>
            <td>
                <a href="?page=product-detail&id=<?= $p['id'] ?>">Xem</a> |
                <a href="?page=product-edit&id=<?= $p['id'] ?>">Sửa</a> |
                <a href="?page=product-delete&id=<?= $p['id'] ?>" onclick="return confirm('Xóa?')">Xóa</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>