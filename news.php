<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="description" content="Все новости о Российском футболе">
    <title>Новости - Футбол России</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/news.css">
</head>
<body>
<?php include('./templates/header.php') ?>

<main class="page-main">
    <div class="container">
        <div class="main-container">
            <section class="section">
                <h2 class="section__title">Новости</h2>
                <div class="news-filter">
                    <div class="news-filter__tr">
                        <label for="tournament">Туринир:
                            <select class="news-filter__select" name="tournament" id="tournament">
                                <option value="0">Все</option>
                                <option value="1">Премьер-лига</option>
                                <option value="2">Кубок России</option>
                                <option value="3">Товарищеский матч</option>
                            </select>
                        </label>
                    </div>
                </div>
                <div class="news-grid">
                    <?php for ($i = 0; $i < 5; $i++): ?>
                        <a href="news-item.php" class="news-grid__item">
                            <div class="news-grid__image">
                                <img src="img/news-image-1.jpg" alt="">
                            </div>
                            <div class="news-grid__right">
                                <h3 class="news-grid__title">
                                    Спартак» и «Зенит» выдают момент за моментом! Суперматч в Кубке России.
                                </h3>
                                <div class="news-grid__tags">
                                    <div class="news-grid__tag">Кубок России</div>
                                </div>
                                <div class="news-grid__date">12.10.2022</div>
                            </div>
                        </a>
                    <?php endfor; ?>
                </div>
                <div class="pagination">
                    <a href="/news.php" class="pagination__item pagination__item--active">1</a>
                    <a href="/news.php" class="pagination__item">2</a>
                    <a href="/news.php" class="pagination__item">3</a>
                    <a href="/news.php" class="pagination__item pagination__item--empty">...</a>
                    <a href="/news.php" class="pagination__item">8</a>
                </div>
            </section>
        </div>
    </div>
</main>

<?php include './templates/footer.php' ?>

<script type="application/javascript" src="js/app.js"></script>
</body>
</html>