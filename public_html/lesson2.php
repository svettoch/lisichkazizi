<!DOCTYPE html>
<html lang="ru">
    <html>
        <head>
            <link href="css/style.css" rel="stylesheet">
            <meta charset="UTF-8">
            <title>Формы</title>
            <meta name="description" content = "Описание страницы">
            <meta name = "keywords" content = "Никому не нужные ключевые слова">
        </head>
<body>
    <h1>Оглавление</h1>
    <nav>
        <ul>
            <li><a href = "login.php">Войти</a></li>
            <li><a href = "intropage.php">Регистрация</a></li>
            <li><a href = "lesson1.php">Урок 1</a></li>
            <li><a href = "lesson2.php">Формы</a></li>
        </ul>
        
    </nav>
    <h1>Изучаем стили</h1>
    <p>Стили работаю через страивание (когда стили в теге)</p>
    <p>Еще через вложения когда стили прописываются через head</p>
    <p class="for_p">Связывание. Это видимо через таблицы стилей.</p>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <form action = "script_on_form.php" method = "post" autocomplete = "on">
        <!--// атрибуты форм 
        autocomplete = "on | off"
        enctype = "multipart/form-data"
        name = "" Имя формы    -->
        <fieldset> 
            <legend>
                Текстовые поля форм
            </legend>
            <div>
            <label for = "text">Однострочное текстовое поле</label>
            <input type = "text" id = "text">
            </div>
            <div>
            <label for = "E-mail">E-mail</label>
            <input type = "E-mail" id = "E-mail">
            </div>
            <div>
            <label for = "url">url</label>
            <input type = "url" id = "url">
            </div>
            <div>
            <label for = "password">password</label>
            <input type = "password" id = "password">
            </div>
            <div>
            <label for = "search">search</label>
            <input type = "search" id = "search">
            </div>
        </fieldset>
        <fieldset>
            <legend>Переключатели - радио и чекбоксы</legend>
            <label><input type = "radio">1</label>
            <label><input type = "radio">2</label>
            <legend>радио группы</legend>
            <label><input name = "name" type = "radio">1</label>
            <label><input name = "name" type = "radio">2</label>
            
        </fieldset>
            <fieldset>
            <legend>Чекбоксы одинокие</legend>
            <label><input type = "checkbox">1</label>
            <label><input type = "checkbox">2</label>
            <legend>Чеки не одиночные</legend>
            <label><input name = "checkbox[]" type = "radio">1</label>  <!--квадратные скобки - значит, что передается в массив-->
            <label><input name = "checkbox[]" type = "radio">2</label>
            </fieldset>

            
            <fieldset>
            <legend>Кнопки</legend>
            <label for = "file"></label>
            <input type = "file">
            <legend>Для загрузки нескольких файлов</legend>
            <label for = "multifile"></label>
            <input type = "file" multiple accept = "image/*">
            </fieldset>
            
                        
            
            <fieldset>
            <legend>Для загрузки файлов</legend>
            <input type = "button" value = "Просто кнопка">
            <input type = "submit" value = "Отправлялка">
            <input type = "reset" value = "Сбросить поля">
            <input type = "image" src = "" alt = "Описание изображения">
            </fieldset>
            
            <fieldset>
            <legend>Кнопки тегом button. Принимает те же типы.</legend>
            <button type = "submit"><b>Кнопка</b></button>
            </fieldset>
            
            <fieldset>
            <legend>Многострочное текстовое поле.</legend>
            <label for = "textarea"></label>
            <textarea id = "textarea" placeholder = " resize: none - свойство css, которое не позволяет пользщователю менять размер
            autofocus - активное поле при перезагрузке страницы
            readonly" cols = "20" rows = "4"></textarea>
           
            </fieldset>
            <fieldset>
                Раскрывающийся список    
                <select size = "2">
                    <optgroup label = "Группа">
                    <option value = "1">
                        Элемент списка
                    </option>
                    <option value = "2">
                        Элемент списка
                    </option>
                    <option value = "3">
                        Элемент списка
                    </option>
                    <option  selected value = "4">
                        Элемент списка
                    </option>
                    </optgroup>
                    
                                        <optgroup label = "Группа222">
                    <option value = "1">
                        Элемент списка
                    </option>
                    <option value = "2">
                        Элемент списка
                    </option>
                    <option value = "3">
                        Элемент списка
                    </option>
                    <option  selected value = "4">
                        Элемент списка
                    </option>
                    </optgroup>
                    

                    
                </select>
                
            </fieldset>
    </form>
    
    
    
    
    
    
    
    
    
    
    
    
 

    


</body>
</html>