<?php
    session_start();
    if (!isset($_SESSION['username'])){
        header("Location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WILIS SPACEHOOPS</title>
    <link rel = "icon" href = "img/icon.jpg" type = "image/x-icon">
    <link rel="stylesheet" href="landingpage.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="navbar">
            <nav>
                <ul>
                    <li><a href="">HOME</a></li>
                    <li><a href="">MARKET</a></li>
                    <li><a href="">STREAMING</a></li>
                    <li><a href="">SPACESHIP</a></li>
                </ul>
            </nav>
            <img src="icon/profile-user.png" class="menu-icon">
    </div>

    <div class="row">
        <div class="col">
            <h1 class="wilis">WILIS</h1>
            <h1 class="space">SPACEHOOPS</h1>
            <p class="sp1">WILIS SPACEHOOPS merupakan tempat anda untuk menemukan pengalaman dalam memasuki dunia virtual. Anda dapat bermain game sambil melakukan live bersama teman-teman anda atau bahkan anda dapat menonton streamer favorit anda. Selain itu anda juga dapat membeli koin untuk menjadikan karakter anda lebih unik dan membeli senjata rare agar tidak dapat dikalahkan.</p>
            <p class="sp2">Selamat datang Troops! masuki kokpit dan mari bertarung bersama kami.</p>
            <button type="button">Let's Stream</button>
        </div>
        <div class="col col2">
            <div class="topglobal">Top Global Streamer!</div>
            <div class="card card1">
                <h5>@Kayesss</h5>
                <div class="textcard">
                <p>Rank : 1st</p>
                <p>Popularity : 2,1M</p>
                <p>Game : Valorant</p>
            </div>
            </div>  
            <div class="card card2">
                <h5>@rrqlemon</h5>
                <div class="textcard">
                <p>Rank : 2nd</p>
                <p>Popularity : 1,7M</p>
                <p>Game : Mobile Legends</p>
            </div>
            </div>  
            <div class="card card3">
                <h5>@rapyourbae</h5>
                <div class="textcard">
                <p>Rank : 3rd</p>
                <p>Popularity : 1,5M</p>
                <p>Game : Valorant</p>
            </div>
            </div>  
            <div class="card card4">
                <h5>@JessNoLimit</h5>
                <div class="textcard">
                <p>Rank : 4th</p>
                <p>Popularity : 1M</p>
                <p>Game : DOTA 2</p>
            </div>
            </div>  
        </div>
    </div>
</div>
</body>
</html>