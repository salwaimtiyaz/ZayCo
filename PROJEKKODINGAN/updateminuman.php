<?php
include("koneksi.php");

$id = $_GET['id'];
$query = mysqli_query($con, "SELECT * FROM minuman WHERE id_minuman = '$id'");
$data = mysqli_fetch_array($query);

if (isset($_POST["ubah"])) {
    $nama_minuman = $_POST["nama_minuman"];
    $harga_minuman = $_POST["harga_minuman"];
    $jenis_minuman = $_POST["jenis_minuman"];

    $update_query = mysqli_query($con, "UPDATE minuman SET nama_minuman='$nama_minuman', harga_minuman='$harga_minuman', jenis_minuman='$jenis_minuman' WHERE id_minuman='$id'");
    if ($update_query) {
        echo "Ubah data berhasil";
        echo '<script>alert("Update data berhasil !");
        window.location="viewminuman.php"</script>';
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
    <a href="viewminuman.php"><h3>View Data minuman</h3></a>
    <h3>Update Data minuman</h3>
    <form action="" method="post">
        <div class="input-group">
            <div> 
                <input type="text" placeholder="nama" name="nama_minuman" required value="<?= $data["nama_minuman"]; ?>">
            </div>
            <br>
            <div> 
                <input type="text" placeholder="harga minumann" name="harga_minuman" required value="<?= $data["harga_minuman"]; ?>"><br><br>
            </div>
            <br>
            <div> 
                <input type="text" placeholder="jenis minuman" name="jenis_minuman" required value="<?= $data["jenis_minuman"]; ?>"><br><br>
            </div>
            <div> 
                <button type="submit" name="ubah">Ubah</button>
            </div>
        </div>
    </form>
</body>
</html>