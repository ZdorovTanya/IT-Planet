<!-- общая оболочка шапки меню -->
<header id="header" class="header">
    <!-- ограничивающий контейнер -->
    <div class="_container">
        <nav>
            <ul class="menu_list">
                <li class="menu_item"> 
                    <a href="/main/" class="menu_link lang" key="main-pages">Главная</a>
                </li>
                <li class="menu_item"> 
                    <a href="/forum/" class="menu_link lang" key="forum-pages">Форум</a>
                </li>
                <li class="menu_item">
                    <a href="/test/" class="menu_link lang" key="tests">Тесты</a>
                </li>
                <li class="menu_item">
                    <a href="/consultation/" class="menu_link lang" key="doctors">Консультации</a>
                </li>
                <li class="menu_item">
                    <a href="/self-help/" class="menu_link lang" key="self-help">Самопомощь</a>
                </li>
                <li class="menu_item">

                    <?
                        $name = $_SESSION["accName"] ?? null;

                        if (!isset($name))
                            echo '<a href="/registration/" class="menu_link"><img src="/images/avtorisation.svg" alt="">Авторизация</a>';
                        else 
                            echo '<a href="/account/" class="menu_link"><img src="/images/avtorisation.svg" alt="">'.$name.'</a>';
                    ?>

                </li>
                <li class="menu_item_lang_en">
                    <button id="en" class="translate">
                        <img src="/images/flag-for-united-kingdom-svgrepo-com.svg" alt="" width="30px" height="30px">
                    </button>
                </li>
                <li class="menu_item_lang_ru">
                    <button id="ru" class="translate">
                        <img src="/images/flag-for-russia-svgrepo-com.svg" alt="" width="30px" height="30px">
                    </button>
                </li>
            </ul>
        </nav>
    </div>
</header>