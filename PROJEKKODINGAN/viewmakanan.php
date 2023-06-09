
<html>
    <head>
    <h1>Menampilkan Tabel Makanan</h1>
</head>

<body>
    <h3>Data Makanan</h3>
    <table border="1" class="table">
    <a href="addmakanan.php">tambah data</a>
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
            <th>id makanan</th>
            <th>nama makanan</th>
            <th>harga makanan</th>
            <th>jenis makanan</th>
            <th>aksi</th>
        </tr>
        <button><a href="addmakanan.php">tambah</a><br/></br/></button>
        <?php 
        include "koneksi.php";
        $query_mysql = mysqli_query($con,"SELECT * FROM makanan")or die(mysqli_error());
        $nomor = 1;
        while($data = mysqli_fetch_array($query_mysql)){
        ?>

        <tr> 
            <td><?php echo $nomor++; ?></td>
            <td><?php echo $data['id_makanan']; ?></td>
            <td><?php echo $data['nama_makanan']; ?></td>
            <td><?php echo $data['harga_makanan']; ?></td>
            <td><?php echo $data['jenis_makanan']; ?></td>
            <td><a href="deletemakanan.php?hapus=<?php echo $data['id_makanan'];?>">Hapus</a> || <a href="updatemakanan.php?id=<?php echo $data['id_makanan'];?>">Update</a></td>
        </tr>  
        <?php } ?>
        </tr>  
         </table>
     </body> 
 </html>
</body>
</html>
    