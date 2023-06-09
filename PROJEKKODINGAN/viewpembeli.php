<html>
    <head>
    <h1>Menampilkan Tabel Pembeli</h1>
    </head>

    <body>
    <h3>Data Pembeli</h3>
    <table border="1" class="table">
    <a href="addpembeli.php">tambah data</a>
        <tr>
            <th>nomor</th>
            <th>id pembeli</th>
            <th>nama pembeli</th>
            <th>no telp</th>
            <th>alamat</th>
            <th>jenis kelamin</th>
            <th>aksi</th>
        </tr>
        <?php 
        include "koneksi.php";
        $query_mysql = mysqli_query($con,"SELECT * FROM pembeli")or die(mysqli_error());
        $nomor = 1;
        while($data = mysqli_fetch_array($query_mysql)){
        ?>

        <tr> 
            <td><?php echo $nomor++; ?></td>
            <td><?php echo $data['id_pembeli']; ?></td>
            <td><?php echo $data['nama_pembeli']; ?></td>
            <td><?php echo $data['no_telp']; ?></td>
            <td><?php echo $data['alamat']; ?></td>
            <td><?php echo $data['jenis_kelamin']; ?></td>
            <td><a href="deletepembeli.php?hapus=<?php echo $data['id_pembeli'];?>">Hapus</a> || <a href="updatepembeli.php?id=<?php echo $data['id_pembeli'];?>">Update</a></td>
        </tr>  
        <?php } ?>
        </tr>  
         </table>
     </body> 
 </html>
</body>
</html>