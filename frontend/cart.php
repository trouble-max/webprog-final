<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("location: login.php");
}

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

include("../backend/cart_process.php");

// echo json_encode($_SESSION['cart']);
// echo json_encode($result);
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
                <form action="../backend/search_process.php" method="post" class="header-center">
                    <input class="header-search" name="name" type="text" placeholder="Поиск...">
                </form>
                <div class="header-right">
                    <a class="header-logout" href="./cart.php">Корзина</a>
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

            <?php
            if (sizeof($_SESSION["cart"]) == 0) {
            ?>
                <h1>В корзине пусто...</h1>
                <button onclick="location.href = './market.php';" class="back header-logout">Вернуться</button>
                <?php
            } else {
                foreach ($result as $product) {
                    $temp_sum = $product->price * $_SESSION['cart'][$product->id]["count"];
                    $sum += $temp_sum;
                ?>
                    <div class="product-content-wrapper">
                        <div class="product-img">
                            <img src=<?php echo "./assets/img/" . $product->img ?> alt="">
                        </div>
                        <div class="product-details">
                            <h1 class="details-name"><?php echo $product->name ?></h1>
                            <h4 class="details-tsena">Цена</h4>
                            <h2 class="details-price">
                                <?php echo $_SESSION['cart'][$product->id]["count"] . " x " . $product->price . " ₸ = " . $temp_sum . " ₸" ?>
                            </h2>
                        </div>
                        <div class="product-change">
                            <a class="up button" href=<?php echo "../backend/add_process.php?pr=" . $product->id ?>>
                                <img src="./assets/img/arrow_up.png" alt="">
                            </a>
                            <a class="down button" href=<?php echo "../backend/remove_process.php?pr=" . $product->id ?>>
                                <img src="./assets/img/arrow_down.png" alt="">
                            </a>
                        </div>
                    </div>
                <?php
                }
                ?>
                <div class="sum">
                    <h2>
                        Общая сумма: <?php echo $sum ?> ₸
                    </h2>
                </div>
                <div class="pay">
                    <a class="header-logout bad" href="../backend/empty_cart_process.php">Очистить</a>
                    <a class="header-logout good" href="./cart.php">Оплатить</a>
                </div>
            <?php
            }
            ?>


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