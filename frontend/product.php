<?php
session_start();

if (!isset($_REQUEST["pr"])) {
    header("location: market.php");
}
if (!isset($_SESSION["login"])) {
    header("location: login.php?page=product" . $_REQUEST["pr"]);
}

$product = $_REQUEST["pr"];
include("../backend/product_process.php");
include("../backend/review_process.php");

// echo json_encode($reviews);

if (isset($_SESSION['cart'])) {
    // echo json_encode($_SESSION['cart']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="https://cdn.homebank.kz/favicon-32x32.png">
    <link rel="stylesheet" href="./assets/style/market.css">
    <link rel="stylesheet" href="./assets/style/product.css">
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
                <div class="header-center">
                    <input class="header-search" type="text" placeholder="Поиск...">
                </div>
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
            <div class="product-content-wrapper">

                <div class="image">
                    <img src=<?php echo "./assets/img/" . $result->img ?> alt="">
                </div>
                <div class="details">
                    <h1 class="details-name"><?php echo $result->name ?></h1>
                    <h4 class="details-tsena">Цена</h4>
                    <h2 class="details-price"><?php echo $result->price ?> ₸</h2>

                    <a class="details-button header-logout" href=<?php echo "../backend/add_process.php?pr=" . $result->id ?>>Добавить в корзину</a>

                    <div class="details-score-wrapper">
                        <?php
                        if (sizeof($reviews) == 0) {
                        ?>
                            <h1 class="details-score">0</h1>
                            <h3 class="details-no-score">Нет оценок</h3>
                        <?php
                        } else {
                        ?>
                            <h1 class="details-score"><?php echo $avg_score[0] ?></h1>
                            <h3 class="details-no-score"><?php echo sizeof($reviews) ?> оценок</h3>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>

            <div class="product-content-wrapper review-wrapper">

                <div class="review">
                    <h1 class="details-name">Отзывы</h1>

                    <?php
                    if (sizeof($reviews) == 0) {
                    ?>
                        <h3 class="details-price">Нет отзывов</h3>
                        <?php
                    } else {
                        foreach ($reviews as $row) {
                        ?>
                            <h4 class="details-tsena"><span><?php echo $row["author"] ?></span> <?php echo $row["stars"] ?> из 5</h4>
                            <h3 class="details-price"><?php echo $row["review_body"] ?></h3>
                    <?php
                        }
                    }
                    ?>

                    <form action=<?php echo "../backend/new_review_process.php?pr=" . $product ?> method="post">
                        <h4 class="details-tsena" id="review-body"><span>Напишите отзыв</span> 500 символов</h4>
                        <textarea name="body" id="body" rows="6" wrap="soft" maxlength="500" required></textarea>
                        <h4 class="details-tsena" id="review-star"><span>Поставьте оценку</span></h4>
                        <div class="rating">
                            <input type="radio" name="rating" value="5" id="5" required><label for="5">☆</label>
                            <input type="radio" name="rating" value="4" id="4" required><label for="4">☆</label>
                            <input type="radio" name="rating" value="3" id="3" required><label for="3">☆</label>
                            <input type="radio" name="rating" value="2" id="2" required><label for="2">☆</label>
                            <input type="radio" name="rating" value="1" id="1" required><label for="1">☆</label>
                        </div>
                        <button class="form-button header-logout" name="submit" type="submit">Отправить</button>
                    </form>

                </div>

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