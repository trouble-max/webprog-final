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
    <link rel="stylesheet" href="./assets/style/payements.css">
    <title>Homebank</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <header>
        <img class="logo" src="https://cdn.homebank.kz/assets/icons/others/logotype.svg" alt="logo">
        <nav>
            <ul class="nav__links">
                <li><a href="./main.php">Главная</a></li>
                <li><a id="active" href="#">Платежи</a></li>
                <li><a href="./transfers.php">Переводы</a></li>
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
            <div class="box">
                <img src="./assets/img/payements/mob.png" class="box-image">
                <h5 class="small-text">Мобильная связь</h5>
            </div>
            <div class="box">
                <img src="./assets/img/payements/phone.png" class="box-image">
                <h5 class="small-text">Городской телефон</h5>
            </div>
            <div class="box">
                <img src="./assets/img/payements/fine.png" class="box-image">
                <h5 class="small-text">Налоги, штрафы</h5>
            </div>
            <div class="box">
                <img src="./assets/img/payements/charity.png" class="box-image">
                <h5 class="small-text">Благотворительность</h5>
            </div>
            <div class="box">
                <img src="./assets/img/payements/security.png" class="box-image">
                <h5 class="small-text">Охрана</h5>
            </div>
            <div class="box">
                <img src="./assets/img/payements/house.png" class="box-image">
                <h5 class="small-text">Коммунальные услуги</h5>
            </div>
            <div class="box">
                <img src="./assets/img/payements/education.png" class="box-image">
                <h5 class="small-text">Образование</h5>
            </div>
            <div class="box">
                <img src="./assets/img/payements/internet.png" class="box-image">
                <h5 class="small-text">Интернет, ТВ</h5>
            </div>
            <div class="box">
                <img src="./assets/img/payements/vehicle.png" class="box-image">
                <h5 class="small-text">Транспорт</h5>
            </div>
            <div class="box">
                <img src="./assets/img/payements/services.png" class="box-image">
                <h5 class="small-text">Финансовые услуги</h5>
            </div>
            <div class="box">
                <img src="./assets/img/payements/sport.png" class="box-image">
                <h5 class="small-text">Спорт туризм</h5>
            </div>
            <div class="box">
                <img src="./assets/img/payements/online-services.png" class="box-image">
                <h5 class="small-text">Онлайн сервисы</h5>
            </div>
            <div class="box">
                <img src="./assets/img/payements/games.png" class="box-image">
                <h5 class="small-text">Онлайн игры</h5>
            </div>
            <div class="box">
                <img src="./assets/img/payements/shopping.png" class="box-image">
                <h5 class="small-text">Покупки</h5>
            </div>
            <div class="box">
                <img src="./assets/img/payements/mosque.png" class="box-image">
                <h5 class="small-text">Мечети</h5>
            </div>
            <div class="box">
                <img src="./assets/img/payements/church.png" class="box-image">
                <h5 class="small-text">Церкви</h5>
            </div>
            <div class="box">
                <img src="./assets/img/payements/remont.png" class="box-image">
                <h5 class="small-text">КСК/ОСИ</h5>
            </div>
            <div class="box">
                <img src="./assets/img/payements/business.png" class="box-image">
                <h5 class="small-text">Самозанятым и ИП</h5>
            </div>
        </div>
        
        <div id="myModal" class="modal">
            <div class="modal-box">
                <span class="close" onclick="document.getElementById('myModal').style.display='none'">&times;</span>
                <div id="caption">
                    Оплата мобильной связи
                    <div id="caption-guide">
                        <div class="inputBox">
                            <span>Номер телефона</span>
                            <input class="form-input" type="tel" required="required" value="+7">
                        </div>
                        <div class="inputBox">
                            <span>Сумма</span>
                            <input class="form-input" type="text" name="summ" placeholder="Сумма">
                        </div>
                        <button class="transfer-button" type="submit" name="submit">
                            Перевести
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div id="myModal" class="modal">
            <div class="modal-box">
                <span class="close" onclick="document.getElementById('myModal').style.display='none'">&times;</span>
                <div id="caption">
                    Городской телефон
                    <div id="caption-guide">
                        <div class="guide-info">
                            <a href="#">
                                <img src="https://cdn.homebank.kz/assets/logos/services/bazisTelecomByAcc.png" width="50" height="50">
                                <p>BTcom infocommunications, по счету</p>
                            </a>
                        </div>
                        <div class="guide-info">
                            <a href="#">
                                <img src="https://cdn.homebank.kz/assets/logos/services/bazisTelecomByAcc.png" width="50" height="50">
                                <p>BTcom infocommunications, по телефону</p>
                            </a>
                        </div>
                        <div class="guide-info">
                            <a href="#">
                                <img src="https://cdn.homebank.kz/assets/logos/services/smartnetZaTelefonInternetIKabelnoeTv.png" width="50" height="50">
                                <p>SMARTNET (за телефон, Интернет и кабельное ТВ)</p>
                            </a>
                        </div>
                        <div class="guide-info">
                            <a href="#">
                                <img src="https://cdn.homebank.kz/assets/logos/services/bazisTelecomByAcc.png" width="50" height="50">
                                <p>"Общество Красного Полумесяца Республики Казахстан"</p>
                            </a>
                        </div>
                        <div class="guide-info">
                            <a href="#">
                                <img src="https://cdn.homebank.kz/assets/logos/services/kazakhtelecom.png" width="50" height="50">
                                <p>Казахтелеком</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="myModal" class="modal">
            <div class="modal-box">
                <span class="close" onclick="document.getElementById('myModal').style.display='none'">&times;</span>
                <div id="caption">
                    Налоги, Штрафы
                    <div id="caption-guide">
                        <div class="guide-info">
                            <a href="#">
                                <p>«Оплата за изготовление документов»</p>
                            </a>
                        </div>
                        <div class="guide-info">
                            <a href="#">
                                <p>НАО Государственная корпорация "Правительство для граждан"</p>
                            </a>
                        </div>
                        <div class="guide-info">
                            <a href="#">
                                <img src="https://cdn.homebank.kz/assets/logos/services/unifiedTaxes.png" width="50" height="50">
                                <p>Оплата налоговой задолженности (транспорт, земля и имущество )</p>
                            </a>
                        </div>
                        <div class="guide-info">
                            <a href="#">
                                <img src="https://cdn.homebank.kz/assets/logos/services/unifiedTaxes.png" width="50" height="50">
                                <p>Оплата предстоящих налогов (транспорт, земля и имущество)</p>
                            </a>
                        </div>
                        <div class="guide-info">
                            <a href="#">
                                <img src="https://cdn.homebank.kz/assets/logos/services/unifiedTaxes.png" width="50" height="50">
                                <p>Оплата Налогов по реквизитам</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="./assets/js/box.js"></script>

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