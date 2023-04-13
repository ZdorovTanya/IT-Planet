<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форум</title>



    <link rel="stylesheet" href="/css/menu.css">
    <link rel="stylesheet" href="">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@100;200;300;400&display=swap" rel="stylesheet">
</head>
<body>
    <div class="wrapper">

        <?
            include("app/views/menu.php");
        ?> 

        <!-- карточка форума -->
        <div class="card">
            <div class="card__wrapper">
                <img src="/images/forumImageEatSalat.svg" alt="девушка ест салат" class="title-picture">
                <div class="title-filter">Анорексия</div>
                <div class="main-title-block">
                    <div class="main-title"><?= $model->getTitle(1)?></div>
                    <img src="/images/arrowUpRight.svg" alt="разворачивание статьи">
                </div>
                <div class="card-text">
                    <?= $model->getText(1)?>
                    <!-- Тут отобржен текст статьи, который Вы сможете развернуть и прочитать ее целиком, но серенький потому что его как бы хуже видно. -->
                </div>
                <div class="avatar-info">
                    <img src="/images/Avatar (1).svg" alt="" class="foro">
                    <div class="name-date-box">
                        <div class="author"><?= $model->getAuthor(1)?></div>
                        <div class="publication-date"><?= $model->getDate(1)?></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>
</html>