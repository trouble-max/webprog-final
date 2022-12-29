<?php
session_start();
include("../backend/other_sending_process.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="https://cdn.homebank.kz/favicon-32x32.png">
    <link rel="stylesheet" href="./assets/style/market.css">
    <link rel="stylesheet" href="./assets/style/cart.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Halyk Market</title>
</head>

<body>
    <div class="wrapper">
        <header>
            <div id="header-wrapper">
                <div class="header-left">
                    <a href="./market.php">
                        <img id="header-logo" src="https://halykmarket.kz/_nuxt/30f70ea43b8383d02d9fade5c7f222d7.svg" alt="Halyk Market Logo">
                    </a>
                </div>
                <?php
                if (isset($_SESSION["login"])) {
                ?>
                    <div class="header-far-right">
                        <a class="header-logout" href="../backend/logout_process.php">Выйти</a>
                    </div>
                <?php
                } else {
                    echo "<div class='header-far-right'></div>";
                }
                ?>
            </div>
        </header>

        <div class="page-wrapper">
                <h1>За перевод на данную карту снимается комиссия в размере 5%</h1>
                <h2>Общая сумма перевода (с учетом комиссии) равна <?php echo $new_sum ?> ₸</h2>
                <h2>Продолжить операцию?</h2>
                <div class="pay">
                    <a class="header-logout bad" href="./main.php">Отменить</a>
                    <a class="header-logout good" href=<?php echo "./sending_money.php?ok=ok,".$new_sum.",".$split[1] ?>>Продолжить</a>
                </div>
        </div>

        <footer>
            <div id="footer-wrapper">
                <div class="footer-content footer-left">
                    <a href="./index.php">
                        <img id="header-logo" src="https://cdn.homebank.kz/assets/icons/others/logotype.svg" alt="Halyk Market Logo">
                    </a>
                </div>
                <div class="footer-content footer-center">
                </div>
                <div class="footer-content footer-right">
                </div>
            </div>
        </footer>

    </div>
</body>

</html>