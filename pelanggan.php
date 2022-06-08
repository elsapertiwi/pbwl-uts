<?php 
include 'koneksi.php';

$sql = "SELECT * FROM pelanggan INNER JOIN laundry ON pelanggan.id_pelanggan=laundry.id_pelanggan";
$query = mysqli_query($koneksi, $sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="assets/css/baju.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laundry Mahkamah </title>
    <link rel="stylesheet" href="assets/css/style1.css">
</head>
<body>


    <div class="header">
        <nav id="navbar">
            <img src="assets/css/baju.png" class="logo">
            <ul id="menu"> 
                <li><a href="home.php">Home</a></li>
                <li><a href="pelanggan.php">About</a></li>
                <li>Service</li>
                <li>Contact</li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </div>
    <br>
    <a href="tambah.php">Tambah Data</a>
    <table cellspacing="0" border="1">
        <tr>
            <th>Nama Pelanggan</th>
            <th>Berat Laundry</th>
            <th>Nama Petugas</th>
            <th>Alamat</th>
            <th>Tambahan</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
        <?php 
        while ($data = mysqli_fetch_array($query)) {
            ?>
            <tr>
                <td><?php echo $data['nama_pelanggan'] ?></td>
                <td><?php echo $data['berat'] ?></td>
                <td><?php echo $data['nama_petugas'] ?></td>
                <td><?php echo $data['alamat'] ?></td>
                <td><?php echo $data['tambahan'] ?></td>
                <td><?php echo $data['harga'] ?></td>
                <td><a href="edit.php?id=<?= $data['id_pelanggan'] ?>">Edit</a> | <a href="hapus.php?id=<?= $data['id_pelanggan'] ?>">Hapus</a></td>
            </tr>
            <?php
        }
        ?>
    </table>

    <script>
        var navbar = document.getElementById("navbar");
        var menu = document.getElementById("menu");

        window.onscroll = function(){
            if(window.pageYOffset >= menu.offsetTop){
                navbar.classList.add("sticky");
            }
            else{
                navbar.classList.remove("sticky");
            }
        }

    </script>
    
</body>
</html>