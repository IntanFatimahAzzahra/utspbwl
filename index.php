<?php
   require 'function.php';
        $select = new Select();
    if(!empty($_SESSION["id"]))
{
        $user = $select->selectUserById($_SESSION["id"]);
}
    else{
header("Location: login.php");
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
    <h2>HOME</h2>
    <div class="box">
        <h2 style="text-align : center">Selamat Datang <?php echo  $user["username"]; ?> BENGKEL ABDI SERVICE</h2>
            <img src="2.jpEg" align-items="center" width="1310px" height="580px">
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