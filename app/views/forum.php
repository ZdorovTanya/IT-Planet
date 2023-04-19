<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форум</title>


    <link rel="stylesheet" href="/css/menu.css">
    <link rel="stylesheet" href="/css/forum.css">

    <link rel="icon" href="/images/favicon.svg" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@100;200;300;400&display=swap" rel="stylesheet">
</head>
<body>
    <div class="wrapper">

        <?
            include("app/views/menu.php");
        ?>

        <div class="filters">
            <form action="/forum/" method="post">

                <input type="checkbox" name="anorexia" id="anorexia" value="1" <?= isset($_POST["anorexia"]) ? "checked" : ""?> >
                <label for="anorexia">Анорексия</label>

                <input type="checkbox" name="bulimia" id="bulimia" value="2" <?= isset($_POST["bulimia"]) ? "checked" : ""?> >
                <label for="bulimia">Булимия</label>

                <input type="checkbox" name="orthorexia" id="orthorexia" value="3" <?= isset($_POST["orthorexia"]) ? "checked" : ""?> >
                <label for="orthorexia">Орторексия</label>

                <input type="checkbox" name="overeating" id="overeating" value="4" <?= isset($_POST["overeating"]) ? "checked" : ""?> >
                <label for="overeating">Компульсивное переедание</label>

                <input type="checkbox" name="other" id="other" value="5" <?= isset($_POST["other"]) ? "checked" : ""?> >
                <label for="other">Другое</label>

                <button type="submit">Фильтровать</button>
            </form>

            <?= isset($_SESSION["accId"]) ? '<a href="/forum/writeSubject">Написать статью</a>' : ''?>
        </div>

        <section class="forum-articles">
            <div class="container">
                <div class="forum-articles__body">

                    <!-- карточка форума -->
                    <?
                    // $model->findArticleById(1);
                    // $model->findArticleById(2);
                    // $count = count($model->getAll())+1;
                        // for($i=1; $i<$count; $i++){

                        foreach ($model->findAll($_POST) as $article){
                            ?>
                                <article class="card">
                                    <div class="card__wrapper _ortorecsia">
                                        <img src="/images/forumImageEatSalat.svg" alt="девушка ест салат" class="title-picture">
                                        <div class="title-filter"><?= $article->getStringSubjects()?></div>
                                        <div class="main-title"><?= $article->getTitle()?></div>
                                        <div class="card-text">
                                            <?= $article->getText()?>
                                        </div>
                                        <div class="avatar-info">
                                            <img src="/images/Avatar (1).svg" alt="" class="foro">
                                            <div class="name-date-box">
                                                <div class="author"><a href=<?="/account/".$article->getAuthorId()?>><?= $article->getAuthor()?></a></div>
                                                <div class="publication-date"><?= $article->getDate()?></div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            <?
                        }
                    ?>

                   

                    <!-- карточка форума -->
                    <!-- <article class="card">
                        <div class="card__wrapper _anorecsia">
                            <img src="/images/forumImageEatSalat.svg" alt="девушка ест салат" class="title-picture">
                            <div class="title-filter">Анорексия</div>
                            <div class="main-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, nemo!</div>
                            <div class="card-text">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi distinctio placeat rerum. Adipisci recusandae et mollitia minima, repudiandae esse cumque totam id iste rerum sequi, ullam sunt, magnam labore commodi.
                            </div>
                            <div class="avatar-info">
                                <img src="/images/Avatar (1).svg" alt="" class="foro">
                                <div class="name-date-box">
                                    <div class="author">Loren</div>
                                    <div class="publication-date">2022-10-10</div>
                                </div>
                            </div>
                        </div>
                    </article> -->

                </div>
            </div>
        </section>
    </div>
</body>
</html>