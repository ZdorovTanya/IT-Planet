document.addEventListener('DOMContentLoaded', getLocalLang);

var arrLang = {
    'en':{
        // ----------------menu---------------------

        'main-pages':'Main',
        'forum-pages':'Forum',
        'tests':'Tests',
        'doctors':'Doctors',
        'self-help':'SelfHelp',
        'avtorisation':'Avtorisation',

        // --------------------main---------------
        
        'eatNormal':'- this is a platform that you can often visit if you are faced with the problem of an eating disorder or are just starting to notice the first symptoms of the disorder. Here you can find information and get help.',
        'about-project':'About Project',
       
        'about-project-title':'OUR MISSION',
        'about-project-mission':'This project was created to help people who want to start fighting eating disorder, find the causes of the disease and try to overcome them.',
        
        'about-project-lining-title':'SITE CONTENT',
        'about-project-lining':'You can learn more about each section of the site.',
        
        'forum-text':'In the "Forum" section you can get acquainted with the stories of other users on a topic that interests you personally you with a flexible filter system. With the help of an account, you will be able to talk on the forum about your personal experience, leave comments, get support, not only from other users, but also from psychologists who can also take part in the project.',
        'tests-text':'In the tests tab, you can pass a test on the topic you are interested in. The test results you receive do not claim to be an accurate medical diagnosis, they are only designed to help you pay attention to a possible problem and seek support if you need it. Using an account, test results will be saved in your profile and you will be able to track the progress of treatment.',
        'doctors-text':'If you decide to contact a specialist, the consultation section will assist in the selection of a psychotherapist or a help group online or offline. You can also leave a request for the first free consultation and get recommendations.',
        'self-help-text':'If you recognize that there is a problem, then you are already halfway to solving it. “Self-help” contains the necessary material to start the fight against the disease. Here you can find links to useful sources and authoritative psychologists, get acquainted with the symptoms of the disease and their possible causes, read useful articles on the subject of interest. You the topic and just distract from the RPP in difficult times.',
        'avtorisation-text':'By registering on our site, you will be able to share your stories on the forums and leave comments under other peoples posts, you will also be able to save test results in your profile to track progress, as well as a subscription function for authors and a well-being tracker in which you can mark your sensations and leave notes in a diary format. In addition, a notebook with tasks will be developed in the profile that will help to cope with the disease. You can display or hide any of your data from the questionnaire in your profile for other readers. Registration is optional and created for convenience and creating a comfortable environment for users.',
    
        // --------------------forum-----------------------

        'anorexia':'Anorexia',
        'bulimia':'Bulimia',
        'orthorexia':'Orthorexia',
        'overeating':'Compulsia overeating',
        'other':'Other',
        'filtering':'Filtering',   
        
        'about-page-doctors-text':'If you need qualified assistance and you decide to contact a specialist, the consultation section will assist in the selection of a psychotherapist or support group. You can also leave a request for the first free consultation and get recommendations for choosing an expert.',
        'submit-your-application':'Leave a request for a free consultation',

        'face-to-face-assistance':'Face to face assistance',
        'face-to-face-assistance-text':'If it seems to you that you are unable to cope on your own and you or your loved one needs constant assistance, on your own and you or your loved one needs constant assistance, then in this block you can turn to private Russian clinics that are aimed at treating eating disorders.',

        'clinic1':'Clinic for Eating Disorders',
        'clinic-description-1':'Main activity of the clinic - treatment of ED: anorexia nervosa and bulimia nervosa.',

        'clinic2':'Addiction Treatment Clinic',
        'clinic-description-2':'Main activity of the clinic - treatment of addictions, as well as mental disorders.',

        'clinic3':'Addiction Treatment & Rehabilitation Center',
        'clinic-description-3':'Qualified medical & psychological assistance to addicts and their relatives.',

        'city':'Moskow',
        'learn-more':'Learn more',
        'oms':'If you feel the need for hospitalization, you can also get specialist help, free of charge, under CHI. To do this, do not hesitate to contact the registry of the nearest psycho-neurological dispensary, where you can be registered with a doctor.',

        'specialist':'Psychiatrist, psychotherapist, psychologist or neurologist: who to contact?',
        'specialist-text':'This is a question that anyone who decides to understand their psychological or psychiatric problems will face (by the way, how are they different?)',

        'specialist1':'Psychiatrist',
        'description1':'- a doctor who graduated from a medical university with a degree in general medicine and completed a residency in psychiatry. His right to practice must be confirmed by a certificate from the Ministry of Health.',
        'body-text1':'It is he and only he who can diagnose you, change the diagnosis and prescribe or cancel pills, send you for hospitalization. For an uninformed person, going to a psychiatrist is immeasurably more frightening than any other alternative, but, as a rule, nothing terrible happens at a psychiatrists appointment. Most often, this is a calm conversation and the issuance of a prescription.',
        'warning1':'Remember: if you do not pose a direct threat to yourself or others, no one can force you to hospital.',

        'specialist2':'Psychotherapist',
        'description2':'-is a psychiatrist who, after a medical education, has studied psychotherapy for at least two years and received the appropriate certificate.',
        'body-text2':'The task of this specialist is the therapy of mental disorders using psychological methods, that is, "talking therapy". A psychotherapist can combine two roles: a psychiatrist and a psychotherapist, or choose one. But this is just the rule that is violated very often. In practice, specialists with a psychological education who have been trained in the techniques of psychotherapy in any direction (Gestalt therapy, psychoanalysis, etc.) also call themselves psychotherapists. Whether they are worth it is a tough question. On the one hand, they can be excellent empathic psychologists who can support in a difficult situation. On the other hand, quite often humanities psychologists have a poor understanding of mental disorders and, because of this, miss dangerous symptoms.',
        'warning2':'From the point of view of modern legislation, only a person with a medical education has the right to call himself a psychotherapist and work with mental disorders.',

        'specialist3':'Psychologist',
        'description3':'- a specialist with a higher humanitarian education in the specialty "psychology", who helps people understand difficult life situations. This is not a doctor, and he has no right to engage in either the diagnosis or treatment of mental disorders.',
        'body-text3':'To help people with mental disorders in psychology there is a separate specialty. A clinical or medical psychologist investigates the psychological causes and manifestations of a mental disorder and carries out corrective work. Usually a clinical psychologist works in a team with a psychiatrist, complementing him, but not replacing him. It is the clinical psychologist who conducts a variety of psychological tests in the hospital.',
        'warning3':'',

        'specialist4':'Neurologist',
        'description4':'— это врач, специализирующийся на мозге, нервной системе и нарушениях их функций.',
        'body-text4':'Physical damage to the nervous system can cause a wide variety of psychiatric symptoms, including memory lapses and hallucinations. If you suffer from headaches or incomprehensible pains in the limbs, insomnia, memory problems - contact a neurologist to check if everything is in order with your nervous system.',
        'warning4':'However, one must keep in mind that district neurologists, like therapists, are not always well aware of mental illness. There is a risk of falling into an endless carousel of tests and prescriptions for pills that do not relieve your symptoms. So if you do not see the results of treatment, but continue to go to the clinic to see a neurologist, just stop postponing a visit to a psychiatrist.',
    },




    'ru':{
        // ----------------menu---------------------

        'main-pages':'Главная',
        'forum-pages':'Форум',
        'tests':'Тесты',
        'doctors':'Консультации',
        'self-help':'Самопомощь',
        'avtorisation':'Авторизация',

        // --------------------main---------------

        'eatNormal':'— это площадка, к которой вы можете обратиться, если вы столкнулись с проблемой расстройства пищевого поведения или только начинаете замечать за собой первые симптомы расстройства. Здесь вы можете найти необходимую информацию и получить помощь.',
        'about-project':'О проекте',

        'about-project-title':'НАША МИССИЯ',
        'about-project-mission':'Данный проект создан для помощи людям, которые хотят начать бороться с РПП, найти причины болезни и попытаться их преодолеть.',
        
        'about-project-lining-title':'СОДЕРЖАНИЕ САЙТА',
        'about-project-lining':'Вы можете подробнее ознакомиться с каждым из разделов сайта.',
        
        'forum-text':'В разделе “Форум” Вы сможете познакомится с историями других пользователей по теме, которая интересует лично Вас с помощью гибкой системы фильтров. С помощью аккаунта, Вы сможете рассказывать на форуме о своем личном опыте, оставлять комментарии, получать  поддержку, не только от других пользователей, но и от психологов, которые также могут принимать участие в проекте.',
        'tests-text':'Во вкладке тестов, Вы сможете пройти проверку на интересующую Вас тему. Полученные Вами результаты тестирования не претендуют на звание точного медицинского диагноза, они созданы лишь для того, чтобы помочь Вам обратить внимание на возможную проблему и обратиться за поддержкой, если она понадобиться. С использованием аккаунта, результаты тестов будут сохраняться в Вашем профиле и Вы сможете отслеживать прогресс лечения.',
        'doctors-text':'В случае если Вы решите обратиться к специалисту, раздел консультаций окажет содействие в подборе психотерапевта или группы помощи онлайн или офлайн. Также Вы сможете оставить заявку на первую бесплатную консультацию и получить рекомедации.',
        'self-help-text':'Если Вы осознаете наличие проблемы, то Вы уже на половине пути к ее решению. “Самопомощь” хранит в себе необходимый материал, для начала борьбы с заболеванием. Тут Вы можете найти ссылки на полезные источники и авторитетных психологов, ознакомиться с симптомами болезни и их возможными причинами, прочитать полезные статьи по интересующей. Вас теме и просто отвлечься от РПП в сложные минуты.',
        'avtorisation-text':'Зарегистрировавшись на нашем сайте, Вы получите возможность делиться своими историями на форумах и оставлять комментарии под чужими постами, также в профиле будет доступно сохранение результатов тестов, для отслеживания отслеживания прогресса, а также функция подписки на авторов и трекер самочувствия, в котором Вы можете отмечать свои ощущения и оставлять заметки в формате дневника. Помимо этого в профиле будет разработана тетрадь с заданиями, которые помогут справиться с болезнью. Любые Ваши данные из анкеты Вы можете отобразить или скрыть в своем профиле, для других читателей. Регистрация не является обязательной и создана для удобства и создания комфортной среды для пользователей.',
        
        // --------------------forum-----------------------
        
        'anorexia':'Анорексия',
        'bulimia':'Булимия',
        'orthorexia':'Орторексия',
        'overeating':'Компульсивное переедание',
        'other':'Другое',  
        'filtering':'Фильтровать',  
        
        'about-page-doctors-text':'В случае если у Вас возникнет потребность в квалифицированной помощи и Вы решите обратиться к специалисту, раздел консультаций окажет содействие в подборе психотерапевта или группы поддержки. Также Вы сможете оставить заявку на первую бесплатную консультацию и получить рекомедации по выбору эксперта.',
        'submit-your-application':'Оставить заявку на бесплатную консультацию',

        'face-to-face-assistance':'Очная помощь',
        'face-to-face-assistance-text':'Если Вам кажется, что Вы не в силах справиться самостоятельно и Вам или Вашему близкому необходимо оказние постоянной помощи, самостоятельно и Вам или Вашему близкому необходимо оказние постоянной помощи, то в данном блоке Вы сможете обратиться к частным российским клиникам, которые направленны на лечение РПП.',

        'clinic1':'Клиника расстройств пищевого поведения',
        'clinic-description-1':'Основная деятельность клиники — лечение РПП — нервной анорексии и нервной булимии',

        'clinic2':'Клиника лечения зависимостей',
        'clinic-description-2':'Основная деятельность клиники — лечение зависимостей, а также психических расстройств',

        'clinic3':'Центр лечения и реабилитации от зависимостей',
        'clinic-description-3':'Квалифицированная медицинская и психологическая помощь зависимым и их близким по всей РФ',

        'city':'Москва',
        'learn-more':'Узнать подробнее',
        'oms':'Если Вы чувствуете необходимость в госпитализации Вы можете также получить помощь специалиста бесплатно, по ОМС. Для этого нужно не стесняться обратиться в регистратуру ближайшего психоневрологического диспансера, где вас смогут записать к врачу.',

        'specialist':'Психиатoр, психотерапевт, психолог или невролог: к кому обратиться?',
        'specialist-text':'Это вопрос, с которым столкнется каждый, решивший разобраться в своих психологических или психиатрических проблемах (кстати, чем они отличаются?)',

        'specialist1':'Психиатор',
        'description1':'— врач, получивший высшее образование в медицинском университете по специальности "лечебное дело" и прошедший ординатуру по психиатрии. Его право на практику должно быть подтверждено сертификатом Министерства здравоохранения.',
        'body-text1':'Именно он и только он может поставить вам диагноз, изменить диагноз и выписать или отменить таблетки, направить на госпитализацию. Неосведомленного человека поход к психиатру пугает неизмеримо больше, чем любые другие альтернативы, однако ничего страшного на приеме у психиатра, как правило, не происходит. Чаще всего это спокойная беседа и выдача рецепта.',
        'warning1':'Помните: если вы не представляете прямой угрозы для себя или окружающих, никто не может госпитализировать вас насильно.',

        'specialist2':'Психотерапевт',
        'description2':'— это психиатр, который после медицинского образования не менее двух лет изучал психотерапию и получил соответствующий сертификат.',
        'body-text2':'Задача этого специалиста — терапия психических расстройств с помощью психологических методов, то есть "разговорной терапии". Врач-психотерапевт может совмещать в себе две роли: психиатра и психотерапевта, или выбрать что-то одно. Но это как раз то правило, которое нарушают очень часто. На практике психотерапевтами себя называют и специалисты с психологическим образованием, прошедшие обучение техникам психотерапии в каком-либо направлении (гештальт-терапия, психоанализ и т.д.). Стоит ли к ним обращаться — сложный вопрос. С одной стороны, это могут быть прекрасные эмпатичные психологи, умеющие поддержать в трудной ситуации. С другой стороны, довольно часто психологи-гуманитарии имеют слабое представление о нарушениях в работе психики и из-за этого пропускают опасные симптомы.',
        'warning2':'С точки зрения современного законодательства, называть себя психотерапевтом и работать с психическими расстройствами имеет право только человек с медицинским образованием.',

        'specialist3':'Психолог',
        'description3':'— специалист с высшим гуманитарным образованием по специальности "психология", который помогает людям разобраться в трудных жизненных ситуациях. Это не врач, и он не имеет права заниматься ни диагностикой, ни лечением психических расстройств.',
        'body-text3':'Для помощи людям с психическими нарушениями в психологии есть отдельная специальность. Клинический, или медицинский психолог исследует психологические причины и проявления психического расстройства и проводит коррекционную работу. Обычно клинический психолог работает в команде с психиатром, дополняя его, но не замещая. Именно клинический психолог проводит в больнице разнообразные психологические тесты.',
        'warning3':'Психолог занимается консультированием по вопросам, не связанным напрямую с заболеваниями: трудности в отношениях, личностные кризисы, проблемы на работе, сложности в воспитании ребенка и так далее.',

        'specialist4':'Невролог',
        'description4':'— это врач, специализирующийся на мозге, нервной системе и нарушениях их функций. ',
        'body-text4':'Физические поражения нервной системы могут вызывать самые разнообразные психиатрические симптомы, вплоть до провалов в памяти и галлюцинаций. Если вас мучают головные боли или непонятные боли в конечностях, бессонница, проблемы с памятью — обращайтесь к неврологу, чтобы проверить, все ли в порядке с вашей нервной системой.',
        'warning4':'Однако, приходится иметь в виду, что участковые неврологи, как и терапевты, не всегда хорошо осведомлены о душевных заболеваниях. Есть риск попасть в бесконечную карусель обследований и рецептов на таблетки, которые не избавляют вас от симптомов. Так что если вы не видите результатов лечения, но продолжаете ходить в поликлинику к неврологу, просто перестаньте откладывать визит к психиатру.',
    }
}

$(function(){
    $('.translate').click(function(){
        var lang = $(this).attr('id');
        saveLocalLang(lang);

        $('.lang').each(function(index, item){
            $(this).text(arrLang[lang][$(this).attr('key')]);
        });
    });
});

function saveLocalLang(language){
    let langs;
    if (localStorage.getItem('langs')===null){
        langs=[];
    }else{
        langs=JSON.parse(localStorage.getItem('langs'))
    }
    langs.push(language);
    localStorage.setItem('langs',JSON.stringify(langs));
}

function getLocalLang(){
    let langs;
    if (localStorage.getItem('langs')===null){
        langs=[];
    }else{
        langs=JSON.parse(localStorage.getItem('langs'))
    }
    langs.forEach(function(language){ 
        let lang = langs[langs.length - 1];

        // setTimeout(()=>{
            $('.lang').each(function(index, item){
                $(this).text(arrLang[lang][$(this).attr('key')]);
            });
        // },0)
    })
}
