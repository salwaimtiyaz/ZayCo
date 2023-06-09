<html>
    <head>
    <h1>Form Data Makanan</h1>
    </head>

    <body>
        <h3>Makanan</h3>
        <form action="" method="post" name="form1">
            <table width="25%" border="0">

                 <tr>
                      <td>nama_makanan</td>
                      <td><input type="text" name="nama_makanan"></td>
                 </tr>
                 <tr>
                      <td>harga_makanan</td>
                      <td><input type="text" name="harga_makanan"></td>
                 </tr>
                 <tr>
                     <td>jenis_makanan</td>
                     <td><input type="text" name="jenis_makanan"></td>
                 </tr>
                 <tr>
                    <td></td>
                    <td><input type="submit" value="simpan" name="submit"></td>
                 </tr>
            </table>
        </form>
        <?php
        // Check If form submitted, insert form data into users table.
        if(isset($_POST['submit'])) {

          $nama_makanan= $_POST['nama_makanan'];
          $harga_makanan= $_POST['harga_makanan'];
          $jenis_makanan= $_POST['jenis_makanan'];
          echo($id_makanan);
          // include database connection file
          include_once("koneksi.php");

          //Insert user data into table
          $result = mysqli_query ($con,
          "INSERT INTO makanan(id_makanan,nama_makanan,harga_makanan,jenis_makanan)
          VALUES(NULL,'$nama_makanan','$harga_makanan','$jenis_makanan')");

          // Show massage when user added
          // echo "Data added successfully. <a href='index.php'>View Data Makanan</a>";
           header("location:viewmakanan.php");

        }
        ?>
             </table>
     </form>
     </body>
</html>



