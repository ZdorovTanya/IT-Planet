<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход</title>

    <link rel="stylesheet" href="/css/popup.css">

    <link rel="icon" href="/images/favicon.svg" type="image/svg+xml">
</head>
<body>
    <!-- попап регистрации и входа -->
    <div id="popup" class="popup">
        <div class="popup__body">
            
            <div class="popup__header">
                <a href="/login/" class="entrance">Вход</a>
                <a href="/registration/" class="registration">Регистрация</a>
            </div>
            СДЕЛАТЬ
            <form action="/login/login" method="post">
                <div class="popup__middle">
                        <div class="input__row">
                            <label for="UserEmail"><img src="/images/headForPopup.svg" alt=""></label>
                            <input id="UserEmail" type="email" name="email" placeholder="Введите email">
                        </div>

                        <div class="input__row">
                            <label for="UserPassword"><img src="/images/lockForPopup.svg" alt=""></label>
                            <input id="UserPassword" type="password" name="password" placeholder="Введите пароль">
                        </div>

                        <div class="checkbox__row">
                            <label class="rememberMe">
                                <input id="save" type="checkbox" name="saveMe"> 
                                Запомнить меня
                            </label>
                            <a class="forgot" href="#">Забыли пароль?</a>
                        </div>
                </div>

                <div class="popup__footer">
                    <button type="submit">Войти</button>
                </div>
            </form>

        </div>
    </div>

</body>
</html>
