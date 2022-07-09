<?php
include_once('../db_connect.php');
$database = new database();
$id = $_GET['id'];
$query = $database->productDetail($id);
$product= mysqli_fetch_array($query);

if(isset($_POST['name'])) {
    $name = $_POST['name'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $name_img = @$_FILES['img']['name'];
    $tmp_img = @$_FILES['img']['tmp_name'];
    if (!empty($name_img)) {
        copy($tmp_img, "../img/product/$name_img");
    }
    $productUpdate = $database->productUpdate($id,$name,$description,$price,$name_img,$quantity);
    if($productUpdate)
	{
        echo "Berhasil Memperbarui Data";
	} else {
        echo $productUpdate;
    }
    echo $productUpdate;
}
echo '<h3>Edit Produk</h3>
<form method="post" action="" enctype="multipart/form-data">
    <div class="row">
        <label class="col-4">Nama Produk</label>
        <div class="col-8">
            <input name="name" type="text" value="'.$product['name'].'"/>
        </div>
    </div>
    <div class="row">
        <label class="col-4">Stok Produk</label>
        <div class="col-8">
        <input name="quantity" type="text" value="'.$product['quantity'].'"/>
        </div>
    </div>
    <div class="row">
        <label class="col-4">harga</label>
        <div class="col-8">
        <input name="price" type="text" value="'.$product['price'].'"/>
        </div>
    </div>
    <div class="row">
        <label class="col-4">Deskripsi Lengkap</label>
        <div class="col-8">
        <input name="description" type="text" value="'.$product['description'].'"/>
        </div>
    </div>
    <div class="row">
        <label class="col-4">Foto Produk</label>
        <div class="col-8">
        <div class="row">
        <label class="col-4">Upload Foto Produk</label>
        <div class="col-8">
            <input type="file" name="gambar">
        </div>
    </div>
        </div>
    </div>
    <div class="row">
    
            <button type="submit">Simpan</button>
    </div>
    </form>';
?>
