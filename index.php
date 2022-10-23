<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="description" content="Все новости о Российском футболе">
    <title>Футбол России</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/slider.css">
    <link rel="stylesheet" href="/css/home.css">
</head>
<body>
<?php include('./templates/header.php') ?>

<main class="page-main">
    <div class="container">
        <div class="main-container home-page">
            <section class="slider-news section">
                <div class="slider">
                    <div class="slider__wrap">

                        <div class="slider__item">
                            <div class="slider__image">
                                <img src="./img/slider-image-1.jpg" alt="Фестиваль &quot;Футбол в школе&quot;">
                            </div>
                            <div class="slider__title">Фестиваль «Футбол в школе» стартовал в России</div>
                        </div>

                        <div class="slider__item">
                            <div class="slider__image">
                                <img src="./img/slider-image-2.jpeg" alt="Фестиваль &quot;Футбол в школе&quot;">
                            </div>
                            <div class="slider__title">Фестиваль «Футбол в школе» стартовал в России 2</div>
                        </div>

                        <div class="slider__item">
                            <div class="slider__image">
                                <img src="./img/slider-image-1.jpg" alt="Фестиваль &quot;Футбол в школе&quot;">
                            </div>
                            <div class="slider__title">Фестиваль «Футбол в школе» стартовал в России 3</div>
                        </div>

                    </div>
                    <button class="slider__prev"></button>
                    <button class="slider__next"></button>
                </div>
            </section>
            <section class="section">
                <h2 class="section__title">Новости</h2>
                <div class="news-grid">
                    <?php for ($i = 0; $i < 5; $i++): ?>
                        <a href="#" class="news-grid__item">
                            <div class="news-grid__image">
                                <img src="img/news-image-1.jpg" alt="">
                            </div>
                            <h3 class="news-grid__title">
                                Спартак» и «Зенит» выдают момент за моментом! Суперматч в Кубке России.
                            </h3>
                        </a>
                    <?php endfor; ?>
                </div>
            </section>
            <section class="section">
                <h2 class="section__title">Ближайшие матчи</h2>
                <div class="matches-grid">
                    <?php for ($i = 0; $i < 6; $i++): ?>
                        <div class="matches-grid__item">
                            <div class="matches-grid__item-wrap">
                                <div class="matches-grid__match">
                                    <div class="matches-grid__command">
                                        <div class="matches-grid__logo">
                                            <img src="img/zenit.svg" alt="">
                                        </div>
                                        <div class="matches-grid__name">Зенит</div>
                                    </div>
                                    <div class="matches-grid__datetime">
                                        <div class="matches-grid__date">22:00</div>
                                        <div class="matches-grid__time">3&nbsp;сентября</div>
                                    </div>
                                    <div class="matches-grid__command">
                                        <div class="matches-grid__name">Ростов</div>
                                        <div class="matches-grid__logo">
                                            <img src="img/rostov.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="matches-grid__separator"></div>
                                <div class="matches-grid__tournament">
                                    <img src="img/rpl.svg" alt="">
                                </div>
                            </div>
                        </div>
                    <?php endfor; ?>
                </div>
            </section>
            <section class="section">
                <h2 class="section__title">Обзоры последних матчей</h2>
                <div class="matches">
                    <?php for ($i = 0; $i < 4; $i++): ?>
                        <a href="" class="matches__item">
                            <img class="matches__preview" src="img/rostov-krasnodar.jpg" alt="">
                            <div class="matches__title">Ростов 3:2 Краснодар</div>
                        </a>
                    <?php endfor; ?>
                </div>
            </section>
        </div>
    </div>
</main>

<?php include './templates/footer.php' ?>

<script type="application/javascript" src="js/app.js"></script>
<script type="application/javascript" src="js/slider.js"></script>
</body>
</html>