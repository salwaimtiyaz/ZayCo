<?php
include("koneksi.php");

$id = $_GET["id_admin"];
$query = mysqli_query($con, "SELECT * FROM admin WHERE id_admin = '$id'");
$data = mysqli_fetch_array($query);

if (isset($_POST["ubah"])) {
    $nama_admin = $_POST["nama_admin"];
    $password_admin = $_POST["password_admin"];
    $alamat = $_POST["alamat"];

    $update_query = mysqli_query($con, "UPDATE admin SET nama_admin='$nama_admin', password_admin='$password_admin', alamat='$alamat' WHERE id_admin='$id'");
    if ($update_query) {
        echo '<script>alert("Update data berhasil !");
        window.location="viewadmin.php"</script>';
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
    <a href="viewadmin.php"><h3>View Data</h3></a>
    <h3>Update Data Admin</h3>
    <form action="" method="post">
        <div class="input-group">
            <div> 
                <input type="text" placeholder="nama admin" name="nama_admin" required value="<?= $data["nama_admin"]; ?>">
            </div>
            <br>
            <div> 
                <input type="text" placeholder="password admin" name="password_admin" required value="<?= $data["password_admin"]; ?>"><br><br>
            </div>
            <br>
            <div> 
                <input type="text" placeholder="alamat" name="alamat" required value="<?= $data["alamat"]; ?>"><br><br>
            </div>
            <div> 
                <button type="submit" name="ubah">Ubah</button>
            </div>
        </div>
    </form>
</body>
</html>
