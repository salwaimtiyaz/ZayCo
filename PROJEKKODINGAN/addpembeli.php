<html>
    <head>
    <h1>Form Data pembeli</h1>
    </head>

    <body>
        <h3>Pembeli</h3>
        <form action="" method="post" name="form1">
            <table width="25%" border="0">
                 
                 <tr>
                      <td>nama_pembeli</td>
                      <td><input type="text" name="nama_pembeli"></td>
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

            $nama_pembeli= $_POST['nama_pembeli'];
            $no_telp= $_POST['no_telp'];
            $alamat= $_POST['alamat'];
            $jenis_kelamin= $_POST['jenis_kelamin'];
            // include database connection file
            include_once("koneksi.php");
  
            //Insert user data into table
            $result = "INSERT INTO pembeli(nama_pembeli,no_telp,alamat,jenis_kelamin)
            VALUES('$nama_pembeli','$no_telp','$alamat','$jenis_kelamin')";
            mysqli_query($con,$result);
  
            // Show massage when user added
            // echo "Data added successfully. <a href='index.php'>View Data Pembeli</a>";
             header("location:viewpembeli.php");
  
          }
          ?>
               </table>
       </form>
       </body>
  </html>