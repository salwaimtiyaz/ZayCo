<html>
    <head>
    <h1>Menampilkan Tabel Akun</h1>
</head>

<body>
    <h3>Data akun</h3>
    <table border="1" class="table">
    <a href="addakun.php">tambah data</a>
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
            <th>id user</th>
            <th>nama user</th>
            <th>gmail user</th>
            <th>pass user</th>
            <th>alamat</th>
            <th>aksi</th>
        </tr>
        <button><a href="addakun.php">tambah</a><br/></br/></button>
        <?php 
        include "koneksi.php";
        $query_mysql = mysqli_query($con,"SELECT * FROM akun")or die(mysqli_error());
        $nomor = 1;
        while($data = mysqli_fetch_array($query_mysql)){
        ?>

        <tr> 
            <td><?php echo $nomor++; ?></td>
            <td><?php echo $data['id_user']; ?></td>
            <td><?php echo $data['nama_user']; ?></td>
            <td><?php echo $data['gmail_user']; ?></td>
            <td><?php echo $data['pass_user']; ?></td>
            <td><?php echo $data['alamat']; ?></td>
            <td><a href="deleteakun.php?hapus=<?php echo $data['id_user'];?>">Hapus</a> || <a href="updateakun.php?id=<?php echo $data['id_user'];?>">Update</a></td>
        </tr>  
        <?php } ?>
        </tr>  
         </table>
     </body> 
 </html>
</body>
</html>
    