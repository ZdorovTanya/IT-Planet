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

                    <div class="clinics">
                        <div class="clinics__header">
                            <div class="name">Клиника лечения зависимостей</div>
                            <div class="line"></div>
                            <div class="place"> 
                                <img src="/images/whereClinics.svg" alt=""> 
                                <div class="city">Москва</div>
                            </div>
                        </div>
                        <div class="clinics__body">
                            <div class="information _text">Основная деятельность клиники — лечение зависимостей, а также 
                                психических расстройств
                            </div>
                            <div class="line2"></div>
                            <div class="picture"><img src="/images/clinics2.svg" alt=""></div>
                        </div>
                        <div class="btn__more">Узнать подробнее</div>
                    </div>

                    <div class="clinics">
                        <div class="clinics__header">
                            <div class="name">Центр лечения и реабилитации от зависимостей</div>
                            <div class="line"></div>
                            <div class="place"> 
                                <img src="/images/whereClinics.svg" alt=""> 
                                <div class="city">Москва</div>
                            </div>
                        </div>
                        <div class="clinics__body">
                            <div class="information _text">Квалифицированная медицинская и психологическая помощь 
                                зависимым и их близким по всей РФ
                            </div>
                            <div class="line2"></div>
                            <div class="picture"><img src="/images/clinics3.svg" alt=""></div>
                        </div>
                        <div class="btn__more">Узнать подробнее</div>
                    </div>
                    
                    <div class="oms">
                    Если Вы чувствуете необходимость в госпитализации Вы можете также получить помощь специалиста бесплатно, по ОМС. Для этого нужно не
                     стесняться обратиться в регистратуру ближайшего психоневрологического диспансера, где вас смогут записать к врачу.
                    </div>

                </div>

                <div class="specialist _box">
                    <div class="_title">
                        Психиатр, психотерапевт, психолог или невролог: к кому обратиться?
                    </div>
                    <div class="about-life-help _text">
                        Это вопрос, с которым столкнется каждый, решивший разобраться в своих психологических
                        или психиатрических проблемах (кстати, чем они отличаются?)
                    </div>

                    <ul class="list-group list-group-horisontal-xl mb-4">
                        <li class="list-group-item" data-tab="tab-1">Психиатр</li>
                        <li class="list-group-item" data-tab="tab-3">Психолог</li>
                        <li class="list-group-item" data-tab="tab-4">Невролог</li>
                        <li class="list-group-item" data-tab="tab-2">Психотерапевт</li>
                    </ul>

                    <div class="card p-3 hidden" data-tab-content id="tab-1">
                        <div class="specialist-card">
                            <div class="specialist-title">Психиатор</div>
                            <div class="main-text">
                                <p class="description">
                                    — врач, получивший высшее образование в медицинском университете по специальности "лечебное дело" и прошедший ординатуру по психиатрии. Его право на практику должно быть подтверждено сертификатом Министерства здравоохранения.
                                </p>
                                <p class="body-text">
                                    Именно он и только он может поставить вам диагноз, изменить диагноз и выписать или отменить таблетки, направить на госпитализацию. 
                                    Неосведомленного человека поход к психиатру пугает неизмеримо больше, чем любые другие альтернативы, однако ничего страшного на приеме у психиатра, как правило, не происходит. 
                                    Чаще всего это спокойная беседа и выдача рецепта.
                                </p>
                                <p class="warning">
                                    Помните: если вы не представляете прямой угрозы для себя или окружающих, никто не может госпитализировать вас насильно.
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card p-3 hidden" data-tab-content id="tab-2">
                        <div class="specialist-card">
                            <div class="specialist-title">Психотерапевт</div>
                            <div class="main-text">
                                <p class="description">
                                    — это психиатр, который после медицинского образования не менее двух лет изучал психотерапию и получил соответствующий сертификат.
                                </p>
                                <p class="body-text">
                                    Задача этого специалиста — терапия психических расстройств с помощью психологических методов, то есть "разговорной терапии". 
                                    Врач-психотерапевт может совмещать в себе две роли: психиатра и психотерапевта, или выбрать что-то одно.
                                    Но это как раз то правило, которое нарушают очень часто. На практике психотерапевтами себя называют и специалисты с психологическим образованием, 
                                    прошедшие обучение техникам психотерапии в каком-либо направлении (гештальт-терапия, психоанализ и т.д.). Стоит ли к ним обращаться — сложный вопрос. 
                                    С одной стороны, это могут быть прекрасные эмпатичные психологи, умеющие поддержать в трудной ситуации. 
                                    С другой стороны, довольно часто психологи-гуманитарии имеют слабое представление о нарушениях в работе психики и из-за этого пропускают опасные симптомы.
                                </p>
                                <p class="warning">
                                    С точки зрения современного законодательства, называть себя психотерапевтом и работать с психическими расстройствами имеет право только человек с медицинским образованием.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="card p-3 hidden" data-tab-content id="tab-3">
                    <div class="specialist-card">
                        <div class="specialist-title">Психолог</div>
                        <div class="main-text">
                            <p class="description">
                                — специалист с высшим гуманитарным образованием по специальности "психология", который помогает людям разобраться в трудных жизненных ситуациях. 
                                Это не врач, и он не имеет права заниматься ни диагностикой, ни лечением психических расстройств. 
                            </p>
                            <p class="body-text">
                                Для помощи людям с психическими нарушениями в психо логии есть отдельная специальность. Клинический, или медицинский психолог исследует психологические причины и проявления психического расстройства и проводит коррекционную работу. Обычно клинический психолог работает в команде с психиатром, дополняя его, но не замещая. 
                                Именно клинический психолог проводит в больнице разнообразные психологические тесты.
                            </p>
                            <p class="warning">
                                Психолог занимается консультированием по вопросам, не связанным напрямую с заболеваниями: трудности в отношениях, личностные кризисы, проблемы на работе, сложности в воспитании ребенка и так далее.
                            </p>
                        </div>
                    </div>
                    </div>
                    <div class="card p-3 hidden" data-tab-content id="tab-4">
                    <div class="specialist-card">
                        <div class="specialist-title">Невролог</div>
                        <div class="main-text">
                            <p class="description">
                                — это врач, специализирующийся на мозге, нервной системе и нарушениях их функций. 
                            </p>
                            <p class="body-text">
                                Физические поражения нервной системы могут вызывать самые разнообразные психиатрические симптомы, вплоть до провалов в памяти и галлюцинаций. 
                                Если вас мучают головные боли или непонятные боли в конечностях, бессонница, проблемы с памятью — обращайтесь к неврологу, чтобы проверить, все ли в порядке 
                                с вашей нервной системой.
                            </p>
                            <p class="warning">
                                Однако, приходится иметь в виду, что участковые неврологи, как и терапевты, не всегда хорошо осведомлены о душевных заболеваниях. Есть риск попасть в бесконечную карусель обследований и рецептов на таблетки, которые не избавляют вас от симптомов. 
                                Так что если вы не видите результатов лечения, но продолжаете ходить в поликлинику к неврологу, просто перестаньте откладывать визит к психиатру.
                            </p>
                        </div>
                    </div>
                    </div>
                    </div>
                </div>
        </main>
    </div>

    <script src="/js/taskSpoiler.js"></script>
    <script src="/js/tabs.js"></script>
</body>
</html>
