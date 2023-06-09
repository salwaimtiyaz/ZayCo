<html>
    
    <head>
    <h1>Create Data Minuman</h1>
    </head>

    <body>
        <h3>Data Minuman</h3>
	    <form action=" " method="post" name="form1">
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
                <tr>
                    
                    <td></td>
                    <td><input type="submit" name="Submit" value="Add"></td>
                </tr>
                <?php
                include 'koneksi.php';
                // Check If form submitted, insert form data into users table.

                if(isset($_POST['Submit'])) {
                    $nama_minuman= $_POST['nama_minuman'];
                    $harga_minuman = $_POST['harga_minuman'];
                    $jenis_minumann = $_POST['jenis_minuman'];

                    $result = "INSERT INTO admin
                    VALUES('','$nama_minuman','$harga_minuman','$jenis_minuman')";
                    mysqli_query($con,$result);
                    // Show message when user added
       // echo "Data added successfully. <a href='index.php'>View Data minuman</a>";
        header("location: viewminuman.php");

    }
    ?>