<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Новая статья</title>


    <link rel="stylesheet" href="/css/menu.css">
    <link rel="stylesheet" href="/css/forum.css">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@100;200;300;400&display=swap" rel="stylesheet">
</head>
<body>
    <div class="wrapper">

        <?
            include("app/views/menu.php");
        ?>

        <div class="subjform">

            <form action="/forum/saveSubj" method="post">

                <label for="subject1">Анорексия</label>
                <input type="checkbox" name="subjects[]" id="subject1" value="1">

                <label for="subject2">Булимия</label>
                <input type="checkbox" name="subjects[]" id="subject2" value="2">
                
                <label for="subject3">Оторексия</label>
                <input type="checkbox" name="subjects[]" id="subject3" value="3">
                
                <label for="subject4">Компульсивное переедание</label>
                <input type="checkbox" name="subjects[]" id="subject4" value="4">
                
                <label for="subject5">Другое</label>
                <input type="checkbox" name="subjects[]" id="subject5" value="5">


                <label for="title">Название</label>
                <input type="text" name="title" id="title">
                
                <label for="maintext">Текст</label>
                <input type="text" name="maintext" id="maintext">

                <button type="submit">Готово!</button>

            </form>

        </div>



    </div>
</body>
</html>