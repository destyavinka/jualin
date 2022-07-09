<?php
include_once('../db_connect.php');
$database = new database();
$id = $_GET['id'];
$query = $database->productDetail($id);
$product= mysqli_fetch_array($query);


echo '<h3>Produk Detail</h3>
    <div class="row">
        <label class="col-4">Nama Produk</label>
        <div class="col-8">
            <p>'.$product['name'].'</p>
        </div>
    </div>
    <div class="row">
        <label class="col-4">Stok Produk</label>
        <div class="col-8">
        <p>'.$product['quantity'].'</p>
        </div>
    </div>
    <div class="row">
        <label class="col-4">harga</label>
        <div class="col-8">
        <p>'.$product['price'].'</p>
        </div>
    </div>
    <div class="row">
        <label class="col-4">Deskripsi Lengkap</label>
        <div class="col-8">
        <p>'.$product['description'].'</p>
        </div>
    </div>
    <div class="row">
        <label class="col-4">Foto Produk</label>
        <div class="col-8">
            <img src="../img/product/'.$product['img'].'"/>
        </div>
    </div>
    <div class="row">
    
        <a class="col-8" href="product_edit.php?id='.$id.'">
            <button type="submit">Edit</button>
        </a>
        <a class="col-8" href="product_delete.php?id='.$id.'">
            <button type="submit">Hapus</button>
        </a>
    </div>';
?>
