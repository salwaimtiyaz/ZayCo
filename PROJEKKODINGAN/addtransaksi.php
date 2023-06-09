<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<tr>
    <td>Makanan</td>
    <td>
        <select name="makanan" id="makanan">
            <option disabled selected>Pilih makanan</option>
            <?php 
            include "koneksi.php";
            $query_mysql = mysqli_query($con, "SELECT * FROM makanan") or die(mysqli_error());
            while ($data = mysqli_fetch_array($query_mysql)) {
                ?>
                <option value="<?php echo $data['id_makanan']; ?>"><?php echo $data['nama_makanan']; ?></option>
                <?php
            }
            ?>
        </select>
    </td>
</tr>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<tr>
    <td>Minuman</td>
    <td>
        <select name="minuman" id="minuman">
            <option disabled selected>Pilih minuman</option>
            <?php 
            include "koneksi.php";
            $query_mysql = mysqli_query($con, "SELECT * FROM minuman") or die(mysqli_error());
            while ($data = mysqli_fetch_array($query_mysql)) {
                ?>
                <option value="<?php echo $data['id_minuman']; ?>"><?php echo $data['nama_minuman']; ?></option>
                <?php
            }
            ?>
        </select>
    </td>
</tr>
</body>
</html>

