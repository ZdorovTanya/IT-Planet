<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Новая статья</title>

    <link rel="stylesheet" href="/css/forum.css">

    <link rel="icon" href="/images/favicon.svg" type="image/svg+xml">
</head>
<body>
    <div class="wrapper">

        <? include("app/views/menu.php"); ?>

        <div class="subjform">
            <div class="_container">
                <div class="subjform__body">
                    <form action="/forum/saveSubj" method="post">
                        <label>
                            <input type="checkbox" name="subjects[]" id="subject1" value="1">
                            Анорексия
                        </label>

                        <label>
                            <input type="checkbox" name="subjects[]" id="subject2" value="2">
                            Булимия
                        </label>
                        
                        <label>
                            <input type="checkbox" name="subjects[]" id="subject3" value="3">
                            Оторексия
                        </label>
                        
                        <label>
                            <input type="checkbox" name="subjects[]" id="subject4" value="4">
                            Компульсивное переедание
                        </label>
                        
                        <label>
                            <input type="checkbox" name="subjects[]" id="subject5" value="5">
                            Другое
                        </label>

                        <label class="text-fields">
                            Название
                            <input type="text" name="title" id="title">
                        </label>
                        
                        <label class="text-fields">
                            Текст
                            <textarea name="maintext" id="maintext"></textarea>
                        </label>
                        <!-- <input type="text" name="maintext" id="maintext"> -->

                        <button type="submit">Готово!</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
