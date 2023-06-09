<html>
    
    <head>
    <h1>Create Data Transaksi</h1>
    </head>

    <body>
        <h3>Data transaksi</h3>
	    <form action=" " method="post" name="form1">
            <table width="25%" border="0">
                
                <tr> 
                    <td>id_pembeli</td>
                    <td><input type="text" name="id_pembeli"></td>
                </tr>
                <tr>
                    <td>id_pegawai</td>
                    <td><input type="text" name="id_pegawai"></td>
                </tr>
                <tr> 
                    <td>id_makanan</td>
                    <td><input type="text" name="id_makanan"></td>
                </tr>
                <tr>
                    <td>id_minuman</td>
                    <td><input type="text" name="id_minuman"></td>
                </tr>
                <tr>
                    
                    <td></td>
                    <td><input type="submit" name="Submit" value="Add"></td>
                </tr>
                <?php
                include 'koneksi.php';

                
                // Check If form submitted, insert form data into users table.
                if(isset($_POST['Submit'])) {
                    $id_pembelis= $_POST['id_pembeli'];
                    $id_pegawais = $_POST['id_pegawai'];
                    $id_makanans = $_POST['id_makanan'];
                    $id_minumans= $_POST['id_minuman'];

                    $result = "INSERT INTO transaksi
                    VALUES('$id_pembelis','$id_pegawais','$id_makanans','$id_minumans')";
                    mysqli_query($con,$result);
                    // Show message when user added
       // echo "Data added successfully. <a href='index.php'>View Data transaksi</a>";
        header("location:viewtransaksi.php");

    }
    ?>