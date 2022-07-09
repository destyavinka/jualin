<?php
session_start();
if (!isset($_SESSION['is_login'])) {
    header('location:index.php');
}
include 'functions.php';
$pdo = pdo_connect_mysql();


// Get the total number of products
$total_products = $pdo->query('SELECT * FROM products')->rowCount();
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

        <h3>Customer Order</h3>
        <table border="1" cellpadding="5" cellspacing="1" width="100%">
            <tr>
                <td>No</td>
                <td>nama</td>
                <td>Harga</td>
                <td>No telepon</td>
                <td>Alamat</td>
                <td>Pembayaran</td>
                <td>Pengiriman</td>
                <td>Total Bayar</td>
                <td>Barang</td>


            </tr>
            <?php

            include 'db_connect.php';

            $i = 1;
            $products = mysqli_query($conn, "select * from data_checkout");
            while ($product = mysqli_fetch_array($products)) {
            ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $product['first_name']; ?></td>
                    <td><?php echo $product['email']; ?></td>
                    <td><?php echo $product['phone']; ?></td>
                    <td><?php echo $product['address']; ?></td>
                    <td><?php echo $product['payment']; ?></td>
                    <td><?php echo $product['shipping']; ?></td>
                    <td><?php echo $product['total']; ?></td>
                    <td><?php echo $product['Barang']; ?></td>





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