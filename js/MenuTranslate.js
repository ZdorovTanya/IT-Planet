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

        // -------------------self-help----------------
        'self-help-text':'If you recognize that there is a problem, then you are already half way to solving it. “Self-help” contains the necessary material to start the fight against the disease. Here you can find links to useful sources and reputable psychologists, get acquainted with the symptoms of the disease and their possible causes, read useful articles on a topic that interests you, and simply distract yourself from eating disorders in difficult times.',
        
        'useful-sources-title':'Useful sources',
        'useful-sources-text':'In this part, we have collected videos and other information resources that are directly or indirectly related to the topic of eating disorders and can be a starting point in the fight against the disease.',

        'useful-sources-tg':'Useful telegram channels',
        'useful-sources-tg-text':'In this block, we have collected telegram channels for you that can be useful in recovering from eating disorders. In them you can find not only information about eating disorders, but also interesting psychological channels, which will also contribute to the achievement of sustainable mental health.',

        'tasks':'Tasks',
        'tasks-description':'These practical tasks are aimed at visualizing ones own condition, helping to identify possible causes of the disease and building the right strategy to combat it.',

        'task1':'Task 1: What are you tired of in RPP?',
        'task1-text':'Put a notepad in front of you and try to write down in detail all the negative things that you experience because of an eating disorder. It can be body aversion, bullying from friends and family, or eating problems. Do not romanticize eating disorder, the more bad things you remember, the better.',

        'task2':'Task 2: Think about your relationship with food as a child.',
        'task2-text':'What food was your favorite as a child, and what did you hate, do you have food rituals and family habits? If your family had food bans, did they apply to your favorite foods? Have you ever had to hide your favorite food? Perhaps you heard similar phrases as a child? - You wont go anywhere until you finish your meal / sweets only after eating; - Do not cry, baby, hold the candy, eat; - A girl is supposed to be slim and eat portions like a bird.',
    
        'task3':'Task 3: Write your rules, rituals, prohibitions related to food.',
        'task3-text':'If you have foods that you do not allow yourself to eat, write down each of them. Any restrictions in the diet provoke stress and lead to breakdowns in the same products, and do not forget that excluding a whole category of products without a doctors prescription, you can provoke a deficiency of macro and microelements, which will adversely affect health. Write what methods of weight loss you have tried. These can be various diets or life hacks from the Internet, for example, advice on what to eat from blue dishes, because they supposedly discourage appetite or eat in front of a mirror, preferably with small appliances. The more prohibitions and rules you write down, the better.',

        'task4':'Task 4: Do you have food that you "break down".',
        'task4-text':'The longer you indulge in certain categories of products, the more desirable they become. Write down all the foods that you do not allow yourself to eat and for which you experience "breakdowns". If you yourself set a ban on certain categories of products, without a doctors prescription for medical reasons, then you should gradually include them back in your diet. At the beginning, you may want to eat only those foods that were previously banned, this is normal if you gain weight, when your body realizes that no one else will take this product from it and you can always eat it, then your attitude to once-forbidden products are being normalized.',

        'task5':'Task 5: Write down your own reasons for losing weight.',
        'task5-text':'Often the desire to be slimmer comes from outside. It can be beauty standards imposed by the media or generally accepted norms that we are taught from childhood to fit in. Not everyone can meet beauty standards, everyone has their own physical characteristics and genetic predispositions to one or another type of figure, so it is important to understand your own desire to be slimmer and whether they exist at all. Remember that you need to lose weight not in order to love yourself, but out of great love for yourself.',

        'task6':'Task 6: Before whom are you ashamed of your appearance.',
        'task6-text':'Do you blame yourself for your body? Are there people in front of whom you are ashamed of your appearance? These may be relatives who reproached you for the imperfection of your figure, classmates who teased you or friends who said that you looked worse. Write those people in front of whom you are ashamed, try to remember the words that they told you? Are you still offended by them? Whose opinion is really important to you and why? Are you ready to change your body to please someone else?',

        'task7':'Task 7: What were the pros and cons in your pursuit of the body.',
        'task7-text':'Faced with an eating disorder, it may seem that the world begins to crumble, that life loses its colors and nothing good remains in everyday life. But you should not be so categorical, yes, an eating disorder noticeably changes the usual schedule of life, however, you should find positive aspects even where they seemed impossible. Think about the good things that eating disorder has brought into your life? Perhaps you fell in love with playing sports or became close to a person who happened to be there in a difficult moment for you. List the pros and cons of your eating disorder.',
        
        'task8':'Task 8: What does your disease look like?',
        'task8-text':'We all heard at least once in our lives about the "Rorschach spot" test, where everyone saw what the subconscious was telling him. Imagine what your RPP looks like, its shape, color, size, whether it is animated or not. Try to separate your representation of eating habits from the way it is presented in the culture. If you see him in a meadow with daisies, then this is wonderful.',
        
        'task9':'Task 9: How do I see life without eating disorders.',
        'task9-text':'Most often, the RPP is of a long-term nature, it happens that you no longer remember what your life was like without it. How does the day go for people whose thoughts are not immersed in eternal thoughts about food, diet planning, calorie counting and energy expenditure in training? Write how you see your life without eating disorders? Describe your ideal daily routine. Are there many items related to food?',

        'task10':'Task 10: Your goals that are not related to the body.',
        'task10-text':'People who have experienced an eating disorder shift their entire focus to food, their bodies, and introspection. The rest of life passes by, no other problems matter anymore, and life goals that are not related to the body fade into the background. What are your goals right now? How many of them are not related to the body or the relationship with food? Try to pay more attention to what is happening in your life. Think about how much you are wasting by devoting all your time and energy to thoughts related to food?',
        
        'task11':'Task 11: Your ideal flaws.',
        'task11-text':'Many tend to look for imperfections in themselves and in their figure, but who said that they should not be? Owners of curly hair tend to straighten them, girls with straight hair do a perm. Some people with a gap between their teeth turn to the dentist to remove it, and someone does it as their highlight. Fashion is cyclical and changeable, you should not chase after every new breath of it. Try to look at yourself with new eyes. Try to find the positive sides in your "shortcomings", which you think you have You may be, because it is they who make us unique and unrepeatable. And remember, all felt-tip pens are different in taste and color, you should not change for the sake of someone and meet other peoples standards.',

        'task12':'Task 12: Circles of Satisfaction.',
        'task12-text':'The essence of the task is to visually, with the help of diagrams, display your needs. It is necessary to estimate how much in percentage terms you are occupied by certain responsibilities. For example: in the diagram there will definitely be a section of sleep, work, study. It is important to understand what percentage of the entire chart is food and training? How much of your day is spent in eating? If you remember events from previous years, display them on another chart. How do you see your recovery chart? Do you have activities with which you can replace part of the time that was devoted to eating, try to replace some of the free time with them?',
    
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

        // -------------------self-help----------------
        'self-help-text':'Если Вы осознали наличие проблемы, то Вы уже на половине пути к ее решению. “Самопомощь” хранит в себе необходимый материал, для начала борьбы с заболеванием. Тут Вы можете найти ссылки на полезные источники и авторитетных психологов, ознакомиться с симптомами болезни и их возможными причинами, прочитать полезные статьи по интересующей Вас теме и просто отвлечься от РПП в сложные минуты.',
       
        'useful-sources-title':'Полезные источники',
        'useful-sources-text':'В этой части мы собрали видео и другие информационные ресуры, которые прямо или косвенно связаны с темой расстройств пищевого поведения и могут стать отправной точкой в борьбе с заболеванием.',

        'useful-sources-tg':'Полезные телеграмм каналы',
        'useful-sources-tg-text':'В данном блоке мы собрали для Вас телеграм каналы, которые могут быть полезны в восстановлении от РПП. В них Вы сможете найти не только информацию об РПП, но и интересные психологические каналы, которую также будут способствовать достижению устойчивого ментального здоровья.',

        'tasks':'Задания',
        'tasks-description':'Данные практические задания направлены на визуализацию собственного состояния, помогают выделить для себя возможные причины заболевания и выстроить правильную стратегию по борьбе с ним.',

        'task1':'Задание 1: От чего вы устали в РПП?',
        'task1-text':'Положите перед собой блокнот и постарайтесь подробно прописать все негативные моменты, с которыми вы сталкиваетесь из-за РПП. Это может быть неприятие своего тела, буллинг со стороны знакомых и родных или проблемы, связанные с употреблением пищи. Не романтизируйте РПП, чем больше плохого Вы вспомните, тем лучше.',

        'task2':'Задание 2: Вспомните какие отношения с едой были в Вашем детстве.',
        'task2-text':'Какая еда у Вас была любимой в детсве, а какую вы на дух не переносили, есть ли у вас ритуалы, связанные с едой и семейные привычки? Если в Вашей семье были запреты на еду, распространялись ли они на Ваши любимые продукты? Приходилось ли Вам прятать любимую еду? Возможно Вам приходилось слышать подобные фразы в детстве? - Пока не доешь, никуда не пойдешь / сладкое только после еды; - Не плачь деточка, держи конфетку, поешь; - Девочке положено быть стройной и есть порции как у птички.',

        'task3':'Задание 3: Напишите Ваши правила, ритуалы, запреты, связанные с едой.',
        'task3-text':'Если у Вас есть продукты, которые Вы не позволяете себе есть, пропишите каждый из них. Любые ограничения в рационе провоцируют стресс и приводят к срывам на эти же продукты, также не стоит забывать, что исключая целую категорию продуктов без назначения врачей Вы можете спровоцировать дефицит макро и микроэлементов, что погубно отразится на здоровье. Напишите, какие пособы похудения Вы пробовали. Это могут быть различные диеты или лайфхаки из интернета, например советы о том, что нужно есть из посуды синего цвета, потому что та, якобы, отбивает аппетит или есть перед зеркалом, желательно маленькими приборами. Чем больше запретов и правил Вы пропишете, тем лучше.',

        'task4':'Задание 4: Есть ли у Вас еда, на которую Вы “срываетесь”.',
        'task4-text':'Чем дольше вы не позволяете себе те или иные категории продуктов, тем более желанными они становятся. Пропишите Все продукты, которые вы непозволяете себя употреблять в пищу и на которые у Вас происходят "срывы". Если Вы сами поставили перед собой запрет на те или иные категории продуктов, без назначения врача по медицинским показаниям, то стоит постепенно обратно включать их в свой рацион. В начале Вам может хотется есть только те продукты, которые раньше были под запретом, это нормально если Вы наберете вес, когда Ваш организм поймет, что этот продукт у него больше никто не заберет и Вы всегда можете его употребить в пищу, то ваше отношение к некогда запретным продуктам нормализуется.',

        'task5':'Задание 5: Пропишите собственные причины для похудения.',
        'task5-text':'Зачастую стремление быть стройнее исходит из вне. Это могут быть навязанные в СМИ стандарты красоты или общепринятые нормы, в которые нас с детсва учат вписываться. Не все могут соответсвовать стандартам красоты, у всех свои физические особенности и генетические предрасположенности к тому или иному типу фигуры, поэтому важно понимать собственные желание быть стройнее и есть ли они вообще. Помните, что худеть нужно не для того, чтобы полюбить себя, а из большой любви к себе.',

        'task6':'Задание 6: Перед кем Вам стыдно за свой внешний вид.',
        'task6-text':'Вините ли Вы себя за Ваше тело? Есть ли те, перед кем Вам стыдно за свой внешний вид? Это могут быть родственники, которые упрекали Вас в несовершенстве Вашей фигуры, Одноклассники, которые Вас дразнили или друзья, которые говорили, что Вы выглядете хуже. Напишите тех людей, перед кем Вам стыдно, попробуйте впомнить слова, которые они Вам говорили? Обижены ли Вы на них до сих пор? Чье мнение Вам действительно важно и почему? Готовы ли Вы менять свое тело в угоду кому-то другому?',

        'task7':'Задание 7: Какие плюсы и минусы были в Вашей погони за телом.',
        'task7-text':'Столкнувшись с РПП может показаться, что мир начинает рушиться, что жизнь теряет краски и ничего хорошего в буднях не остается. Но не стоит быть столь категоричными, да, расстройство пищевого поведения заметно меняет привычное расписание жизни, однако, следует находить положительные стороны даже там, где их казалось быть не может. Подумайте, что хорошего принесло в вашу жизнь РПП? Возможно Вы полюбили занятия спортом или сблизились к человеком, который оказался рядом в трудную для вас минуту. Перечислите плюсы и минусы Вашего расстройства пищевого поведения.',
        
        'task8':'Задание 8: Как выглядит Ваша болезнь? ',
        'task8-text':'Все мы хоть раз в жизни слышали о тесте "пятна Роршаха", где каждый видел то, что говорила ему подсознание. Представте как выглядит Ваше РПП, его форму, цвет размер, одушевленное ли оно или нет. Попробуйте отделить свое представлени РПП от того, каким оно представлено в культуре. Если Вы его видете лугом с ромашками, то это прекрасно.',
        
        'task9':'Задание 9: Какой я вижу жизнь без РПП.',
        'task9-text':'Чаще всего РПП носит долгоиграющий характер, бывает так, что ты уже и не помнишь, какая у тебя была жизнь без него. Как проходит день у людей, чьи мысли не погружены в вечные размышления о еде, планировании рациона, подсчете калорий и энергозатратах на тренировках? Напишите как Вы видете свою жизнь без РПП? Опишите распорядок своего идельного дня. Много ли там пуктов, связанных с едой?',

        'task10':'Задание 10: Ваши цели, которые не связаны с телом.',
        'task10-text':'Люди, которые столкнулись с РПП смещают весь свой фокус внимания на еду, свое тело и самокопание. Остальная жизнь проходит мимо, никакие другие проблемы больше не имеют значения, а жизненные цели, не связанные с телом уходят на второй план. Подумайте, какие цели стоят перед Вами прямо сейчас? Многие ли из них не связаны с телой или с отношениями с едой? Постарайтесь уделять больше внимания тому, что происходит в Вашей жизни. Подумайте сколько Вы опускаете уделяя все Ваше время и силы на мысли, связанные с едой?',
        
        'task11':'Задание 11: Ваши идеальные недостатки.',
        'task11-text':'Многие склонны искать в себе и в своей фигуре несовершенства, но кто сказал, что их быть не должно? Обладательницы кудрявых волос - стремятся их выпрямить, девушки с прямыми - делают химическую завивку. Некоторые люди с щербинкой между зубами - обращаются к стоматологу, чтобы ее убрать, а кто-то делает это своей изюминкой. Мода циклична и изменчива, не стоит гнаться за каждым ее новым дуновением. Постарайтесь посмотреть на себя новым взглядом. Попробуйте найти положительные стороны в своих "недостатках", которые как Вам кажется у Вас могут быть, ведь именно они делают нас уникальными и неповторимыми. И помните, на вкус и цвет все фломастеры разные, не стоит менятся ради кого-то и соответствовать чужим стандартам.',

        'task12':'Задание 12: Круги удовлетворения.',
        'task12-text':'Суть задания заключается в том, чтобы визульно, с помощью диаграмм, отобразить свои потребности. Нужно оценить сколько в процентном соотношении у Вам занимают те или иные обязанности. Например: в диаграмме обязательно будет секция сна, работы, учебы. Важно понять, какой процент от всей диаграммы занимает еда и тренировки? Сколько процентов вашего дня уходит к РПП? Если Вы помните событие прошлых лет, отобразите их на другой диаграмме. Какой Вы видите диаграмму Вашего восстановления? Есть ли у Вас занятия, которыми Вы можете заместить часть времени, которое было посвящено РПП, попробуйте заместить ими часть освободившегося времени?',
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
