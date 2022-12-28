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
    <link rel="stylesheet" href="./assets/style/main_Yera.css">

    <title>Login Page</title>
</head>

<body>
    <div class="wrapper">
        <header>
            <img class="logo" src="https://cdn.homebank.kz/assets/icons/others/logotype.svg" alt="logo">
            <button class="login"><a href="./login.php">Вход</a></button>
            <select>
                <option value="RU" selected>Ру</option>
                <option value="KZ">Ққ</option>
                <option value="EN">En</option>
            </select>
        </header>

        <div class="login-form">
            <div class="login-form-wrapper">
                <form action="../backend/login_process.php" method="post" class="login-form-content">
                    <div class="login-form-item1">
                        <h2>
                            Вход в homebank
                        </h2>
                    </div>
                    <input class="login-form-item2 login-form-input" type="email" name="email" class="login-form-input" placeholder="Введите ваш логин">
                    <input class="login-form-item3 login-form-input" type="password" name="password" class="login-form-input" placeholder="Введите ваш пароль">
                    <button class="login-form-item4" type="submit" name="submit">
                        Войти
                    </button>
                    <div class="login-form-item5">
                        <a class="login-form-link" href="./registration.php">Нет аккаунта в homebank?</a>
                    </div>
                </form>
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

    </div>
</body>

</html>