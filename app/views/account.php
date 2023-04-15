<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Аккаунт</title> 

    <link rel="stylesheet" href="/css/account.css">
    <link rel="stylesheet" href="/css/popupChangeAccount.css">


    <link rel="stylesheet" href="/css/menu.css">
    <!-- <link rel="stylesheet" href="/css/popup.css"> -->


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@100;200;300;400&display=swap" rel="stylesheet">
</head>
<body>
    <div class="wrapper">

        <?
            include("app/views/menu.php");
        ?>
            
        <div class="about-yourself">
            <div class="about-yourself__wrapper _container">

                <div class="about-yourself__my-information">

                    <img src="/images/avatar.svg" alt="фото пользователя">

                    <div class="about-yourself__row1">
 
                        <div class="about-yourself__row2">
                            <div class="name _title"><? echo $model->getName() ?></div>
                            <div class="age _info-text">Дата рождения: <? echo $model->getBirth() ?></div>
                            <div class="problem _info-text">Проблема: <? echo $model->getProblem() ?></div>
                            <div class="hight _info-text"> <img src="/images/lockForPopup.svg" alt="срыто замком"> Рост: <? echo $model->getHeight() ?></div>
                            <div class="weight _info-text"> <img src="/images/lockForPopup.svg" alt="скрыто замком"> Вес: <? echo $model->getWeight() ?></div>
                        </div>
                       
                        <div class="btn-box">
                            <div class="registration-btn">
                                <a href="#popupChangeAccount"><img src="/images/btnChangeProfile.svg" alt=""></a>
                            </div>

                            <div class="exist-btn">
                                <!-- <button type="submit" action="/account/exit"> -->
                                    <a href="/account/logout"><img src="/images/existBtn.svg" alt="кнопка выхода"></a>
                                <!-- </button> -->
                            </div>
                        </div>

                    </div>

                </div>

                <div class="about-yourself__my-biograpy">
                    <div class="about__box">
                        <div class="about-me">О себе:</div>
                    </div>

                    <div class="history__box">                      
                        <div class="my-history">
                            <? echo $model->getAbout() ?>
                            <!-- Длинный, очень длинный текст о моей жизни. Я такая классная вообще, вы бы знали.
                            Но, на самом деле по ночам мне очень грустно. Я каждый день прихожу домой с Универа, беру свою кошку Люсю и иду смотреть турецкие сериалы взахлёб. 
                            А это всё потому что у меня не получается найти друзей...
                            Я просто хочу дом на Бали и ничего не делая попивать кокосовое молоко на пляже... -->
                        </div>
                    </div>
                </div>



            </div>
        </div>

        <div class="subscriptions">
            <div class="subscriptions__wrapper _container">
                <div class="title-box">
                    <div class="subscriptions-title _title">Подписки</div>
                </div>

                <div class="subscriptions-box">
                    <div class="subscriptions-item">
                        <img src="/images/subscribeImg.svg" alt="фото подписок">
                        <div class="subscriptions-name">Катя</div>
                    </div>

                    <div class="subscriptions-item">
                        <img src="/images/subscribeImg.svg" alt="фото подписок">
                        <div class="subscriptions-name">Таня</div>
                    </div>

                    <div class="subscriptions-item">
                        <img src="/images/subscribeImg.svg" alt="фото подписок">
                        <div class="subscriptions-name">Даша</div>
                    </div>

                    <div class="subscriptions-item">
                        <img src="/images/subscribeImg.svg" alt="фото подписок">
                        <div class="subscriptions-name">Света</div>
                    </div>
                </div>

                <div class="subscribe-btn-box">
                    <div class="subscribe-btn"><img src="/images/allSubscribe.svg" alt=""></div>
                </div>


            </div>
        </div> 

        <div class="article">
            <div class="article__wrapper _container">
                <div class="title-box">
                    <div class="article-title _title">Мои статьи</div>
                </div>

                <div class="article-box">

                    <div class="article-item">
                        <div class="article-row-1">
                            <div class="article-name">Мои попытки избавиться от РПП</div>
                            <div class="article-hashtag">
                                <div class="hashtag-item">
                                    <div class="hashtag-name"> #Анорексия</div>
                                </div>
                                <div class="hashtag-item">
                                    <div class="hashtag-name"> #Начало</div>
                                </div>
                                <div class="hashtag-item">
                                    <div class="hashtag-name"> #Борьба</div>
                                </div>
                            </div>
                        </div>
                        <div class="article-row-2">
                            <div class="article-content">
                                Я много раз начинала бороться в РПП, но всякий раз, когда видела привес на весах 
                                бросала это занятие и снова садилась на диету.
                            </div>
                        </div>
                    </div>

                    <div class="article-item">
                        <div class="article-row-1">
                            <div class="article-name">Первый поход к психологу</div>
                            <div class="article-hashtag">
                                <div class="hashtag-item">
                                    <div class="hashtag-name"> #Анорексия</div>
                                </div>
                                <div class="hashtag-item">
                                    <div class="hashtag-name"> #Психолог</div>
                                </div>
                                <div class="hashtag-item">
                                    <div class="hashtag-name"> #Рекавери</div>
                                </div>
                            </div>
                        </div>
                        <div class="article-row-2">
                            <div class="article-content">
                                За первй сеанс с психологом я успела рассказать лишь половину всех своих способов истязательства
                                над своим телом.
                            </div>
                        </div>
                    </div>

                    <div class="article-item">
                        <div class="article-row-1">
                            <div class="article-name">Набор веса</div>
                            <div class="article-hashtag">
                                <div class="hashtag-item">
                                    <div class="hashtag-name"> #Анорексия</div>
                                </div>
                                <div class="hashtag-item">
                                    <div class="hashtag-name"> #Набор веса</div>
                                </div>
                                <div class="hashtag-item">
                                    <div class="hashtag-name"> #ИМТ</div>
                                </div>
                            </div>
                        </div>
                        <div class="article-row-2">
                            <div class="article-content">
                               В начале я не могла позволить себе набрать вес. Врач утверждал, что без этого
                               я протяну не долго, но отражение в зеркале  мне было важнее.
                            </div>
                        </div>
                    </div>

                </div>

                <div class="article-btn-box">
                    <div class="article-btn"><img src="/images/showAllArticle.svg" alt="показать все статьи"></div>
                </div>


            </div>
        </div>

        
        <div class="test-result">
            <div class="test-result__wrapper _container">
                <div class="title-box">
                    <div class="test-result-title _title">Результаты тестов</div>
                </div>

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

    <div id="popupChangeAccount" class="popupChangeAccount">
        <a href="#header" class="popupChangeAccount__area"></a>
        <div class="popupChangeAccount__body">
            <div class="popupChangeAccount__contetnt">
                
                <div class="about-yourself">
                    <div class="about-yourself__wrapper1 _container">

                        <div class="about-yourself__my-information">

                            <img src="/images/importFoto.svg" alt="загрузка фото">

                            <div class="about-yourself__row1">
                                
                                <form method="POST" action="/account/change">

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

                                    <div class="about-yourself__my-biograpy">
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
</body>
</html>