<html>
    <head>
        <link rel="stylesheet" href="style8.css">
    </head>
<body>
        <div class="logo"><a href='makanan.php'>Javacation.</a></div>

        <h3>Tambah Data Makanan</h3>
        <form action="" method="post">
        <table>
            <tr>
                <td width ="130">Nama Makanan</td>
                <td><input type="text" name="nama_makanan" required autocomplete="off"></td>
            </tr>

            <tr>
                <td width ="130">Harga Makanan</td>
                <td><input type="text" name="harga_makanan" required autocomplete="off" ></td>
            </tr>

            <tr>
                <td width ="130">Jenis Makanan</td>
                <td><input type="text" name="jenis_makanan" required autocomplete="off"></td>
            </tr>
            <tr>
                <td><input type="submit" name="tambah"values="Tambah" > </td>
            </tr>
        </table>
        </form>
        </body>
</html>

        <?php
        include "koneksi.php";

        if(isset($_POST['tambah'])){
            mysqli_query($con,"INSERT INTO makanan set
            nama_makanan = '$_POST[nama_makanan]',
            harga_makanan = '$_POST[harga_makanan]',
            jenis_makanan= '$_POST[jenis_makanan]'");

            echo "data baru telah tersimpan!!";
            header("location:makanan.php");
        }
        ?>