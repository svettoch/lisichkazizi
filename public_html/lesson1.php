<!DOCTYPE html>
<html lang="ru">
    <html>
        <head>
            <meta charset="UTF-8">
            <title>Главная</title>
            <meta name="description" content = "Описание страницы">
            <meta name = "keywords" content = "Никому не нужные ключевые слова">
        </head>   
    <body>
        <header id = "header">
        <a href = "#footer">footer</a>    
        </header>
<!--Комментации -->    
<h1 align = "justify">Заголовки - это всегда блочные элементы</h1>
<h2>Блочные элементы всегда занимают всю ширину!</h2>

<p>It works! Тег p - Это тоже блочный элемент!</p>
<h3>Ниже тоже блочные элементы (цитаты)</h3>
<blockquote>Это длинные цитаты</blockquote>
<q>Это короткие цитаты</q>

<h4>Списки. И это тоже блочные элементы</h4>
<ul>
    <h5>Li - это тоже блочный элемент</h5>
    <li>Маркированный</li>
</ul>
<ol>
    <li>Нумерованный</li>
</ol>
<p>атрибуты списка: type = "disc | circle | square"<br> type = "A | a | I | i | 1"<br> reversed - обратная нумерация<br> stert - число, с которого начинается нумерация</p>
<h2>Строчные элементы. Ширина строки определяется содержимым.</h2>
<b>B, конечно же, физическое выделение</b><br>
<strong>И стронг, это как бы выделение "интонации"</strong><br>
<i>Курсив в I, физическое выделение</i><br>
<em>Курсив в EM - типа интонация</em><br>
<h2>Картишки!</h2>
<img src="/image/svettsova-ekaterina.jpg" alt = "Описание">
<h2>Ссылочки</h2>
<a href = "/login.php" target = "self">Текст ссылки!</a>

    <h1>Оглавление</h1>
    <nav>
        <ul>
            <li><a href = "lesson1.php">Урок 1</a></li>
            <li></li>
        </ul>
        
    </nav>
    <h2>Куда же без таблиц-то?</h2>
    <table border = "1">
        <caption>Заголовок</caption>
            <tr>
                <th>
                    Заголовок ячейки 1
                </th>
                <th>
                    Заголовок ячейки 2
                </th>
                <tr>
                    <td>
                        Контент ячейки 1
                    </td>
                    <td>
                        Контент ячейки 2
                    </td>
                    
                </tr>
                
            </tr>
        
    </table>
    
    <footer id = "footer">
        <p>начало футера</p>
        
        <p>конец футера</p>
        <a href = "#header">Header</a>
    </footer>
    </body>
    