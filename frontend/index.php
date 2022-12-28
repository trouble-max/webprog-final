<?php
session_start();
if (isset($_SESSION["login"])) {
    header("location: main.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://cdn.homebank.kz/favicon-32x32.png">
    <link rel="stylesheet" href="./assets/style/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Homebank</title>
</head>

<body>
    <header>
        <img class="logo" src="https://cdn.homebank.kz/assets/icons/others/logotype.svg" alt="logo">
        <button onclick="location.href = './login.php';" class="login"><a href="./login.php">Вход</a></button>
        <select>
            <option value="RU" selected>Ру</option>
            <option value="KZ">Ққ</option>
            <option value="EN">En</option>
        </select>
    </header>
    <div class="main">

        <ul id="slide-container">
            <li class="slide"></li>
        </ul>

        <div class="content-first">
            <h1 class="content-title">Бесплатная мгновенная цифровая карта в подарок!</h1>
            <div class="content-review">Идеальное решение для онлайн платежей и переводов с повышенной безопасностью.</div>
            <img id="credit-card" src="https://cdn.homebank.kz/assets/cards/halyk-bonus-digital-home.png">
            <div class="list">
                <div class="list-item">
                    <img class="list-img" src="https://cdn.homebank.kz/assets/icons/home/virtual-usage.svg" alt="img">
                    <div class="text">
                        <h4>На все платежи</h4>
                        <div>1% бонусов</div>
                    </div>
                </div>

                <div class="list-item">
                    <img class="list-img" src="https://cdn.homebank.kz/assets/icons/home/virtual-currency.svg" alt="img">
                    <div class="text">
                        <h4>Мультивалютность</h4>
                        <div>KZT, USD, EUR</div>
                    </div>
                </div>

                <div class="list-item">
                    <img class="list-img" src="https://cdn.homebank.kz/assets/icons/home/virtual-free.svg" alt="img">
                    <div class="text">
                        <h4>Обслуживание</h4>
                        <div>0 тенге на все года</div>
                    </div>
                </div>
            </div>
            <a href="https://halykbank.kz/halykclub/" target="_blank" class="first-button">Подробнее о карте</a>
        </div>

        <img id="slide" src="./assets/img/image-slide.png" alt="image">

        <div class="content-payement">
            <div id="payement-info">
                <h1 id="payement">Оплачивайте покупки и зарабатывайте Go! Бонусы</h1>
            </div>
            <div></div>
            <a href="https://halykbank.kz/halykclub/" target="_blank" class="content-button">Магазины партнеры</a>
            <div id="payement-img">
                <img id="payement-slide" src="https://cdn.homebank.kz/assets/svg/go-bonus-art.svg" alt="image">
            </div>
        </div>

        <div class="content last">
            <h1>Более 6000 платежей без комиссий</h1>
            <div>Оплачивайте картами любых банков РК</div>
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