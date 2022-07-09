<?php
include_once('../db_connect.php');
$database = new database();
$id = $_GET['id'];
$productDelete = $database->productDelete($id);
header('location:home.php');
?>