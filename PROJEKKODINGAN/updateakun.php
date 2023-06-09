<?php
include("koneksi.php");

$id = $_GET["id"];
$query = mysqli_query($con, "SELECT * FROM akun WHERE id_user = '$id'");
$data = mysqli_fetch_array($query);

if (isset($_POST["ubah"])) {
    $nama_user = $_POST["nama_user"];
    $gmail_user = $_POST["gmail_user"];
    $pass_user= $_POST["pass_user"];
    $alamat = $_POST["alamat"];

    $update_query = mysqli_query($con, "UPDATE akun SET nama_user='$nama_user', gmail_user='$gmail_user', pass_user='$pass_user', alamat='$alamat' WHERE id_user='$id'");
    if ($update_query) {
        echo '<script>alert("Update data berhasil !");
        window.location="viewakun.php"</script>';
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
    <a href="viewakun.php"><h3>View Data</h3></a>
    <h3>Update Data Akun</h3>
    <form action="" method="post">
        <div class="input-group">
            <div> 
                <input type="text" placeholder="nama user" name="nama_user" required value="<?= $data["nama_user"]; ?>">
            </div>
            <br>
            <div> 
                <input type="text" placeholder="gmail user" name="gmail_user" required value="<?= $data["gmail_user"]; ?>"><br><br>
            </div>
            <br>
            <div> 
                <input type="text" placeholder="pass user" name="pass_user" required value="<?= $data["pass_user"]; ?>"><br><br>
            </div>
            <input type="text" placeholder="alamat" name="alamat" required value="<?= $data["alamat"]; ?>"><br><br>
            <div> 
                <button type="submit" name="ubah">Ubah</button>
            </div>
        </div>
    </form>
</body>
</html>
