<html>
    
    <head>
    <h1>Create Data Makanan</h1>
    </head>

    <body>
        <h3>Data Makanan</h3>
	    <form action=" " method="post" name="form1">
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
                    <td><input type="submit" name="Submit" value="Add"></td>
                </tr>
                <?php
                include 'koneksi.php';
                // Check If form submitted, insert form data into users table.

                if(isset($_POST['Submit'])) {
                    $nama_makanan= $_POST['nama_makanan'];
                    $harga_makanan = $_POST['harga_makanan'];
                    $jenis_makanan = $_POST['jenis_makanan'];

                    $result = "INSERT INTO admin
                    VALUES('','$nama_makanan','$harga_makanan','$jenis_makanan')";
                    mysqli_query($con,$result);
                    // Show message when user added
       // echo "Data added successfully. <a href='index.php'>View Data makanan</a>";
        header("location: viewmakanan.php");

    }
    ?>