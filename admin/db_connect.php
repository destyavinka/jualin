<?php
$conn = mysqli_connect("localhost", "root", "", "db_produk");

class database
{
	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "db_produk";
	var $koneksi;

	function __construct()
	{
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->database);
	}


	function register($username, $password, $nama)
	{
		$insert = mysqli_query($this->koneksi, "insert into tb_user values (DEFAULT,'$username','$password','$nama')");
		return $insert;
	}

	function login($username, $password, $remember)
	{
		$query = mysqli_query($this->koneksi, "SELECT * FROM tb_user WHERE username='$username'");
		$data_user = $query->fetch_array();
		if (password_verify($password, $data_user['password'])) {

			if ($remember) {
				setcookie('username', $username, time() + (60 * 60 * 24 * 5), '/');
				setcookie('nama', $data_user['nama'], time() + (60 * 60 * 24 * 5), '/');
			}
			$_SESSION['username'] = $username;
			$_SESSION['nama'] = $data_user['nama'];
			$_SESSION['is_login'] = TRUE;
			return TRUE;
		} else {
			$no = 0;
			while ($d = mysqli_fetch_array($query)) {
				$no++;
			}
			return $no . ', ' . $username;
		}
	}

	function relogin($username)
	{
		$query = mysqli_query($this->koneksi, "select * from tb_user where username='$username'");
		$data_user = $query->fetch_array();
		$_SESSION['username'] = $username;
		$_SESSION['nama'] = $data_user['nama'];
		$_SESSION['is_login'] = TRUE;
	}

	function productAdd($name, $description, $price, $img, $quantity)
	{
		$product = mysqli_query($this->koneksi, "insert into tb_product values (DEFAULT,1,'$name','$description','$price', '$img','$quantity')");
		return  $product;
	}

	function productAll()
	{
		$products = mysqli_query($this->koneksi, "SELECT * FROM tb_product");
		return  $products;
	}

	function productDetail($id)
	{
		$products = mysqli_query($this->koneksi, "SELECT * FROM tb_product WHERE id='$id'");
		return  $products;
	}

	function productUpdate($id, $name, $description, $price, $img, $quantity)
	{
		$product = mysqli_query($this->koneksi, "UPDATE tb_product SET name='$name',description='$description',price='$price',img='$img',quantity='$quantity',name='$name' WHERE id='$id'");
		return  $this->koneksi->error;
	}

	function productDelete($id)
	{
		$products = mysqli_query($this->koneksi, "DELETE FROM tb_product WHERE id='$id'");
		return  $products;
	}

	function checkout($id)
	{
		$product = mysqli_query($this->koneksi, "SELECT * FROM data_checkout WHERE id ='$id'");
		return $products;
	}
}
