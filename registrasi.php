<?php

require 'connectdatabase.php';

if(isset($_POST["register"])){

    if(registrasi($_POST) > 0){
        echo "<script>
                alert('user berhasil di tambahkan');
                </script>";
                header("Location: login.php");
                exit;         
    } else{
        echo mysqli_error($conn);
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="registrasi.css">
    <title>Halaman Registasi</title>
    <style>
        label {
            display : block;
        }
    </style>

</head>
<body>
<div class="container">
        <h1>Welcome to Nuha Arsal</h1>

<form action="" method="post" class="form">

    <div class="form">
        <label for="username">Username  </label>
        <input type="text" name="username" id="username">
    </div>
    <div class="form">
        <label for="password">Password  </label>
        <input type="password" name="password" id=password>
    </div>
    <div class="form">
        <label for="password2">Konfirmasi Password  </label>
        <input type="password" name="password2" id="password2">
    </div>
    <div class="form">
        <button type="submit" name="register">Daftar</button> 
    </div>
</form>

<div>
</body>
</html>