<html>
    <head>
    <h1>Menampilkan Tabel Pegawai</h1>
    </head>

    <body>
        <h3>Data pegawai</h3>
        <table border="1" class="table">
            <a href="addpegawai.php">tambah data</a>
             <tr>
                <th>no</th>
                <th>id pegawai</th>
                <th>nama pegawai</th>
                <th>no telp</th>
                <th>alamat</th>
                <th>jenis kelamin</th>
                <th>aksi</th>
            </tr>
            <?php 
        include "koneksi.php";
        $query_mysql = mysqli_query($con,"SELECT * FROM pegawai")or die(mysqli_error());
        $nomor = 1;
        while($data = mysqli_fetch_array($query_mysql)){
            ?>
        <tr> 
            <td><?php echo $nomor++; ?></td>
            <td><?php echo $data['id_pegawai']; ?></td>
            <td><?php echo $data['nama_pegawai']; ?></td>
            <td><?php echo $data['no_telp']; ?></td>
            <td><?php echo $data['alamat']; ?></td>
            <td><?php echo $data['jenis_kelamin']; ?></td>
            <td><a href="deletepegawai.php?hapus=<?php echo $data['id_pegawai'];?>">Hapus</a> || <a href="updatepegawai.php?id=<?php echo $data['id_pegawai'];?>">Update</a></td>
        </tr>  
        <?php } ?>
        </tr>  
         </table>
     </body> 
 </html>
</body>
</html>
