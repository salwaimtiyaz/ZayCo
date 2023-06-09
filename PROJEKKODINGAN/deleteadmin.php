<?php
include 'koneksi.php';

$hapus = $_GET['hapus'];
$stmt = $con->prepare("DELETE FROM admin WHERE id_admin = ?");
$stmt->bind_param("i", $hapus);
$stmt->execute();
$stmt->close();

header("location: viewadmin.php");
?>
