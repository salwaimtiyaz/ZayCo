<html>
    <head>
    <h1>Menampilkan Tabel Admin</h1>
    </head>

    <body>
    <h3>Data Admin</h3>
    <table border="1" class="table">
    <a href="addadmin.php">tambah data</a>
        <tr>
            <th>nomor</th>
            <th>user admin</th>
            <th>password admin</th>
            <th>alamat</th>
            <th>aksi</th>
        </tr>
        <?php 
        include "koneksi.php";
        $query_mysql = mysqli_query($con,"SELECT * FROM admin")or die(mysqli_error());
        $nomor = 1;
        while($data = mysqli_fetch_array($query_mysql)){
        ?>

        <tr> 
            <td><?php echo $nomor++; ?></td>
            <td><?php echo $data['nama_admin']; ?></td>
            <td><?php echo $data['password_admin']; ?></td>
            <td><?php echo $data['alamat']; ?></td>
            <td><a href="deleteadmin.php?hapus=<?php echo $data['id_admin'];?>">Hapus</a> || <a href="updateadmin.php?id_admin=<?php echo $data['id_admin']; ?>">Update</a></td>
        </tr>  
        <?php } ?>
        </tr>  
         </table>
     </body> 
 </html>
</body>
</html>