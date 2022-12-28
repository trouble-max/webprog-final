<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://cdn.homebank.kz/favicon-32x32.png">
    <link rel="stylesheet" href="./assets/style/transfers.css">
    <title>Homebank</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<header>
        <img class="logo" src="https://cdn.homebank.kz/assets/icons/others/logotype.svg" alt="logo">
        <nav>
            <ul class="nav__links">
                <li><a href="./main.php">Главная</a></li>
                <li><a href="./payements.php">Платежи</a></li>
                <li><a id="active" href="#">Переводы</a></li>
                <li><a href="./cards.php">Продукты</a></li>
                <li><a href="./services.php">Услуги</a></li>
                <li><a href="./user.php">User</a></li>
            </ul>
        </nav>
        <button class="login"><a href="../backend/logout_process.php">Log Out</a></button>
        <select>
            <option value="RU" selected>Ру</option>
            <option value="KZ">Ққ</option>
            <option value="EN">En</option>
        </select>
    </header>

    <div class="main">
        <div class="main-box">
        
        </div>
        
        <div class="main-box">
            
        </div>
    </div>

    <footer>
        <div class="footer-content">
            <div class="app">
                <h3>Homebank в вашем смартфоне</h3>
                <a href="https://itunes.apple.com/us/app/homebank.kz/id440635615" target="_blank" class="button">
                    <img src="https://cdn.homebank.kz/assets/icons/others/app-store.svg" id="icon_app-store">
                </a>
                <a href="https://play.google.com/store/apps/details?id=kz.kkb.homebank" target="_blank" class="button">
                    <img src="https://cdn.homebank.kz/assets/icons/others/google-play.svg" id="icon_google-play">
                </a>
            </div>
            <div class="call-center">
                <h3>Контакт-центр</h3>
                <h2>7111</h2>
            </div>
            <div class="conditions">
                <h4>Условия</h4>
                <a href="https://cdn.homebank.kz/docs/interconnection_agreement-ru.pdf" target="_blank" class="category-link">
                    Договор использования услуг Ноmеbank
                </a>
                <a target="_blank" class="category-link" href="https: //cdn.homebank.kz/docs/safety_tips-ru.pdf">
                    Безопасность
                </a>
            </div>

        </div>
        <div class="footer-bottom">
            <div class="logo-div">
                <img class="logo halyk" src="https://cdn.homebank.kz/assets/svg/halykbank-logo.svg" alt="halyk">
                <p class="halyk-copy">
                    Лицензия на проведение банковских и иных операций и деятельности на рынке ценных бумаг № 1.2.47/230/38/1 от 3 февраля 2020 года<br>
                    &copy; 2000 — 2022 АО «Народный Банк Казахстана»
                </p>
            </div>
            <ul class="socials">
                <li><a href="./market.php"><i class="fa fa-shopping-basket"></i></a></li>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-vk"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
            </ul>
        </div>
    </footer>
</body>
</html>