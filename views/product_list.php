<style>
    .product-table { width: 100%; border-collapse: collapse; margin-top: 20px; }
    .product-table th, .product-table td { border: 1px solid #ddd; padding: 12px; text-align: left; }
    .product-table th { background-color: #007bff; color: white; }
    .product-table tr:nth-child(even) { background-color: #f2f2f2; }
</style>

<h3>Danh sách sản phẩm (Từ Database Lab 2)</h3>
<table class="product-table">
    <thead>
    <tr>
        <th>ID</th>
        <th>Tên sản phẩm</th>
        <th>Giá</th>
        <th>Mô tả</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($products as $item): ?>
        <tr>
            <td><?php echo $item['id']; ?></td>
            <td><?php echo $item['name']; ?></td>
            <td><?php echo number_format($item['price'], 0, ',', '.'); ?>đ</td>
            <td><?php echo $item['description'] ?? 'Chưa có mô tả'; ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>