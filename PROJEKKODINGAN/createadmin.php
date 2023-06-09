<html>
    
    <head>
    <h1>Create Data Admin</h1>
    </head>

    <body>
        <h3>Data Admin</h3>
	    <form action=" " method="post" name="form1">
            <table width="25%" border="0">
                
                <tr>
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
                <tr>
                    
                    <td></td>
                    <td><input type="submit" name="Submit" value="Add"></td>
                </tr>
                <?php
                include 'koneksi.php';
                // Check If form submitted, insert form data into users table.
                if(isset($_POST['Submit'])) {
                    $id_pegawais = $_POST['nama_admin'];
                    $id_makanans = $_POST['password_admin'];
                    $id_minumans= $_POST['alamat'];

                    $result = "INSERT INTO admin
                    VALUES('$id_admin','$nama_admin','$password_admin','$alamat')";
                    mysqli_query($con,$result);
                    // Show message when user added
       // echo "Data added successfully. <a href='index.php'>View Data admin</a>";
        header("location:viewadmin.php");

    }
    ?>