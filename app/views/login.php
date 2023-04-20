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
    <div class="popup" id="popup">
        <div class="popup__body">
            <form class="popup__form form-popup" action="/login/login" method="post">
                
                <div class="form-popup__header">
                    <a href="/login/" class="entrance active">Вход</a>
                    <a href="/registration/" class="registration">Регистрация</a>
                </div>

                <div class="form-popup__middle">
                    <div class="form-popup__input-row">
                        <input class="form-popup__input _with-icon" type="email" id="UserEmail" name="email" placeholder="Введите email">
                    </div>

                    <div class="form-popup__input-row">
                        <input class="form-popup__input _with-icon" type="password" id="UserPassword" name="password" placeholder="Введите пароль">
                    </div>
                    
                    <div class="form-popup__checkbox-row">
                        <label class="rememberMe">
                            <input id="save" type="checkbox" name="saveMe"> 
                            Запомнить меня
                        </label>
                        <a class="forgot" href="#">Забыли пароль?</a>
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
