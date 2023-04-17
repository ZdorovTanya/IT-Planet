<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход</title>

    <link rel="stylesheet" href="/css/popup.css">

    <link rel="icon" href="/images/favicon.svg" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@100;200;300;400&display=swap" rel="stylesheet">
</head>
<body>
        <!-- попап регистрации и входа -->
        <div id="popup" class="popup">
        <div class="popup__body">
            <div class="popup__contetnt">
                
                <div class="popup__title">
                    <a href="/login/" class="entrance">Вход</a>
                    <a href="/registration/" class="registration">Регистрация</a>
                </div>

                <form method="post" action="/login/login">

                    <div class="popup__middle">
                        
                            <div class="input__row">
                                <label for="UserEmail"><img src="/images/headForPopup.svg" alt=""></label>
                                <input id="UserEmail" type="email" name="email" placeholder="Введите Email">
                            </div>

                            <div class="input__row">
                                <label for="UserPassword"><img src="/images/lockForPopup.svg" alt=""></label>
                                <input id="UserPassword" type="password" name="password" placeholder="Введите пароль">
                            </div>

                            <div class="checkbox__row">
                                <label class="rememberMe">
                                    <input type="checkbox" id="save" name="saveMe"> 
                                    Запомнить меня
                                </label>
                                <a href="#" class="forgot">Забыли пароль?</a>
                            </div>

                            <!-- <button type="submit">Войти</button> -->
    
                        
                    </div>

                    
                    <div class="popup__footer">
                        <button type="submit">Войти</button>
                    </div>
                    
                </form>
            </div>
            
        </div>
    </div>

</body>
</html>