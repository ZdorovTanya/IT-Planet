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
            <div class="popup__content">
                
                <div class="popup__header">
                    <a href="/login/" class="entrance">Вход</a>
                    <a href="/registration/" class="registration active">Регистрация</a>
                </div>

                <div class="popup__middle__2">
                    <form method="post" action="/registration/register">
                        <div class="input__row">
                            <label for="UserName"></label>
                            <input id="UserName" type="text" name="name" placeholder="Введите Ваше имя/ник">
                        </div>

                        <div class="input__row">
                            <label for="UserAge"></label>
                            <input id="UserAge" type="text" name ="birth" placeholder="Дата Вашего рождения">
                        </div>
                        
                        <div class="input__row">
                            <label for="UserSex"></label>
                                <input id="UserSex" type="text" name="sex" placeholder="Укажите Ваш пол">
                        </div>

                        <div class="input__row">
                            <label for="UserTarget"></label>
                                <input id="UserTarget" type="text" name="goal" placeholder="Опишите Вашу цель">
                        </div>
                      

                        <div class="input__row">
                            <label for="UserProblem"></label>
                            <input id="UserProblem" type="text" name="problem" placeholder="Опишите Вашу проблему">
                        </div>

                        <div class="input__row">
                            <label for="UserEmail"><img src="/images/headForPopup.svg" alt=""></label>
                            <input id="UserEmail" type="email" name="email" placeholder="Введите Email">
                        </div>

                        <div class="input__row">
                            <label for="UserPassword"><img src="/images/lockForPopup.svg" alt=""></label>
                            <input id="UserPassword" type="password" name="password" placeholder="Введите пароль">
                        </div>

                        <div class="input__row">
                            <label for="UserPassword"><img src="/images/lockForPopup.svg" alt=""></label>
                            <input id="UserPassword" type="password" name="checkpassword" placeholder="Подтвердите пароль">
                        </div>
 
                        <div class="text">
                            * Любую информацию, которую вы посчитаете личной, Вы сможете скрыть в профиле.
                        </div>

                        <button type="submit">Войти</button>

                    </form>



                </div>

                
                <div class="popup__footer">
                </div>

            </div>
            
        </div>
    </div>
</body>
</html>
