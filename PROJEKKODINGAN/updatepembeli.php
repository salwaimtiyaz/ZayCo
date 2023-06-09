<?php
include("koneksi.php");

$id = $_GET["id"];
$query = mysqli_query($con, "SELECT * FROM pembeli WHERE id_pembeli = '$id'");
$data = mysqli_fetch_array($query);

if (isset($_POST["ubah"])) {
    $nama_pembeli= $_POST["nama_pembeli"];
    $no_telp = $_POST["no_telp"];
    $alamat = $_POST["alamat"];
    $jenis_kelamin = $_POST["jenis_kelamin"];

    $update_query = mysqli_query($con, "UPDATE pembeli SET nama_pembeli='$nama_pembeli', no_telp='$no_telp', alamat='$alamat', jenis_kelamin='$jenis_kelamin' WHERE id_pembeli='$id'");
    if ($update_query) {
        echo '<script>alert("Update data berhasil !");
        window.location="viewpembeli.php"</script>';
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
    <a href="viewpembeli.php"><h3>View Data pembeli</h3></a>
    <h3>Update Data pembeli</h3>
    <form action="" method="post">
        <div class="input-group">
            <div> 
                <input type="text" placeholder="nama " name="nama_pembeli" required value="<?= $data["nama_pembeli"]; ?>">
            </div>
            <br>
            <div> 
                <input type="text" placeholder="no telp" name="no_telp" required value="<?= $data["no_telp"]; ?>"><br><br>
            </div>
            <br>
            <div> 
                <input type="text" placeholder="alamat" name="alamat" required value="<?= $data["alamat"]; ?>"><br><br>
            </div>
            <input type="text" placeholder="jenis kelamin" name="jenis_kelamin" required value="<?= $data["jenis_kelamin"]; ?>"><br><br>
            <div> 
                <button type="submit" name="ubah">Ubah</button>
            </div>
        </div>
    </form>
</body>
</html>
