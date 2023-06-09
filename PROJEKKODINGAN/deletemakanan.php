<?php
include 'koneksi.php';

  $hapus = $_GET['hapus'];
  $stmt = $con->prepare("DELETE FROM makanan WHERE id_makanan = ?");
  $stmt->bind_param("i", $hapus);
  $stmt->execute();
  $stmt->close();

header("location: viewmakanan.php");
?>