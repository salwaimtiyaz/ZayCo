<?php
include("koneksi.php");

$id = $_GET['id'];
$query = mysqli_query($con, "SELECT * FROM makanan WHERE id_makanan = '$id'");
$data = mysqli_fetch_array($query);

if (isset($_POST["ubah"])) {
    $nama_makanan = $_POST["nama_makanan"];
    $harga_makanan = $_POST["harga_makanan"];
    $jenis_makanan = $_POST["jenis_makanan"];

    $update_query = mysqli_query($con, "UPDATE makanan SET nama_makanan='$nama_makanan', harga_makanan='$harga_makanan', jenis_makanan='$jenis_makanan' WHERE id_makanan='$id'");
    if ($update_query) {
        echo "Ubah data berhasil";
        echo '<script>alert("Update data berhasil !");
        window.location="viewmakanan.php"</script>';
    } else {
        echo '<script>alert("Gagal mengubah")</script>';
    }
}
?>

<html>
<head>
    <link rel="stylesheet" href="create.css">
</head>
<body>
    <a href="viewmakanan.php"><h3>View Data makanan</h3></a>
    <h3>Update Data makanan</h3>
    <form action="" method="post">
        <div class="input-group">
            <div> 
                <input type="text" placeholder="nama" name="nama_makanan" required value="<?= $data["nama_makanan"]; ?>">
            </div>
            <br>
            <div> 
                <input type="text" placeholder="harga makanan" name="harga_makanan" required value="<?= $data["harga_makanan"]; ?>"><br><br>
            </div>
            <br>
            <div> 
                <input type="text" placeholder="jenis makanan" name="jenis_makanan" required value="<?= $data["jenis_makanan"]; ?>"><br><br>
            </div>
            <div> 
                <button type="submit" name="ubah">Ubah</button>
            </div>
        </div>
    </form>
</body>
</html>