<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>eat.NORMAL</title>

    <link rel="stylesheet" href="/css/index.css">
    <!-- <link rel="stylesheet" href="/css/popup.css">-->

    <link rel="icon" href="/images/favicon.svg" type="image/svg+xml">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>

<body> 
    <div class="wrapper">

        <?
            include("app/views/menu.php");
        ?>

        <main class="content">
 
            <div class="_container">
                <div class="content_row">
                    <!-- главная часть и кнопка -->
                    <div class="eat_normal">
                        <img src="/images/eatNormaltitle.svg" alt="">
                        <div class=" _text lang" key="eatNormal">
                            — это площадка, к которой вы можете обратиться, если вы столкнулись с проблемой расстройства пищевого поведения или только начинаете замечать за собой первые симптомы расстройства. 
                            Здесь вы можете найти необходимую информацию и получить помощь.
                        </div>

                        <a class="about-project-btn lang" key="about-project" href="#about-project">О проекте</a>
                    </div>

                    <!-- миссия и содержимое -->
                    <div class="about-project" id="about-project">

                        <div class="about-project_mission">
                            <!-- <img src="/images/mission.svg" alt=""> -->
                            <h3 class="_title lang" key="about-project-title"> НАША МИССИЯ</h3>
                            <div class="about-project_mission-text _text lang" key="about-project-mission">
                                Данный проект создан для помощи людям, которые хотят начать бороться с РПП, найти причины болезни и попытаться их преодолеть.
                            </div>
                        </div>

                        <div class="about-project_lining">
                        <h3 class="_title lang" key="about-project-lining-title"> СОДЕРЖАНИЕ САЙТА</h3>
                            <div class="about-project_lining-text _text lang" key="about-project-lining">
                                Вы можете подробнее ознакомиться с каждым из разделов сайта.
                            </div>
                        </div>

                    </div>

                    <!-- выпадающие разделы -->
                    <div class="block">
                        <div class="block_item">
                            <div class="block_row">
                                <img src="/images/ArrowDown.svg" alt="">
                                <div class="block_title _title lang" key="forum-pages">Форум</div>
                            </div>
                            
                            <div class="block_text _text lang" key="forum-text"> 
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
                                    <div class="block_title _title lang" key="tests">Тесты</div>
                                </div>

                            <div class="block_text _text lang" key="tests-text"> 
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
                                    <div class="block_title _title lang" key="doctors">Консультации</div>
                                </div>

                            <div class="block_text _text lang" key="doctors-text"> 
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
                                    <div class="block_title _title lang" key="self-help">Самопомощь</div>
                                </div>
                
                            <div class="block_text _text lang" key="self-help-text"> 
                                <p>
                                    Если Вы осознаете наличие проблемы, то Вы уже на половине пути к ее решению.
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
                                    <div class="block_title _title lang" key="avtorisation">Авторизация</div>
                                </div>
                        
                            <div class="block_text _text lang" key="avtorisation-text"> 
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
            
        </main>

        <footer class="women-footer _ibg">
            <img src="/images/woman.svg" alt="девушка с жёлтыми волосами">
        </footer>
    </div>


    
    <!-- скрипт -->
    <script src="/js/contentSpoiler.js"></script>
    <!-- <script src="/js/MainTranslate.js"></script> -->

    <script src="/js/MenuTranslate.js"></script>

</body>
</html>
