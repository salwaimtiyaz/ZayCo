<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <div>
        <form action="register.php" method="POST">
            <input type="text" placeholder="Username" name="usn" required>
            <input type="text" placeholder="Email" name="email" required>
            <input type="password" placeholder="Password" name="pass" required>
            <textarea name="alamat" placeholder="Alamat"></textarea>
            <input type="submit" name="submit" value="Register">
        </form>

        <?php
        include("koneksi.php");

        if(isset($_POST['submit'])){
            $usn = mysqli_real_escape_string($con, $_POST['usn']);
            $email = mysqli_real_escape_string($con, $_POST['email']);
            $pass = mysqli_real_escape_string($con, $_POST['pass']);
            $alamat = mysqli_real_escape_string($con, $_POST['alamat']);

            $sql = "INSERT INTO akun (nama_user, gmail_user, pass_user, alamat) VALUES ('$usn', '$email', '$pass', '$alamat')";
            $result = mysqli_query($con, $sql);

            if($result){
                echo "Registration successful.";
            } else {
                echo "Registration failed.";
            }
        }
        ?>
    </div>
</body>
</html>
