<?php
include_once('../db_connect.php');
$database = new database();
if (isset($_POST['nama_produk'])) 
{
    $name = $_POST['nama_produk'];
    $quantity = $_POST['stok'];
    $price = $_POST['harga'];
    $description = $_POST['deskripsi'];
    $name_img = @$_FILES['gambar']['name'];
    $tmp_img = @$_FILES['gambar']['tmp_name'];
    if (!empty($name_img)) 
    {
        copy($tmp_img, "../img/product/$name_img");
    }
    $productAdd = $database->productAdd($name,$description,$price,$name_img,$quantity);
    if($productAdd)
	{
		header('location:home.php');
	} else 
    {
        echo $productAdd;
    }
}
?>
<h3>Produk Baru</h3>
<form method="post" action="" enctype="multipart/form-data">
    <div class="row">
        <label class="col-4">Nama Produk</label>
        <div class="col-8">
            <input type="text" name="nama_produk">
        </div>
    </div>
    <div class="row">
        <label class="col-4">Stok Produk</label>
        <div class="col-8">
            <input type="text" name="stok">
        </div>
    </div>
    <div class="row">
        <label class="col-4">harga</label>
        <div class="col-8">
            <input type="number" name="harga">
        </div>
    </div>
    <div class="row">
        <label class="col-4">Deskripsi Lengkap</label>
        <div class="col-8">
            <textarea name="deskripsi" rows="10" style="width:100%;"></textarea>
        </div>
    </div>
    <div class="row">
        <label class="col-4">Upload Foto Produk</label>
        <div class="col-8">
            <input type="file" name="gambar">
        </div>
    </div>
    <div class="row">
        <label class="col-4"> </label>
        <div class="col-8">
            <button type="submit">Simpan Data</button>
        </div>
    </div>
</form>