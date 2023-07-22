<?php require "functions.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Link Bootstrap 5.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container" style="text-align: center">
        <h1>Halaman Login</h1>
        <form action="" method="post">
            <div class="form-group">
                <label for="">Username</label>
                <input type="text" name="username" id="" placeholder="Input username" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="pw" id="" class="form-control">
            </div>
            <div class="form-group">
                <button class="btn btn-primary" name="login" type="submit">Login</button>
            </div>
        </form>
        <a href="registrasi.php">Registrasi akun disini</a>
    </div>

    <?php
    if (isset($_POST["login"])) {
        $username = $_POST["username"];
        $password = $_POST["pw"];
        if (user_jumlah($username) > 0) {
            if (password_verify($password, user_username_satu($username, "password"))) {
                $tgl = date("Y-m-d H:i:s");
                q("UPDATE user SET login = '$tgl' WHERE username = '$username'");
                session_start();
                $_SESSION["login"] = true;
                $_SESSION["username"] = $username;
                echo "<script>
                alert('Login anda berhasil!')
                location='../my_web/'
                </script>";
            } else {
                echo "<script>
                alert('Password anda masih salah!')
                </script>";
            }
        } else {
            echo "<script>
            alert('Username tidak ditemukan!')
            </script>";
        }
    }
    ?>

</body>

</html>