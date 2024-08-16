<?php
require_once 'product.php/'

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Мой Интернет Магазин</title>
    <link rel="stylesheet" href="../My_shop/assets/styles.css">
</head>
<body>
<!-- Шапка сайта -->
<header>
    <div class="logo">
        <h1>Мой Магазин</h1>
    </div>
    <nav>
        <ul>
            <li><a href="#">Главная</a></li>
            <li><a href="#">Каталог</a></li>
            <li><a href="#">Контакты</a></li>
        </ul>
    </nav>
    <div class="cart">
        <a href="#">Корзина (0)</a>
    </div>
</header>
<main>
    <section class="products">
        <h2>Наши товары</h2>
        <div class="product-list">
            <div class="product-item">
                <p class="ern">Apple MacBook Pro 14-inch (M2 Max) review: faster but hotter | Digital Trends</p>
                <img src="../My_shop/pages/images.jpeg">
                <p>Цена: </p>
                <button>Добавить в корзину</button>
            </div>
            <a href="/product">
            <div class="product-item">
                <p class="ern">Описание товара 2</p>
                <p>Цена: 200 руб.</p>
                <button>Добавить в корзину</button>
            </div>
            </a>
            <div class="product-item">
                <p class="ern">Описание товара 2</p>
                <p>Цена: 200 руб.</p>
                <button>Добавить в корзину</button>
            </div>
            <div class="product-item">
                <h3 class="ern">Товар 3</h3>
                <p >Описание товара 3</p>
                <p>Цена: 300 руб.</p>
                <button>Добавить в корзину</button>
            </div>

        </div>
    </section>
</main>

</body>
</html>

