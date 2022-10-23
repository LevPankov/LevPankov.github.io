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
    <link rel="stylesheet" href="/css/matches.css">
</head>
<body>
<?php include('./templates/header.php') ?>

<main class="page-main">
    <div class="container">
        <div class="main-container">
            <section class="section">
                <h2 class="section__title">Матчи</h2>
                <?php for ($j = 0; $j < 4; $j++): ?>
                    <h3 class="section__title matches-title">Тур 6</h3>
                    <div class="matches-grid">
                        <?php for ($i = 0; $i < 8; $i++): ?>
                            <a href="/match.php" class="matches-grid__item">
                                <div class="matches-grid__item-wrap">
                                    <div class="matches-grid__match">
                                        <div class="matches-grid__command">
                                            <div class="matches-grid__logo">
                                                <img src="img/zenit.svg" alt="">
                                            </div>
                                            <div class="matches-grid__name">Зенит</div>
                                        </div>
                                        <div class="matches-grid__score">1:2</div>
                                        <div class="matches-grid__command">
                                            <div class="matches-grid__name">Ростов</div>
                                            <div class="matches-grid__logo">
                                                <img src="img/rostov.svg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="matches-grid__separator"></div>
                                    <div class="matches-grid__datetime">
                                        <div class="matches-grid__date">22:00</div>
                                        <div class="matches-grid__time">3&nbsp;сентября</div>
                                    </div>
                                </div>
                            </a>
                        <?php endfor; ?>
                    </div>
                <?php endfor; ?>
            </section>
        </div>
    </div>
</main>

<?php include './templates/footer.php' ?>

<script type="application/javascript" src="js/app.js"></script>
</body>
</html>