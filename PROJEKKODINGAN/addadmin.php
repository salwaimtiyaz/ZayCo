<html>
    <head>
    <h1>Form Data admin</h1>
    </head>

    <body>
        <h3>Admin</h3>
        <form action="" method="post" name="form1">
            <table width="25%" border="0">
                 
                 </tr>
                
                      <td>nama_admin</td>
                      <td><input type="text" name="nama_admin"></td>
                 </tr>
                 <tr>
                     <td>password_admin</td>
                     <td><input type="text" name="password_admin"></td>
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

            $nama_admin= $_POST['nama_admin'];
            $password_admin= $_POST['password_admin'];
            $alamat= $_POST['alamat'];
            echo($id_admin);
            // include database connection file
            include_once("koneksi.php");
  
            //Insert user data into table
            $result = mysqli_query ($con,
            "INSERT INTO admin(id_admin,nama_admin,password_admin,alamat)
            VALUES(NULL,'$nama_admin','$password_admin','$alamat')");
  
            // Show massage when user added
            // echo "Data added successfully. <a href='index.php'>View Data Admin</a>";
             header("location:viewadmin.php");
  
          }
          ?>
               </table>
       </form>
       </body>
  </html>