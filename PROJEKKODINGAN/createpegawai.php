<html>
    
    <head>
    <h1>Create Data Pegawai</h1>
    </head>

    <body>
        <h3>Data pegawai</h3>
	    <form action=" " method="post" name="form1">
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
                    <td>jenis_kelamin</td>
                    <td><input type="text" name="jenis_kelamin"></td>
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
                    $nama_pegawai= $_POST['nama_pegawai'];
                    $no_telp = $_POST['no_telp'];
                    $jenis_kelamin = $_POST['jenis_kelamin'];
                    $alamat= $_POST['alamat'];

                    $result = "INSERT INTO pegawai(nama_pegawai,no_telp,jenis_kelamin,alamat)
                    VALUES('$nama_pegawai','$no_telp','$jenis_kelamin','$alamat')";
                    mysqli_query($con,$result);
                    // Show message when user added
       // echo "Data added successfully. <a href='index.php'>View Data pegawai</a>";
        header("location:viewpegawai.php");

    }
    ?>