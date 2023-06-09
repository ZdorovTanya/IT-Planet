<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Аккаунт</title> 

    <link rel="stylesheet" href="/css/account.css">
    <link rel="stylesheet" href="/css/popupChangeAccount.css">

    <link rel="icon" href="/images/favicon.svg" type="image/svg+xml">
</head>
<body>
    <div class="wrapper"> 

        <? include("app/views/menu.php"); ?>
        
        <main>
            
            <!--  -->
            <div class="about-yourself">
                <div class="_container">
                    <div class="about-yourself__body">

                        <div class="about-yourself__my-information">

                            <div class="about-yourself__user-image">
                                <img src="/images/avatar.svg" alt="фото пользователя">
                            </div>

                            <div class="about-yourself__info">
                                <div class="_title"><?= $model->getName() ?></div>
                                <div class="_info-text">Дата рождения: <span><?= $model->getBirth() ?></span></div>
                                <div class="_info-text">Проблема: <span><?= $model->getProblem() ?></span></div>
                                <div class="_info-text"><img src="/images/lockForPopup.svg" alt="скрыто замком">Рост: <span><?= $model->getHeight() ?></span></div>
                                <div class="_info-text"><img src="/images/lockForPopup.svg" alt="скрыто замком">Вес: <span><?= $model->getWeight() ?></span></div>
                            </div>

                            <div class="about-yourself__acc-actions">
                                <?
                                if (isset($_SESSION["accId"])){
                                    if ($model->getId() == $_SESSION["accId"]){?>
                                    <!-- свой акк. вывод кнопки редактирования  -->
                                        <a href="#popupChangeAccount">Редактировать</a>
                                        <a href="/account/logout">Выйти</a>
                                    <?}
                                    else{
                                        if ($model->checkSubscribe($model->getId())){?>
                                            <!-- отписаться -->
                                                <form action="setSubscribe" method="POST">
                                                    <input ot type="hidden" name="subs" value="<?= $model->getId() ?>">
                                                    <button><img src="/images/btnUnsubscribe.svg" alt=""></button>
                                                </form>
                                        <?} else{?>
                                            <!-- подписаться -->
                                            <form action="setSubscribe" method="POST">
                                                <input pod type="hidden" name="subs" value="<?= $model->getId() ?>">
                                                <button><img src="/images/btnSubscribe.svg" alt=""></button>
                                            </form>
                                        <?}
                                    }
                                }
                                ?>
                            </div>

                        </div>

                        <div class="about-yourself__my-biograpy">
                            <div class="about-me">О себе:</div>
                                        
                            <div class="my-history">
                                <?= $model->getAbout() ?? ""?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--  -->
            <div class="my-self-health">
                <div class="_container">
                    <canvas id="myChart" class="__body"></canvas>
                </div>
            </div>
            <!--  -->
            <div class="subscriptions">
                <div class="_container">
                    <div class="subscriptions__body">

                        <div class="title-box">
                            <div class="subscriptions-title _title">Подписки</div>
                        </div>

                        <div class="subscriptions-box">
                        <?
                            $mySubs = $model->getSubscribes($model->getId());
                            if (count($mySubs) > 4) $mySubs = array_slice($mySubs, 0, 4);

                            foreach($mySubs as $subs){
                            ?>
                                <div class="subscriptions-item">
                                    <img src="/images/subscribeImg.svg" alt="фото подписок">
                                    <div class="subscriptions-name"><a href=<?="/account/".$subs?>><?= Account::findNameById($subs) ?></a></div>
                                </div>
                            <?}?>
                        </div>

                        <div class="subscribe-btn-box">
                            <div class="subscribe-btn"><img src="/images/allSubscribe.svg" alt=""></div>
                        </div>

                    </div>
                </div>
            </div> 
            <!--  -->
            <div class="article">
                <div class="_container">
                    <div class="article__body">
                    
                    <div class="title-box">
                        <div class="article-title _title">Мои статьи</div>
                    </div>
                    
                    <?
                        if (!empty($model->articles)){
                        ?>

                        <div class="article-box">
                            <?
                            foreach(array_slice($model->articles, 0, 3) as $articles){
                                if (is_null($articles)) break;
                                ?>

                                <div class="article-item">
                                    <div class="article-row-1">
                                        <div class="article-name"><?= $articles->getTitle()?></div>
                                        <div class="article-hashtag">
                                            <?
                                                $subjs = $articles->getArraySubjects();
                                                foreach($subjs as $article){
                                                ?>
                                                <div class="hashtag-item">
                                                    <div class="hashtag-name"><?=$article?></div>
                                                </div>
                                            <? } ?>
                                        </div>
                                    </div>
                                    <div class="article-row-2">
                                        <div class="article-content">
                                            <?= mb_substr($articles->getText(), 0, 150)."..."?>
                                        </div>
                                    </div>
                                </div>
                            <?}?>

                        </div>

                        <div class="article-btn-box">
                            <div class="article-btn"><img src="/images/showAllArticle.svg" alt="показать все статьи"></div>
                        </div>

                    <?}?>

                    </div> 
                </div>
            </div>
            <!--  -->
            <div class="test-result">
                <div class="_container">
                    <div class="test-result__body">

                        <div class="_title">Результаты тестов</div>

                        <div class="test-result-box">
                            <div class="columns_column">
                                <div class="test-result-item">
                                    <img src="/images/testAvatar.svg" alt="аватар для теста">
                                    <div class="text-row">
                                        <div class="test-title">Тест на самооценку</div>
                                        <div class="test-date">Пройден 09.04.2023</div>
                                    </div>
                                </div>
                            </div>

                            <div class="columns_column">
                                <div class="test-result-item">
                                    <img src="/images/testAvatar.svg" alt="аватар для теста">
                                    <div class="text-row">
                                        <div class="test-title">Тест на депрессию</div>
                                        <div class="test-date">Пройден 08.03.2023</div>
                                    </div>
                                </div>
                            </div>

                            <div class="columns_column">
                                <div class="test-result-item">
                                    <img src="/images/testAvatar.svg" alt="аватар для теста">
                                    <div class="text-row">
                                        <div class="test-title">Тест на склонность к суициду</div>
                                        <div class="test-date">Пройден 01.02.2023</div>
                                    </div>
                                </div>
                            </div>

                            <div class="columns_column">
                                <div class="test-result-item">
                                    <img src="/images/testAvatar.svg" alt="аватар для теста">
                                    <div class="text-row">
                                        <div class="test-title">Тест на любовь к себе</div>
                                        <div class="test-date">Пройден 07.01.2023</div>
                                    </div>
                                </div>
                            </div>

                            <div class="columns_column">
                                <div class="test-result-item">
                                    <img src="/images/testAvatar.svg" alt="аватар для теста">
                                    <div class="text-row">
                                        <div class="test-title">Тест на зависимость от еды</div>
                                        <div class="test-date">Пройден 06.01.2023</div>
                                    </div>
                                </div>
                            </div>

                            <div class="columns_column">
                                <div class="test-result-item">
                                    <img src="/images/testAvatar.svg" alt="аватар для теста">
                                    <div class="text-row">
                                        <div class="test-title">Тест на перфекционизм</div>
                                        <div class="test-date">Пройден 05.01.2023</div>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <div class="test-result-btn-box">
                            <div class="test-result-btn"><img src="/images/showAllTest.svg" alt="показать результаты тестов"></div>
                        </div>

                    </div>
                </div>
            </div>
            <!--  -->
        </main>

    </div>
    
    <div class="popupChangeAccount" id="popupChangeAccount">

        <a class="popupChangeAccount__area" href="#header"></a>

        <div class="popupChangeAccount__body">
            <div class="popupChangeAccount__contetnt">
                
                <div class="about-yourself">
                    <div class="about-yourself__wrapper1 _container">

                        <div class="about-yourself__my-information">

                            <img src="/images/importFoto.svg" alt="загрузка фото">

                            <div class="about-yourself__row1">
                                
                                <form action="/account/change" method="post">

                                    <div class="about-yourself__row2">
                                    
                                        <input id="personFIO" type="text" name="personFIO">

                                        <div class="about-yourself__row3">
                                            <label for="dateAge">Дата рождения:</label>
                                            <input id="dateAge" type="text" name="dateAge">
                                        </div>

                                        <div class="about-yourself__row3">
                                            <label for="personProblem">Проблема:</label>
                                            <input id="personProblem" type="text" name="personProblem">
                                        </div>
                                        
                                        <div class="about-yourself__row3">
                                            <label for="personHight">Рост:</label>
                                            <input id="personHight" type="text" name="personHight">
                                        </div>

                                        <div class="about-yourself__row3">
                                            <label for="personWeight">Вес:</label>
                                            <input id="personWeight" type="text" name="personWeight">
                                        </div>
                
                                    </div>
                                    
                                    <div class="save-btn">
                                        <button type="submit">
                                            <a href="#"><img src="/images/saveChangeBtn.svg" alt="кнопка сохранения">
                                        </a></button>
                                    </div>

                                    <div class="about-yourself__my-biograpy1">
                                        <div class="about__box">
                                            <div class="about-me">О себе:</div>
                                        </div>

                                        <div class="history__box">                  
                                            <div class="my-history">
                                                <input id="personHistory" type="text" name="personHistory" placeholder="Введите информацию о себе">
                                            </div>
                                        </div>
                                    </div>

                                </form>

                            </div>

                        </div>

                    </div>
                </div>

            </div>
            
        </div>

    </div>

    <button class="night-theme-btn">
        <img class="night-theme-btn__icon _sun" src="/images/sun-weather-sunny-svgrepo-com.svg" alt="">
        <img class="night-theme-btn__icon _moon" src="/images/moon-weather-sunny-svgrepo-com.png" alt="">
    </button>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="/js/chart.js"></script>
    <script src="/js/darkMode.js"></script>
</body>
</html>
