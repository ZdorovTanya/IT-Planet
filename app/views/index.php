<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>eat.NORMAL</title>

    <link rel="stylesheet" href="/css/style.css">
    
    <link rel="stylesheet" href="/css/menu.css">
    <link rel="stylesheet" href="/css/popup.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@100;200;300;400&display=swap" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>

<body> 
    <div class="wrapper">

        <?
            include("app/views/menu.php");
        ?>

        <main class="content">

            <div class="content_body _container">
                <div class="content_row">
                    <div class="content_column_1">
                        <!-- для отступа -->
                    </div>
                    <div class="content_column_2">

                        <!-- главная часть и кнопка -->
                        <div class="eat_normal">
                            <div class="content_title">
                                <img src="/images/eatNormaltitle.svg" alt="">
                            </div>
                            <div class="content_text _text">
                                — это площадка, к которой вы можете обратиться, если вы столкнулись 
                                с проблемой расстройства пищевого поведения или только начинаете замечать за 
                                собой первые симптомы расстройства. 
                                Здесь вы можете найти необходимую информацию и получить помощь.
    
                            </div>

                            <div class="project-btn">
                                <div class="project-btn_row">
                                    <img src="/images/ArrowDown.svg" alt="">
                                    <a href="#block2" class="project-btn_text">О ПРОЕКТЕ</a>
                                </div>
                            </div>
                        </div>


                        <!-- миссия и содержимое -->
                        <div class="about-project">

                            <div class="about-project_mission">
                                <div class="about-project_mission-title">
                                    <img id="block2" src="/images/mission.svg" alt="">
                                </div>
                                <div class="about-project_mission-text _text">
                                    Данный проект создан для помощи людям, которые хотят начать бороться с РПП, 
                                    найти причины болезни и попытаться их преодолеть.
                                </div>
                            </div>

                            <div class="about-project_lining">
                                <div class="about-project_lining-title">
                                    <img src="/images/siteContent.svg" alt="">
                                </div>
                                <div class="about-project_lining-text _text">
                                    Вы можете подробнее ознакомиться с каждым из разделов сайта.
                                </div>
                            </div>

                        </div>


                        <!-- выпадающие разделы -->
                        <div class="block">
                            <div class="block_item">
                                <div class="block_row">
                                    <img src="/images/ArrowDown.svg" alt="">
                                    <div class="block_title _title"> Форум</div>
                                </div>
                                
                                <div class="block_text _text"> 
                                    <p>В разделе “Форум” Вы сможете познакомится с историями других пользователей по теме, которая интересует лично 
                                        Вас с помощью гибкой системы фильтров.
                                    </p>  
                                    <p>
                                        С помощью аккаунта, Вы сможете рассказывать на форуме о своем личном опыте, 
                                        оставлять комментарии, получать  поддержку, не только
                                        от других пользователей, но и от психологов, которые также могут принимать участие в проекте.
                                    </p>  
                                </div>
                            </div>
                            <div class="block_item">
                                    <div class="block_row">
                                        <img src="/images/ArrowDown.svg" alt="">
                                        <div class="block_title _title"> Тесты</div>
                                    </div>

                                <div class="block_text _text"> 
                                    <p>
                                        Во вкладке тестов, Вы сможете пройти проверку на интересующую Вас тему. 
                                    </p>
                                    <p>
                                        Полученные Вами результаты тестирования не претендуют на звание точного медицинского диагноза, они созданы лишь для того, 
                                        чтобы помочь Вам обратить внимание на возможную проблему и обратиться за поддержкой, если она понадобиться.
                                    </p>
                                    
                                    <p>
                                        С использованием аккаунта, результаты тестов будут сохраняться в Вашем профиле и Вы сможете отслеживать прогресс лечения.
                                    </p>
                                    
                                </div>
                            </div>
                            <div class="block_item">
                                    <div class="block_row">
                                        <img src="/images/ArrowDown.svg" alt="">
                                        <div class="block_title _title"> Консультации</div>
                                    </div>

                                <div class="block_text _text"> 
                                    <p>
                                        В случае если Вы решите обратиться к специалисту, раздел
                                        консультаций окажет содействие в подборе психотерапевта или группы помощи онлайн или офлайн. 
                                    </p>

                                    <p>
                                        Также Вы сможете оставить заявку на первую бесплатную консультацию и получить рекомедации.
                                    </p>
                                    
                                </div>
                            </div>
                            <div class="block_item">
                                    <div class="block_row">
                                        <img src="/images/ArrowDown.svg" alt="">
                                        <div class="block_title _title"> Самопомощь</div>
                                    </div>
                    
                                <div class="block_text _text"> 
                                    <p>
                                        Если Вы осознаете наличие проблемы, то Вы уже на половине пути 
                                        к ее решению.
                                    </p>

                                    <p>
                                        “Самопомощь” хранит в себе необходимый материал, для начала борьбы с заболеванием. 
                                        Тут Вы можете найти ссылки на полезные источники и авторитетных психологов, ознакомиться с симптомами болезни и их возможными причинами, прочитать полезные статьи по интересующей
                                    </p>
                               
                                    <p>
                                        Вас теме и просто отвлечься от РПП в сложные минуты.
                                    </p>
                                    
                                </div>
                            </div>
                            <div class="block_item">
                                    <div class="block_row">
                                        <img src="/images/ArrowDown.svg" alt="">
                                        <div class="block_title _title"> Авторизация</div>
                                    </div>
                            
                                <div class="block_text _text"> 
                                    <p>
                                        Зарегистрировавшись на нашем сайте, Вы получите возможность делиться своими историями на форумах и оставлять комментарии под чужими постами, также в профиле будет доступно сохранение 
                                        результатов тестов, для отслеживания отслеживания прогресса, а также функция подписки на авторов и трекер самочувствия, в котором Вы можете отмечать 
                                        свои ощущения и оставлять заметки в формате дневника.
                                    </p>
                                   
                                    <p>
                                        Помимо этого в профиле будет разработана тетрадь с заданиями, которые помогут справиться с болезнью.
                                    </p>

                                    <p>
                                        Любые Ваши данные из анкеты Вы можете отобразить или скрыть в своем профиле, для других читателей. Регистрация не является 
                                        обязательной и создана для удобства и создания комфортной среды для пользователей.
                                    </p>
                                    
                                    
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            
        </main>
        <div class="women-footer _ibg">
            <!-- <div class="women-footer__image _ibg"> -->
            <img src="/images/women.svg" alt="women">
            <!-- </div> -->
        </div>
    </div>

    <!-- попап регистрации и входа -->
    <div id="popup" class="popup">
        <a href="#header" class="popup__area"></a>
        <div class="popup__body">
            <div class="popup__contetnt">
                <!-- <a href="#header" class="popup__close">x</a> -->
                
                <div class="popup__title">
                    <a href="#" class="entrance">Вход</a>
                    <a href="#popup_registration" class="registration">Регистрация</a>
                </div>

                <div class="popup__middle">
                    <form method="post" action="/main/login">
                        <div class="input__row">
                            <label for="UserEmail"><img src="/images/headForPopup.svg" alt=""></label>
                            <input id="UserEmail" type="email" name="email" placeholder="Введите Email">
                        </div>

                        <div class="input__row">
                            <label for="UserPassword"><img src="/images/lockForPopup.svg" alt=""></label>
                            <input id="UserPassword" type="password" name="password" placeholder="Введите пароль">
                        </div>

                        <div class="checkbox__row">
                            <label class="rememberMe">
                                <input type="checkbox" id="save" name="saveMe"> 
                                Запомнить меня
                            </label>
                            <a href="#" class="forgot">Забыли пароль?</a>
                        </div>

                        <button type="submit">Войти</button>
 
                    </form>
                </div>

                
                <div class="popup__footer">
                    <!-- <a href="#" class="exist">Войти</a> -->
                </div>

            </div>
            
        </div>
    </div>

    <div id="popup_registration" class="popup">
        <a href="#header" class="popup__area"></a>
        <div class="popup__body">
            <div class="popup__contetnt">
                <!-- <a href="#header" class="popup__close">x</a> -->
                
                <div class="popup__title">
                    <a href="#popup" class="entrance">Вход</a>
                    <a href="#" class="registration">Регистрация</a>
                </div>

                <div class="popup__middle__2">
                    <form method="post" action="/main/register">
                        <div class="input__row">
                            <label for="UserName"></label>
                            <input id="UserName" type="text" name="name" placeholder="Введите Ваше имя/ник">
                        </div>

                        <div class="input__row">
                            <label for="UserAge"></label>
                            <input id="UserAge" type="text" name ="birth" placeholder="Дата Вашего рождения">
                        </div>
                        <!-- колонки попробовать -->
                        <div class="input__row">
                            <label for="UserSex"></label>
                                <input id="UserSex" type="text" name="sex" placeholder="Укажите Ваш пол">
                        </div>

                        <div class="input__row">
                            <label for="UserTarget"></label>
                                <input id="UserTarget" type="text" name="goal" placeholder="Опишите Вашу цель">
                        </div>
                      

                        <div class="input__row">
                            <label for="UserProblem"></label>
                            <input id="UserProblem" type="text" name="problem" placeholder="Опишите Вашу проблему">
                        </div>

                        <div class="input__row">
                            <label for="UserEmail"><img src="/images/headForPopup.svg" alt=""></label>
                            <input id="UserEmail" type="email" name="email" placeholder="Введите Email">
                        </div>

                        <div class="input__row">
                            <label for="UserPassword"><img src="/images/lockForPopup.svg" alt=""></label>
                            <input id="UserPassword" type="password" name="password" placeholder="Введите пароль">
                        </div>

                        <div class="input__row">
                            <label for="UserPassword"><img src="/images/lockForPopup.svg" alt=""></label>
                            <input id="UserPassword" type="password" name="checkpassword" placeholder="Подтвердите пароль">
                        </div>
 
                        <div class="text">
                            * Любую информацию, которую вы посчитаете личной, Вы сможете скрыть в профиле.
                        </div>

                        <button type="submit">Войти</button>

                    </form>



                </div>

                
                <div class="popup__footer">
                    <!-- <a href="/main/register" class="exist">Войти</a> -->
                </div>

            </div>
            
        </div>
    </div>
    
<!-- скрипт -->
<script src="/js/contentSpoiler.js"></script>
</body>
</html>