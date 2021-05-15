<?php

session_start();

//cek cookie

if (isset($_COOKIE['login'])){
    if($_COOKIE['login'] == 'true'){
        $_SESSION['login'] = true;
    }

}

if(isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}

require 'connectdatabase.php';

if (isset($_POST["login"])){

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result= mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

    //cek username ada tidak pada database
    if (mysqli_num_rows($result) === 1){

        //cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"]) ) {
            //set session
            $_SESSION["login"]= true;

            //cek remember
            if (isset($_POST['remember'])){
                // buat cookie
                setcookie('login', 'true', time() + 100);

            }
            header("Location: index.php");
            exit;
        }
    }

    $error = true;

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="login.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <h1>Welcome to Nuha Arsal</h1>

<?php

if (isset($error)) : ?>
    <p style="color : red;">username atau password salah<p>
<?php endif; 
?>

<form action="" method="post" class="form">

    <div class="form">
        <label for="username">Username </label>
        <input type="text" name="username" id="username">
    </div>
    <div class="form">
        <label for="password">Password  </label>
        <input type="password" name="password" id="password">
    </div>
    <div class="ingat">
        <input type="checkbox" name="remember" id="remember"><label for="remember">Ingat Saya</label>
    </div>
    <div class="form">
        <button type="submit" name="login">Masuk</button>
    </div>
    <div class="register">
    <button><a href="registrasi.php">Belum Memiliki Akun</a></button>
    </div>
</form>

</div>
</body>
</html>

<!-- username dan password yang sudah ada di database sama
bisa gunakan username: cobalagi password: cobalagi
bisa gunakan username: cobauser password: cobauser -->

<!-- Nama : Putri Armaini
NIM : 192410101094
Kelas : Pemrograman Website B -->

