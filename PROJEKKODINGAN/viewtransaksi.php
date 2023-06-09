<html>
    <head>
    <h1>Menampilkan Tabel Transaksi</h1>
</head>

<body>
    <h3>Data Transaksi</h3>
    <table border="1" class="table">
    <a href="createtransaksi.php">tambah data</a>
        <tr>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <table border="1">
        <tr>
            <th>nomor</th>
            <th>id transaksi</th>
            <th>id pembeli</th>
            <th>id pegawai</th>
            <th>id makanan</th>
            <th>id minuman</th>
        </tr>
        <?php 
        include "koneksi.php";
        $query_mysql = mysqli_query($con,"SELECT * FROM transaksi")or die(mysqli_error());
        $nomor = 1;
        while($data = mysqli_fetch_array($query_mysql)){
        ?>

        <tr> 
            <td><?php echo $nomor++; ?></td>
            <td><?php echo $data['id_transaksi']; ?></td>
            <td><?php echo $data['id_pembeli']; ?></td>
            <td><?php echo $data['id_pegawai']; ?></td>
            <td><?php echo $data['id_makanan']; ?></td>
            <td><?php echo $data['id_minuman']; ?></td>
            <td><a href="deletetransaksi.php?hapus=<?php echo $data['id_transaksi'];?>">Hapus</a> || <a href="updatetransaksi.php?id=<?php echo $data['id_transaksi'];?>">Update</a></td>
        </tr>  
        <?php } ?>
        </tr>  
         </table>
     </body> 
 </html>
</body>
</html>
    