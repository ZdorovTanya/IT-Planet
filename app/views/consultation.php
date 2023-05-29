<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Консультации</title>

    <link rel="stylesheet" href="/css/consultation.css">
    <!-- <link rel="stylesheet" href="/css/popup.css"> -->


    <link rel="icon" href="/images/favicon.svg" type="image/svg+xml">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>
<body>
    <div class="wrapper">
        <?
            include("app/views/menu.php");
        ?>

        <main>
            <div class="_container-consultation">
                <div class="about-page _box">
                    
                    <div class="_title">
                        Консультация
                    </div>
                    <div class="about-page__text _text">
                        В случае если у Вас возникнет потребность в квалифицированной помощи и 
                        Вы решите обратиться к специалисту, раздел консультаций окажет содействие в подборе психотерапевта или 
                        группы поддержки.
                        Также Вы сможете оставить заявку на первую бесплатную консультацию и 
                        получить рекомедации по выбору эксперта.
                        
                    </div>
                    <a href="#" class="consultation_btn"><img src="/images/consultation_btn.svg" alt=""></a>
                </div>

                <div class="life_help _box">
                    <div class="_title">
                        Очная помощь
                    </div>
                    <div class="about-life-help _text">
                        Если Вам кажется, что Вы не в силах справиться 
                        самостоятельно и Вам или Вашему близкому необходимо оказние постоянной помощи, 
                        то в данном блоке Вы сможете обратиться к частным российским клиникам, которые направленны на лечение РПП.
                    </div>
                    <div class="clinics">
                        <div class="clinics__header">
                            <div class="name">Клиника расстройств пищевого поведения</div>
                            <div class="line"></div>
                            <div class="place"> 
                                <img src="/images/whereClinics.svg" alt=""> 
                                <div class="city">Москва</div>
                            </div>
                        </div>
                        <div class="clinics__body">
                            <div class="information _text">Основная деятельность клиники — лечение РПП — нервной анорексии и нервной булимии</div>
                            <div class="line2"></div>
                            <div class="picture"><img src="/images/clinics1.svg" alt=""></div>
                        </div>
                        <div class="btn__more">Узнать подробнее</div>
                    </div>


                </div>
        </main>
    </div>

    <script src="/js/taskSpoiler.js"></script>
</body>
</html>
