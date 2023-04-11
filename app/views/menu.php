
<!-- общая оболочка шапки меню -->
        <header id="header" class="header">
            <!-- ограничивающий контейнер -->
            <div class="header_container _container">
               <nav class="header_menu">
                    <ul class="menu_list">
                        <li class="menu_item"> 
                            <a href="" class="menu_link">Форум</a>
                        </li>
                        <li class="menu_item">
                            <a href="" class="menu_link">Тесты</a>
                        </li>
                        <li class="menu_item">
                            <a href="" class="menu_link">Консультации</a>
                        </li>
                        <li class="menu_item">
                            <a href="" class="menu_link">Самопомощь</a>
                        </li>
                        <li class="menu_item">
                            <img src="/images/avtorisation.svg" alt="">
                            <a href="#popup" class="menu_link">
                                <?
                                    //вывод имени если оно есть, иначе вывод Авторизация
                                    echo Account_model::getAccountName() ?? "Авторизация";
                                ?>
                                </a>
                        </li>
                        <li class="menu_item">
                            <img src="/images/linza.svg" alt="">
                            <a href="" class="menu_link">Поиск</a>
                        </li>
                    </ul>
               </nav>
            </div>
        </header>
