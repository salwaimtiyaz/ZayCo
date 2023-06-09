<?php
include("koneksi.php");

$id = $_GET['id'];
$query = mysqli_query($con, "SELECT * FROM pegawai WHERE id_pegawai = '$id'");
$data = mysqli_fetch_array($query);

if (isset($_POST["ubah"])) {
    $nama_pegawai = $_POST["nama_pegawai"];
    $no_telp= $_POST["no_telp"];
    $alamat = $_POST["alamat"];
    $jenis_kelamin = $_POST["jenis_kelamin"];

    $update_query = mysqli_query($con, "UPDATE pegawai SET nama_pegawai='$nama_pegawai', no_telp='$no_telp', alamat='$alamat', jenis_kelamin='$jenis_kelamin' WHERE id_pegawai='$id'");
    if ($update_query) {
        echo "Ubah data berhasil";
        echo '<script>alert("Update data berhasil !");
        window.location="viewpegawai.php"</script>';
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
    <a href="viewpegawai.php"><h3>View Data pegawai</h3></a>
    <h3>Update Data pegawai</h3>
    <form action="" method="post">
        <div class="input-group">
            <div> 
                <input type="text" placeholder="nama" name="nama_pegawai" required value="<?= $data["nama_pegawai"]; ?>">
            </div>
            <br>
            <div> 
                <input type="text" placeholder="no_telp" name="no_telp" required value="<?= $data["no_telp"]; ?>"><br><br>
            </div>
            <br>
            <div> 
                <input type="text" placeholder="alamat" name="alamat" required value="<?= $data["alamat"]; ?>"><br><br>
            </div>
                <input type="text" placeholder="jenis_kelamin" name="jenis_kelamin" required value="<?= $data["jenis_kelamin"]; ?>"><br><br>
            <div> 
                <button type="submit" name="ubah">Ubah</button>
            </div>
        </div>
    </form>
</body>
</html>