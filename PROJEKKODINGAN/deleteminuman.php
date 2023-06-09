<?php
include 'koneksi.php';

if (isset($_GET['hapus'])) {
  $hapus = $_GET['hapus'];
  
  $stmt = $con->prepare("DELETE FROM minuman WHERE id_minuman = ?");
  $stmt->bind_param("i", $hapus);
  $stmt->execute();
  $stmt->close();
}

header("location: viewminuman.php");
?>