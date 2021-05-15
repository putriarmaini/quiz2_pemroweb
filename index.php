<?php

session_start();

if (!isset($_SESSION["login"])){
    header("Location: login.php");
    exit;

}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Beranda Nuha Arsal</title>
	<link rel="stylesheet" type="text/css" href="home.css">
</head>
<body>
    <nav>
        <img src="nuhaarsal logo.png" width="20%" height="100%">
        <ul>
        <li><a class="klik" href="#">Home</a></li>
        <li><a href="https://quran.kemenag.go.id/">Al-Quran</a></li>
        <li><a href="https://www.instagram.com/nuha.arsal/?hl=id">Content Nuha</a></li>
        <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>
    <div class="isi">
    <div class="tulisan">
        <h1>Muslimah Community</h1>
        <p>nuha arsal merupakan komunitas dakwah digital yang bertujuan menyampaikan ilmu dan kebaikan yang berlandasan Al-Quran dan As-sunnah</p><br>
        <p><b>Hubungi Kami : nuhaarsal.official@gmail.com</b></p><br>
        <div class="sosmed">
            <label>Social Media</label><br>
            <a href="https://www.instagram.com/nuha.arsal/?hl=id">
            <img src="instagram.png" alt="instagram"></a>
            <a href="https://www.youtube.com/channel/UCU3jTJ2jQvKwjPbsHziZpKw">
            <img src="youtube.png" alt="youtube"></a>
        </div>
    </div>
    <div class="gambar">
        <img src="komunitas.png">
    </div>
    </div>
</body>
</html>