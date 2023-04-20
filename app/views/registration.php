<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>

    <link rel="stylesheet" href="/css/popup.css">

    <link rel="icon" href="/images/favicon.svg" type="image/svg+xml">
</head>
<body>

    <div class="popup" id="popup_registration">
        <div class="popup__body">
            <form class="popup__form form-popup" action="/registration/register" method="post">
                
                <div class="form-popup__header">
                    <a href="/login/" class="entrance">Вход</a>
                    <a href="/registration/" class="registration active">Регистрация</a>
                </div>

                <div class="form-popup__middle">
                    <div class="form-popup__input-row">
                        <input class="form-popup__input" type="text" id="UserName" name="name" placeholder="Введите Ваше имя/ник">
                    </div>

                    <div class="form-popup__input-row">
                        <input class="form-popup__input" type="text" id="UserAge" name ="birth" placeholder="Дата Вашего рождения">
                    </div>
                    
                    <div class="form-popup__input-row">
                        <input class="form-popup__input" type="text" id="UserSex" name="sex" placeholder="Укажите Ваш пол">
                    </div>

                    <div class="form-popup__input-row">
                        <input class="form-popup__input" type="text" id="UserTarget" name="goal" placeholder="Опишите Вашу цель">
                    </div>
                    

                    <div class="form-popup__input-row">
                        <input class="form-popup__input" type="text" id="UserProblem" name="problem" placeholder="Опишите Вашу проблему">
                    </div>

                    <div class="form-popup__input-row">
                        <input class="form-popup__input _with-icon" type="email" id="UserEmail" name="email" placeholder="Введите Email">
                    </div>

                    <div class="form-popup__input-row">
                        <input class="form-popup__input _with-icon" type="password" id="UserPassword" name="password" placeholder="Введите пароль">
                    </div>

                    <div class="form-popup__input-row">
                        <input class="form-popup__input _with-icon" type="password" id="UserPassword" name="checkpassword" placeholder="Подтвердите пароль">
                    </div>

                    <div class="text">
                        * Любую информацию, которую Вы посчитаете личной, можно будет скрыть в профиле.
                    </div>
                </div>

                <button class="form-popup__submit-btn" type="submit">Войти</button>
            </form>
            <!-- /popup__form -->
        </div>
        <!-- /popup__body -->
    </div>
    <!-- /popup -->
</body>
</html>
