<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форум</title>

    <link rel="stylesheet" href="/css/forum.css">

    <link rel="icon" href="/images/favicon.svg" type="image/svg+xml">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>
<body>
    <div class="wrapper">

        <? include("app/views/menu.php"); ?>

        <div class="filters">
            <div class="_container">
                <form class="filters__form" action="/forum/" method="post">
                    <label class="lang" key="anorexia" for="anorexia">
                        Анорексия
                        <input id="anorexia" type="checkbox" name="anorexia" value="1" <?= isset($_POST["anorexia"]) ? "checked" : ""?> >
                    </label>

                    <label class="lang" key="bulimia" for="bulimia">
                        Булимия
                        <input id="bulimia" type="checkbox" name="bulimia" value="2" <?= isset($_POST["bulimia"]) ? "checked" : ""?> >
                    </label>

                    <label class="lang" key="orthorexia" for="orthorexia">
                        Орторексия
                        <input id="orthorexia" type="checkbox" name="orthorexia" value="3" <?= isset($_POST["orthorexia"]) ? "checked" : ""?> >
                    </label>

                    <label class="lang" key="overeating" for="overeating">
                        Компульсивное переедание
                        <input id="overeating" type="checkbox" name="overeating" value="4" <?= isset($_POST["overeating"]) ? "checked" : ""?> >
                    </label>

                    <label class="lang" key="other" for="other">
                        Другое
                        <input id="other" type="checkbox" name="other" value="5" <?= isset($_POST["other"]) ? "checked" : ""?> >
                    </label>
                    
                    <button class="lang" key="filtering" type="submit">Фильтровать</button>
                </form>
                
                <?= isset($_SESSION["accId"]) ? '<a class="write-article" href="/forum/writeSubject">Написать статью</a>' : ''?>
            </div>
        </div>

        <section class="forum-articles">
            <div class="_container">
                <div class="forum-articles__body">

                    <!-- карточка форума -->
                    <?
                        foreach ($model->findAll($_POST) as $article){
                            ?>
                                <article class="card">
                                    <div class="card__wrapper _ortorecsia">
                                        <img src="/images/forumImageEatSalat.svg" alt="девушка ест салат" class="title-picture">
                                        <div class="title-filter"><?= $article->getStringSubjects() ?></div>
                                        <div class="main-title"><?= $article->getTitle()?></div>
                                        <div class="card-text">
                                            <?= $article->getText()?>
                                        </div>
                                        <div class="avatar-info">
                                            <img src="/images/Avatar (1).svg" alt="" class="foro">
                                            <div class="name-date-box">
                                                <div class="author"><a href=<?= (!is_null($article->getAuthorId())) ? "/account/".$article->getAuthorId() : "/main/" ?> > <?= $article->getAuthor()?></a></div>
                                                <div class="publication-date"><?= $article->getDate()?></div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            <?
                        }
                    ?>

                </div>
            </div>
        </section>
    </div>

<script src="/js/MenuTranslate.js"></script>
</body>
</html>
