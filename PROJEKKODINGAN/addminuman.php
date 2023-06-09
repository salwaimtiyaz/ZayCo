<html>
    <head>
    <h1>Form Data Minuman</h1>
    </head>

    <body>
        <h3>Minuman</h3>
        <form action="" method="post" name="form1">
            <table width="25%" border="0">

                 <tr>
                      <td>nama_minuman</td>
                      <td><input type="text" name="nama_minuman"></td>
                 </tr>
                 <tr>
                      <td>harga_minuman</td>
                      <td><input type="text" name="harga_minuman"></td>
                 </tr>
                 <tr>
                     <td>jenis_minuman</td>
                     <td><input type="text" name="jenis_minuman"></td>
                 </tr>
                 <td></td>
                    <td><input type="submit" value="simpan" name="submit"></td>
                 </tr>
            </table>
        </form>
        <?php
        include "koneksi.php";
        // Check If form submitted, insert form data into users table.
        if(isset($_POST['submit'])) {

          $nama_minuman= $_POST['nama_minuman'];
          $harga_minuman= $_POST['harga_minuman'];
          $jenis_minuman= $_POST['jenis_minuman'];
          
          // include database connection file

          //Insert user data into table
          $result = mysqli_query ($con,
          "INSERT INTO minuman(id_minuman,nama_minuman,harga_minuman,jenis_minuman)
          VALUES(NULL ,'$nama_minuman','$harga_minuman','$jenis_minuman')");

          // Show massage when user added
          // echo "Data added successfully. <a href='index.php'>View Data Minuman</a>";
           header("location:viewminuman.php");

        }
        ?>
             </table>
     </form>
     </body>
</html>