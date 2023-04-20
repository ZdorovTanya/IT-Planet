<!-- общая оболочка шапки меню -->
<header id="header" class="header">
    <!-- ограничивающий контейнер -->
    <div class="_container">
        <nav>
            <ul class="menu_list">
                <li class="menu_item"> 
                    <a href="/main/" class="menu_link">Главная</a>
                </li>
                <li class="menu_item"> 
                    <a href="/forum/" class="menu_link">Форум</a>
                </li>
                <li class="menu_item">
                    <a href="/test/" class="menu_link">Тесты</a>
                </li>
                <li class="menu_item">
                    <a href="/consultation/" class="menu_link">Консультации</a>
                </li>
                <li class="menu_item">
                    <a href="/self-help/" class="menu_link">Самопомощь</a>
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
            </ul>
        </nav>
    </div>
</header>