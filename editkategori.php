<?php 
 include('koneksi.php');
    $db = new Connection();
    $cat_id = $_GET['id'];
 if(! is_null($cat_id))
 {
    $datakategori = $db->get_by_id($cat_id);
 }
 else
 {
    header('location:datakategori.php');
 }
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
    <div class="section">
    <div class="container">
        <h3>EDIT DATA KATEGORI</h3>
    <div class="box">
        <form method="POST" action="proses.php?action=edit" >
        <input type="hidden" name="cat_id" value="<?php echo $datakategori['cat_id']; ?>">
        <input type="text" name="cat_name" placeholder="Nama Kategori" class="input-control" value="<?php echo $datakategori['cat_name']; ?>" required>
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