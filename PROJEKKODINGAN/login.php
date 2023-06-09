<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZayCo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body><div class="logo">
        <img src="logo.png" alt="">
        <a href="">Home</a>
        <a href="">Picture</a>
        <a href="">Menu</a>
    </div>

    <img src="background.png" alt="">

    <div>
        <form action="" method="POST">
            <input type="text" placeholder="Username" name="usn" required><br>
            <input type="password" placeholder="Password" name="pass" required><br>
            <input type="submit" name="submit">
        </form>
        <a href="register.php"><p>Tidak punya akun? Daftar!</p></a>
        <?php
        include("koneksi.php");
        if(isset($_POST['submit'])){
            session_start();
            $usn = $_POST['usn'];
            $pass = $_POST['pass'];
            $cek = mysqli_query($con, "SELECT * FROM akun WHERE nama_user = '".$usn."' AND pass_user = '".$pass."'");
            if (mysqli_num_rows($cek) > 0 ){
                $p = mysqli_fetch_object($cek);
                $_SESSION['status_login'] = true;
                $_SESSION['a_global'] = $p;
                $_SESSION['id'] = $p->id_user;
                echo '<script>window.location="addmakanan.php"</script>';
            }else{
                echo '<script>alert("Username atau Password Salah!")</script>';
            }
        }
        
        ?>
    </div>
</body>
</html>