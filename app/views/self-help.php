<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Самопомощь</title>

    <link rel="stylesheet" href="/css/self-help.css">


    <link rel="stylesheet" href="/css/menu.css">
    <!-- <link rel="stylesheet" href="/css/popup.css"> -->

    <link rel="icon" href="/images/favicon.svg" type="image/x-icon">
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

        <div class="about-page _container _box">
            <div class="about-page__title _title">
                Самопомощь
            </div>
            <div class="about-page__text _text">
                Если Вы осознали наличие проблемы, то Вы уже на половине пути к ее решению. 
                “Самопомощь” хранит в себе необходимый материал, для начала борьбы с заболеванием. 
                Тут Вы можете найти ссылки на полезные источники и авторитетных психологов, ознакомиться с симптомами болезни и их возможными 
                причинами, прочитать полезные статьи по интересующей Вас теме и просто отвлечься от РПП в сложные минуты.
            </div>
            <img src="/images/girlsWaterYourselfFoeSelfHelp.svg" alt="девушка поливает себя" class="girlWaterYourself">
        </div>

        <div class="useful-sources _container _box">
            <div class="useful-sources__title _title">
                Полезные источники
            </div>
            <div class="useful-sources__text _text">
                В этой части мы собрали видео и другие информационные ресуры, которые прямо или косвенно связаны с 
                темой расстройств пищевого поведения и могут стать отправной точкой в борьбе с заболеванием.
            </div>
            <div class="video__row">
                <a href="https://youtu.be/MyDVAJy408c"><img src="/images/reaSilver.svg" alt="ria"></a>
                <a href="https://youtu.be/1v0XzHRwJ7M"><img src="/images/libo.svg" alt="libo"></a>
                <a href="https://youtu.be/2Xt0NSA_s7s"><img src="/images/svetlana.svg" alt="svetlana"></a>
            </div>
            
        </div>

        <div class="useful-sources-telegram _container _box">
            <div class="useful-sources__title _title">
                Полезные телеграмм каналы
            </div>
            <div class="useful-sources__text _text">
                В данном блоке мы собрали для Вас телеграм каналы, которые могут быть полезны в восстановлении от РПП.
                В них Вы сможете найти не только информацию об РПП, но и интересные психологические каналы, которую также будут способствовать достижению устойчивого ментального здоровья.
            </div>
            <div class="tg__row">
                <a href="https://t.me/svetlyachok_speaking"><img src="/images/tgSveta.svg" alt="sveta"></a>
                <a href="https://t.me/melfm"><img src="/images/mel.svg" alt="mel"></a>
                <a href="https://t.me/selflovediana"><img src="/images/safeSpacw.svg" alt="safe"></a>
            </div>
            
        </div>

        <div class="task _container _box">
            <div class="task__title _title">
                Задания
            </div>
            <div class="task__text _text">
                Данные практические задания направлены на визуализацию собственного состояния, 
                помогают выделить для себя возможные причины заболевания и выстроить правильную стратегию по борьбе с ним.
            </div>
            <div class="taskHelp-row">
                <img src="/images/writeTask.svg" alt="напишите задание">
                <div class="task-question _task-title">
                    Задание 1: От чего вы устали в РПП?
                </div>
                <img src="/images/ArrowDown.svg" alt="" class="arrow">
            </div>
            <div class="task-block_text"> 
                <p>
                    Положите перед собой блокнот и постарайтесь подробно прописать все негативные моменты, 
                    с которыми вы сталкиваетесь из-за РПП. 
                </p>
                <p>
                    Это может быть неприятие своего тела, буллинг со стороны знакомых и родных или проблемы, связанные с употреблением пищи.
                </p>
                <p>
                    Не романтизируйте РПП, чем больше плохого Вы вспомните, тем лучше.
                </p>
                                    
            </div>

            <div class="taskHelp-row">
                <img src="/images/writeTask.svg" alt="напишите задание">
                <div class="task-question _task-title">
                    Задание 2: Вспомните какие отношения с едой были в Вашем детстве.
                </div>
                <img src="/images/ArrowDown.svg" alt="" class="arrow">
            </div>

            <div class="task-block_text"> 
                <p>
                    Вспомните какая еда у Вас была любимой в детсве, а какую вы на дух не переносили, есть ли у вас ритуалы, связанные с едой и семейные привычки?
                </p>
                <p>
                    Если в Вашей семье были запреты на еду, распространялись ли они на Ваши любимые продукты? Приходилось ли Вам прятать любимую еду?
                </p>
                <p>
                    Возможно Вам приходилось слышать подобные фразы в детстве?
                </p>
                        <p>- Пока не доешь, никуда не пойдешь / сладкое только после еды</p> 
                        <p>- Не плачь деточка, держи конфетку, поешь </p>
           
            </div>

            <div class="taskHelp-row">
                <img src="/images/writeTask.svg" alt="напишите задание">
                <div class="task-question _task-title">
                    Задание 3: Напишите Ваши правила, ритуалы, запреты, связанные с едой.                
                </div>
                <img src="/images/ArrowDown.svg" alt="" class="arrow">
            </div>
            
            <div class="taskHelp-row">
                <img src="/images/writeTask.svg" alt="напишите задание">
                <div class="task-question _task-title">
                    Задание 4: Есть ли у Вас еда, на которую Вы “срываетесь”.
                </div>
                <img src="/images/ArrowDown.svg" alt="" class="arrow">
            </div>
            
            <div class="taskHelp-row">
                <img src="/images/writeTask.svg" alt="напишите задание">
                <div class="task-question _task-title">
                    Задание 5: Пропишите собственные причины для похудения.                
                </div>
                <img src="/images/ArrowDown.svg" alt="" class="arrow">
            </div>
            
            <div class="taskHelp-row">
                <img src="/images/writeTask.svg" alt="напишите задание">
                <div class="task-question _task-title">
                    Задание 6: Перед кем Вам стыдно за свой внешний вид.
                </div>
                <img src="/images/ArrowDown.svg" alt="" class="arrow">
            </div>

            <div class="taskHelp-row">
                <img src="/images/writeTask.svg" alt="напишите задание">
                <div class="task-question _task-title">
                    Задание 7: Какие плюсы и минусы были в Вашей погони за телом.
                </div>
                <img src="/images/ArrowDown.svg" alt="" class="arrow">
            </div>

            <div class="taskHelp-row">
                <img src="/images/writeTask.svg" alt="напишите задание">
                <div class="task-question _task-title">
                    Задание 8: Как выглядит Ваша болезнь? 
                </div>
                <img src="/images/ArrowDown.svg" alt="" class="arrow">
            </div>

            <div class="taskHelp-row">
                <img src="/images/writeTask.svg" alt="напишите задание">
                <div class="task-question _task-title">
                    Задание 9: Какой я вижу жизнь без РПП.
                </div>
                <img src="/images/ArrowDown.svg" alt="" class="arrow">
            </div>

            <div class="taskHelp-row">
                <img src="/images/writeTask.svg" alt="напишите задание">
                <div class="task-question _task-title">
                    Задание 10: Опишите свой идеальный день без РПП.
                </div>
                <img src="/images/ArrowDown.svg" alt="" class="arrow">
            </div>

            <div class="taskHelp-row">
                <img src="/images/writeTask.svg" alt="напишите задание">
                <div class="task-question _task-title">
                    Задание 11: Перед кем Вам стыдно за свой внешний вид.
                </div>
                <img src="/images/ArrowDown.svg" alt="" class="arrow">
            </div>

            <div class="taskHelp-row">
                <img src="/images/writeTask.svg" alt="напишите задание">
                <div class="task-question _task-title">
                    Задание 12: Ваши цели, которые не связаны с телом.
                </div>
                <img src="/images/ArrowDown.svg" alt="" class="arrow">
            </div>

            <div class="taskHelp-row">
                <img src="/images/writeTask.svg" alt="напишите задание">
                <div class="task-question _task-title">
                    Задание 13: Ваши идеальные недостатки.
                </div>
                <img src="/images/ArrowDown.svg" alt="" class="arrow">
            </div>

            <div class="taskHelp-row">
                <img src="/images/writeTask.svg" alt="напишите задание">
                <div class="task-question _task-title">
                    Задание 14: Круги удовлетворения.
                </div>
                <img src="/images/ArrowDown.svg" alt="" class="arrow">
            </div>
            <div class="task-block_text"> 
                <p>
                    
                </p>
                                    
            </div>
            
        </div>

    </div>
<script src="/js/taskSpoiler.js"></script>
</body>
</html>
