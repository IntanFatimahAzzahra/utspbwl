<?php
require 'koneksi.php';
    $db = new Connection();
    $datakategori = $db->tampildata();
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
    <h1><a href="index.php">ABDI SERVICE</a></h1>
    <ul>
        <li><a href="index.php">HOME</a></li>
        <li><a href="datakategori.php">DATA KATEGORI</a></li>
        <li><a href="databarang.php">DATA BARANG</a></li>
        <li><a href="logout.php">LOGOUT</a></li>
    </ul>
</header>
<div class="section">
    <div class="container">
    <h3> DATA KATEGORI </h3>
    <div class="box">
        <p><a href="tambahkategori.php">TAMBAH KATEGORI</a></p>
        <table cellspacing="0" class="table">
     <thead>
        <tr>
        <th width="55px"> NO </th>
        <th> KATEGORI </th>
        <th width="180px"> AKSI </th>
        </tr>
    </thead>
<tbody>
<?php
        $no =1;
        foreach ($datakategori as $row )
{
?>
    <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $row['cat_name'] ?></td>
        <td>
            <a href="editkategori.php?id=<?php echo $row['cat_id'] ?>">EDIT</a> || 
            <a href="proses.php?action=delete&id=<?php echo $row['cat_id'] ?>" onclick= "return confirm('APAKAH ANDA YAKIN INGIN MENGHAPUS DATA INI ?')" >HAPUS</a>                      
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
        <small>Copyright &copy; BENGKEL ABDI SERVICE</small>
    </div>
</footer>
</body>
</html>