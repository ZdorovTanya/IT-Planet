<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форум</title>


    <link rel="stylesheet" href="/css/menu.css">
    <link rel="stylesheet" href="/css/forum.css">


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
                <input type="checkbox" name="anorexia" id="anorexia" value="anorexia">
                <label for="anorexia">Анорексия</label>
                <input type="checkbox" name="bulimia" id="bulimia" value="bulimia">
                <label for="bulimia">Булимия</label>
                <input type="checkbox" name="orthorexia" id="orthorexia" value="orthorexia">
                <label for="orthorexia">Орторексия</label>
                <input type="checkbox" name="overeating" id="overeating" value="overeating">
                <label for="overeating">Компульсивное переедание</label>
                <input type="checkbox" name="other" id="other" value="other" <?= isset($_POST["other"]) ? "checked" : ""?> >
                <label for="other">Другое</label>
                <button type="submit">Фильтровать</button>
            </form>
        </div>

        <section class="forum-articles">
            <div class="container">
                <div class="forum-articles__body">

                    <!-- карточка форума -->
                    <?
                    // $model->findArticleById(1);
                    // $model->findArticleById(2);
                    // $count = count($model->getAll())+1;

                        foreach ($model->findAll($_POST) as $article){
                        // for($i=1; $i<$count; $i++){
                            ?>
                                <article class="card">
                                    <div class="card__wrapper _ortorecsia">
                                        <img src="/images/forumImageEatSalat.svg" alt="девушка ест салат" class="title-picture">
                                        <div class="title-filter"><?= $article->subject?></div>
                                        <div class="main-title"><?= $article->title?></div>
                                        <div class="card-text">
                                            <?= $article->text?>
                                            <!-- Тут отобржен текст статьи, который Вы сможете развернуть и прочитать ее целиком, но серенький потому что его как бы хуже видно. -->
                                        </div>
                                        <div class="avatar-info">
                                            <img src="/images/Avatar (1).svg" alt="" class="foro">
                                            <div class="name-date-box">
                                                <div class="author"><?= $article->author?></div>
                                                <div class="publication-date"><?= $article->date?></div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            <?
                        }
                    ?>

                    <!-- <article class="card">
                        <div class="card__wrapper _ortorecsia">
                            <img src="/images/forumImageEatSalat.svg" alt="девушка ест салат" class="title-picture">
                            <div class="title-filter"> //$model->getSubject(1)?></div>
                            <div class="main-title"><//$model->getTitle(1)?></div>
                            <div class="card-text">
                                 //$model->getText(1)?>
                                Тут отобржен текст статьи, который Вы сможете развернуть и прочитать ее целиком, но серенький потому что его как бы хуже видно.
                            </div>
                            <div class="avatar-info">
                                <img src="/images/Avatar (1).svg" alt="" class="foro">
                                <div class="name-date-box">
                                    <div class="author">// $model->getAuthor(1)?></div>
                                    <div class="publication-date">$model->getDate(1)?></div>
                                </div>
                            </div>
                        </div>
                    </article> -->

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
                                    <div class="author"><?= $model->getAuthor(1)?></div>
                                    <div class="publication-date"><?= $model->getDate(1)?></div>
                                </div>
                            </div>
                        </div>
                    </article> -->

                    <!-- карточка форума -->
                    <!-- <article class="card">
                        <div class="card__wrapper _boolimia">
                            <img src="/images/forumImageEatSalat.svg" alt="девушка ест салат" class="title-picture">
                            <div class="title-filter">Булимия</div>
                            <div class="main-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, nemo!</div>
                            <div class="card-text">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi distinctio placeat rerum. Adipisci recusandae et mollitia minima, repudiandae esse cumque totam id iste rerum sequi, ullam sunt, magnam labore commodi.
                            </div>
                            <div class="avatar-info">
                                <img src="/images/Avatar (1).svg" alt="" class="foro">
                                <div class="name-date-box">
                                    <div class="author"><?= $model->getAuthor(1)?></div>
                                    <div class="publication-date"><?= $model->getDate(1)?></div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="card">
                        <div class="card__wrapper _compulsia">
                            <img src="/images/forumImageEatSalat.svg" alt="девушка ест салат" class="title-picture">
                            <div class="title-filter">Компульсивные переедания</div>
                            <div class="main-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, nemo!</div>
                            <div class="card-text">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi distinctio placeat rerum. Adipisci recusandae et mollitia minima, repudiandae esse cumque totam id iste rerum sequi, ullam sunt, magnam labore commodi.
                            </div>
                            <div class="avatar-info">
                                <img src="/images/Avatar (1).svg" alt="" class="foro">
                                <div class="name-date-box">
                                    <div class="author"><?= $model->getAuthor(1)?></div>
                                    <div class="publication-date"><?= $model->getDate(1)?></div>
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