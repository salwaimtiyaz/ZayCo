<?php
include 'koneksi.php';

$hapus = $_GET['hapus'];
$stmt = $con->prepare("DELETE FROM akun WHERE id_user = ?");
$stmt->bind_param("i", $hapus);
$stmt->execute();
$stmt->close();

header("location: viewakun.php");
?>
