<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quiz2";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "";

function registrasi($data){
    global $conn;

    $username = strtolower(stripslashes ($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string ($conn, $data["password2"]);

    $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");
    
    if(mysqli_fetch_assoc($result)){
        echo "echo <script>
                alert('username sudah ada');
            </script>";
        return false;     
    }

    if ($password !== $password2){
        echo " <script>
                alert('password tidak sesuai');
                </script>";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);
    mysqli_query($conn, "INSERT INTO users VALUES(null, '$username', '$password')");

    return mysqli_affected_rows($conn);

}


?>