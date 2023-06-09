<html>
    <head>
    <h1>Menampilkan Tabel Minuman</h1>
    </head>

    <body>
    <h3>Data Minuman</h3>
    <table border="1" class="table">
    <a href="addminuman.php">tambah data</a>
        <tr>
            <th>nomor</th>
            <th>id minuman</th>
            <th>nama minuman</th>
            <th>harga minuman</th>
            <th>jenis minuman</th>
            <th>aksi</th>
        </tr>
        <?php 
        include "koneksi.php";
        $query_mysql = mysqli_query($con,"SELECT * FROM minuman")or die(mysqli_error());
        $nomor = 1;
        while($data = mysqli_fetch_array($query_mysql)){
        ?>

        <tr> 
            <td><?php echo $nomor++; ?></td>
            <td><?php echo $data['id_minuman']; ?></td>
            <td><?php echo $data['nama_minuman']; ?></td>
            <td><?php echo $data['harga_minuman']; ?></td>
            <td><?php echo $data['jenis_minuman']; ?></td>
            <td><a href="deleteminuman.php?hapus=<?php echo $data['id_minuman'];?>">Hapus</a> || <a href="updateminuman.php?id=<?php echo $data['id_minuman'];?>">Update</a></td>
        </tr>  
        <?php } ?>
        </tr>  
         </table>
     </body> 
 </html>
</body>
</html>