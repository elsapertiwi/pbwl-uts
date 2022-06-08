<form action="" method="post">
    <label for="nama_pelanggan">Nama Pelanggan</label>
    <input type="text" name="nama_pelanggan">
    
    <br>
    <label for="berat">Berat Laundry</label>
    <input type="text" name="berat">
    
    <br>
    <label for="nama_petugas">Nama Petugas</label>
    <input type="text" name="nama_petugas">

    <br>
    <label for="alamat">Alamat Pelanggan</label>
    <input type="text" name="alamat">

    <br>
    <label for="tambahan">Tambahan</label>
    <input type="text" name="tambahan">

    <br>
    <label for="harga">Harga</label>
    <input type="text" name="harga">

    <br>

    <input type="submit" value="Simpan">

</form>

<?php
include 'koneksi.php';
if ($_POST) {
    $sql = "INSERT INTO pelanggan (nama_pelanggan, berat, harga) VALUES ('{$_POST['nama_pelanggan']}', 
    '{$_POST['berat']}', '{$_POST['harga']}')";
    $query = mysqli_query($koneksi, $sql);

    $sql = "SELECT max(id_pelanggan) AS last_id FROM pelanggan LIMIT 1";
    $query = mysqli_query($koneksi, $sql);

    $data = mysqli_fetch_array($query);
    $last_id = $data['last_id'];

    $sql = "INSERT INTO laundry (id_pelanggan, nama_petugas, alamat, tambahan) VALUES 
    ('$last_id', '{$_POST['nama_petugas']}', '{$_POST['alamat']}', '{$_POST['tambahan']}')";
    $query = mysqli_query($koneksi, $sql);

    if ($query) {
        echo "Data berhasil disimpan";
        header('Location: pelanggan.php');
    } else {
        echo "Data gagal disimpan " .mysqli_error($koneksi);
    }
}
?>