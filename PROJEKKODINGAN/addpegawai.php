<html>
    <head>
    <h1>Form Data pegawai</h1>
    </head>

    <body>
        <h3>Pegawai</h3>
        <form action="" method="post" name="form1">

            <table width="25%" border="0">
                 
                 <tr>
                      <td>nama_pegawai</td>
                      <td><input type="text" name="nama_pegawai"></td>
                 </tr>
                 <tr>
                      <td>no_telp</td>
                      <td><input type="text" name="no_telp"></td>
                 </tr>
                 <tr>
                     <td>alamat</td>
                     <td><input type="text" name="alamat"></td>
                 </tr>           
                 <tr>
                     <td>jenis_kelamin</td>
                     <td><input type="text" name="jenis_kelamin"></td>
                 </tr>
                 <td></td>
                    <td><input type="submit" value="simpan" name="submit"></td>
                 </tr>
            </table>
        </form>
        <?php
        // Check If form submitted, insert form data into users table.
        if(isset($_POST['submit'])) {

            $nama_pegawai= $_POST['nama_pegawai'];
            $no_telp= $_POST['no_telp'];
            $alamat= $_POST['alamat'];
            $jenis_kelamin= $_POST['jenis_kelamin'];
            echo($id_pegawai);
            // include database connection file
            include_once("koneksi.php");
  
            //Insert user data into table
            $result = mysqli_query ($con,
            "INSERT INTO pegawai(id_pegawai,nama_pegawai,no_telp,alamat,jenis_kelamin)
            VALUES(NULL,'$nama_pegawai','$no_telp','$alamat','$jenis_kelamin')");
  
            // Show massage when user added
            // echo "Data added successfully. <a href='index.php'>View Data Pegawai</a>";
             header("location:viewpegawai.php");
  
          }
          ?>
               </table>
       </form>
       </body>
  </html>