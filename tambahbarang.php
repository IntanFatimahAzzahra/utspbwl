<?php 
require 'koneksi.php';
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
    <h1><a href="index.php">BENGKEL ABDI SERVICE</a></h1>
    <ul>
        <li><a href="index.php">HOME</a></li>
        <li><a href="datakategori.php">DATA KATEGORI</a></li>
        <li><a href="databarang.php">DATA BARANG</a></li>
        <li><a href="logout.php">LOGOUT</a></li>
    </ul>
</header>
    <div class="container">
        <h3>TAMBAH DATA PRODUK</h3>
    <div class="box">
        <form method="POST" action="prosesproduk.php?action=add">
    <select name="kategori" class="input-control" required>
    <option value="">--Pilih--</option>
<?php
    $pilih = mysqli_query($conn, "SELECT * FROM tb_category ORDER BY cat_id DESC");
        while($r = mysqli_fetch_array($pilih)){    
 ?>
    <option value="<?php echo $r['cat_id'] ?>"><?php echo $r['cat_name'] ?></option>
<?php } 
?>
    </select>
        <input type="text" name="brg_name" placeholder="Nama Barang" class="input-control" required>
        <input type="text" name="brg_harga" placeholder="Harga" class="input-control" required>
        <textarea name="brg_deskripsi" class="input-control" placeholder="deskripsi"></textarea>
        <select class="input-control" name="brg_status">
        <option value="">--Pilih--</option>
        <option value="1">ADA</option>
        <option value="0">KOSONG</option>
    </select>
        <input type="submit" name="submit" value="Submit" class="btn" >
        </form>
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