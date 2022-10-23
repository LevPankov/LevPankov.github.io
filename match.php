<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="description" content="Все новости о Российском футболе">
    <title>Ростов - Спартак 12 октября - Футбол России</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/match.css">
</head>
<body>
<?php include('./templates/header.php') ?>

<main class="page-main">
    <div class="container">
        <div class="main-container">
            <section class="section">
                <h2 class="section__title">Ростов - Спартак (Российская премьер-лига 2022, тур 9)</h2>
                <div class="match">
                    <div class="match__display">
                        <div class="match__command">
                            <img src="img/rostov.svg" class="match__logo" width="150" height="150" alt=""/>
                            <div class="match__command-name">Ростов</div>
                            <div class="match__command-city">Ростов-на-Дону</div>
                        </div>
                        <div class="match__info">
                            <div class="match__datetime">11.09.2022 19:45 «Ростов Арена»</div>
                            <div class="match__score">2:1</div>
                            <div class="match__location">Ростов-на-Дону<br>(10797 зрителей)</div>
                        </div>
                        <div class="match__command">
                            <img src="img/spartak.svg" class="match__logo" width="150" height="150" alt=""/>
                            <div class="match__command-name">Спартак</div>
                            <div class="match__command-city">Москва</div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section">
                <h2 class="section__title">Матч-центр</h2>
                <div class="match-info">
                    <div class="match-info__header">
                        <button class="match-info__btn match-info__btn--active" data-id="chronology">Хронология</button>
                        <button class="match-info__btn" data-id="statistics">Статистика</button>
                        <button class="match-info__btn" data-id="squad">Составы</button>
                    </div>
                    <div class="match-info__body">
                        <div id="chronology" class="math-info__tab">
                            <p>London is the capital of England.</p>
                        </div>

                        <div id="statistics" class="math-info__tab" style="display:none">
                            <p>Paris is the capital of France.</p>
                        </div>

                        <div id="squad" class="math-info__tab" style="display:none">
                            <p>Tokyo is the capital of Japan.</p>
                        </div>
                    </div>
                </div
            </section>
            <section class="section">
                <h2 class="section__title">Обзор матча</h2>
                <div class="match-video">
                    <video class="match-video__player" src="video/rostov-spartak.mp4" controls></video>
                </div>
            </section>
            <section class="section">
                <h2 class="section__title">Галерея матча</h2>
                <div class="match-gallery">
                    <button class="match-gallery__item" id="1">
                        <img src="img/matches/1.jpg" alt="">
                        <span>Фотогрфия 1 (Нажмите, чтобы раскрыть)</span>
                    </button>
                    <button class="match-gallery__item" id="2">
                        <img src="img/matches/2.jpg" alt="">
                        <span>Фотогрфия 2 (Нажмите, чтобы раскрыть)</span>
                    </button>
                    <button class="match-gallery__item" id="3">
                        <img src="img/matches/3.jpg" alt="">
                        <span>Фотогрфия 3 (Нажмите, чтобы раскрыть)</span>
                    </
                    >
                    <button class="match-gallery__item" id="4">
                        <img src="img/matches/4.jpg" alt="">
                        <span>Фотогрфия 4 (Нажмите, чтобы раскрыть)</span>
                    </button>
                    <button class="match-gallery__item" id="5">
                        <img src="img/matches/5.jpg" alt="">
                        <span>Фотогрфия 5 (Нажмите, чтобы раскрыть)</span>
                    </button>
                </div>
            </section>
        </div>
    </div>
</main>

<?php include './templates/footer.php' ?>

<div class="match-modal">
    <div class="match-modal__content">
        <button class="match-modal__prev"></button>
        <div class="match-modal__image">
            <img src="" alt="">
        </div>
        <button class="match-modal__next"></button>
    </div>
    <button class="match-modal__close"></button>
</div>

<script type="application/javascript" src="js/app.js"></script>
<script type="application/javascript" src="js/gallery.js"></script>
<script type="application/javascript" src="js/match.js"></script>
</body>
</html>