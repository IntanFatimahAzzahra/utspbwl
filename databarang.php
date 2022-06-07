<?php
require 'koneksi.php';
    $db = new Connection();
    $dataproduk = $db->tampilproduk();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>BENGKEL ABDI SERVICE</title>
</head>
<body>
<header>
    <div class="container">
    <h1><a href="index.php">BENGKEL ABDI SEVICE</a></h1>
    <ul>
        <li><a href="index.php">HOME</a></li>
        <li><a href="datakategori.php">DATA KATEGORI</a></li>
        <li><a href="databarang.php">DATA BARANG</a></li>
        <li><a href="logout.php">LOGOUT</a></li>
    </ul>
</header>
    <div class="section">
    <div class="container">
        <h3>DATA BARANG</h3>
    <div class="box">
        <p><a href="tambahproduk.php">Tambah Produk</a></p>
    <table border ="1" cellspacing="0" class="table">
        <thead>
        <tr>
            <th width="40spx">NO</th>
            <th>KATEGORI</th>
            <th>NAMA BARANG</th>
            <th>HARGA</th>
            <th>KETERANGAN</th>
            <th>STATUS</th>
            <th width="180px">AKSI</th>
        </tr>
</thead>
<tbody>
<?php
    $no = 1;
        foreach ($dataproduk as $row ) {
?>
<tr>
    <td><?php echo $no++ ?></td>
    <td>KTG- <?php echo $row['cat_id'] ?></td>
    <td><?php echo $row['brg_name'] ?></td>
    <td>Rp. <?php echo $row['brg_harga'] ?></td>
    <td><?php echo $row['brg_deskripsi'] ?></td>
    <td><?php echo $row['brg_status'] ?></td>
    <td>
        <a href="editproduk.php?id=<?php echo $row['brg_id'] ?>"> EDIT</a> || 
        <a href="hapusproduk.php?id=<?php echo $row['brg_id'] ?>" onclick= "return confirm('APAKAH ANDA YAKIN MENGHAPUS DATA INI ???')" >HAPUS</a>                      
    </td>
</tr>
<?php 
} 
?>
</tbody>
</table> 
    </div>
    </div>
    </div>
<footer>
    <div class="container">
        <small>Copyright &copy; BENGKEL ABDI SERVICE </small>
    </div>
</footer>
</body>
</html>