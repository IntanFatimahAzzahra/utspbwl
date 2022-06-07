<?php
include('koneksi.php');
$koneksi = new Connection();
$action = $_GET['action'];
if($action =="add")
{
	$koneksi->tambahdata($_POST['cat_id'],($_POST['brg_name'],($_POST['brg_harga'],($_POST['brg_deskripsi'],($_POST['brg_status']);
	header('location:databarang.php');
}
?>