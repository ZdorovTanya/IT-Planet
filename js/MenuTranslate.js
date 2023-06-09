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
