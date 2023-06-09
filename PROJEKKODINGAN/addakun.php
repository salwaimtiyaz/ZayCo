<html>
    <head>
    <h1>Form Data Akun</h1>
    </head>

    <body>
        <h3>Akun</h3>
        <form action="" method="post" name="form1">

            <table width="25%" border="0">
                 
                 <tr>
                      <td>nama_user</td>
                      <td><input type="text" name="nama_user"></td>
                 </tr>
                 <tr>
                      <td>gmail_user</td>
                      <td><input type="text" name="gmail_user"></td>
                 </tr>
                 <tr>
                     <td>pass_user</td>
                     <td><input type="text" name="pass_user"></td>
                 </tr>           
                 <tr>
                     <td>alamat</td>
                     <td><input type="text" name="alamat"></td>
                 </tr>
                 <td></td>
                    <td><input type="submit" value="simpan" name="submit"></td>
                 </tr>
            </table>
        </form>
        <?php
        // Check If form submitted, insert form data into users table.
        if(isset($_POST['submit'])) {

            $nama_user= $_POST['nama_user'];
            $gamil_user= $_POST['gmail_user'];
            $pass_user= $_POST['pass_user'];
            $alamat= $_POST['alamat'];
            echo($id_user);
            // include database connection file
            include_once("koneksi.php");
  
            //Insert user data into table
            $result = mysqli_query ($con,
            "INSERT INTO pegawai(id_user,nama_user,gmail_user,pass_user,alamat)
            VALUES(NULL,'$nama_user','$gmail_user','$pass_user','$alamat')");
  
            // Show massage when user added
            // echo "Data added successfully. <a href='index.php'>View Data Akun</a>";
             header("location:viewakun.php");
  
          }
          ?>
               </table>
       </form>
       </body>
  </html>