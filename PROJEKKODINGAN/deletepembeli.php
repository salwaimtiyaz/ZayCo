<?php
include 'koneksi.php';

$hapus = $_GET['hapus'];
$stmt = $con->prepare("DELETE FROM pembeli WHERE id_pembeli = ?");
$stmt->bind_param("i", $hapus);
$stmt->execute();
$stmt->close();

header("location: viewpembeli.php");
?>