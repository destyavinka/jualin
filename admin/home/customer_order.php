<?php
session_start();
if (!isset($_SESSION['is_login'])) {
	header('location:../index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
</head>

<body>


    <div class="container bg-info" style="padding-top: 20px; padding-bottom: 20px;">
        <a href="../logout.php" class="btn btn-danger">Log out</a>

        <!-- <h3>Customer Order</h3> -->
        <tr>
            <th>No</th>
            <th>Nama Pemesan</th>
            <th>Nama Produk</th>
            <th>Kuantitas</th>
            <th>Alamat</th>
        </tr>
        <?php
		
		include_once('../db_connect.php');
		$database = new database();

		$i=0;
		$products = $database->productAll();
		while ($product = mysqli_fetch_array($products)) {
		?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $product['name']; ?></td>
            <td><?php echo $product['price']; ?></td>
            <td><?php echo $product['quantity']; ?></td>
            <td>
                <a href="product_detail.php?id=<?php echo $product['id'] ?>">Lihat</a>
                <a href="product_edit.php?id=<?php echo $product['id'] ?>">Edit</a>
                <a href="product_delete.php?id=<?php echo $product['id'] ?>">Hapus</a>
            </td>
        </tr>
        <?php $i = $i + 1;
		} ?>
        </table>
    </div>


</body>

<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function() {
    $('.dtabel').DataTable();
});
</script>

</html>