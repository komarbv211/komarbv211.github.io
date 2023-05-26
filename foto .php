<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>сайт web-студії "Web-DECO"</title>
    <!--=============== JAVASCRIPT ====================-->
    <script src="js/clock1.js"></script>
    <script type="text/javascript">
        function send() {
            var valid = true;
            var elems = document.forms[0].elements;
            for (var i = 0; i < document.forms[0].length; i++) {
                if (elems[i].getAttribute('type') == 'text' ||
                    elems[i].getAttribute('type') == 'password' ||
                    elems[i].getAttribute('type') == 'email') {
                    if (elems[i].value == '') {
                        elems[i].style.border = '2px solid red';
                        valid = false;
                    }
                }
            }
            if (!valid) {
                alert('Заповніть всі поля !!!');
                return false;
            }
        }
    </script>
    <!--=============================================-->

    <style>
        .shadowtext {
            text-shadow: 1px 3px 2px white, 0 0 1em red;
            color: #210042;
            font-size: 2em;
        }
    </style>
    <script>
        window.onload = function() {
            setInterval(clockPainting, 1000);
        }
    </script>
</head>
<body background="images/bg.jpg">
    <table border="1" align="center" cellpadding="10">
        <tr>
            <td background="images/bg-3.jpg" colspan="2" height="150" align="right" hspace="5">
                <font size="5" color="Maroon">
                    <img src="images/logo.png" height=":140" width="140" align="left">
                    <h1 class="shadowtext">Cайт web-студії "Web-DECO"</h1>
                </font>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <font size="4">
                    <b>
                        <a href="index.html">Головна</a>&nbsp;&nbsp;
                        <a href="foto.html">Фотогалерея</a>&nbsp;&nbsp;
                        <a href="#">Телефони</a>&nbsp;&nbsp;
                        <a href="statistics.html">Статистика</a>&nbsp;&nbsp;
                        <a href="forma .html">Зареєстровані</a>&nbsp;&nbsp;
                    </b>
                </font>
            </td>
        </tr>
        <tr>
            <td width="30%" valign="top">
                <center><canvas id="canvas" height="120" width="120"></canvas></center>
                <hr>
                <font size="5" color="navy">
                    <h2>Новини</h2>
                </font>
                <font size="5">
                    <ul>
                        <li><a href="#">Сайт будівельної компанії</a></li>
                        <li><a href="#">Сайт ТМ "Новашкола"</a></li>
                        <li><a href="#">Редизайн сайту classno.com.ua</a></li>
                        <li><a href="#">Розробка CMG для Metro Cash&Carry</a></li>
                        <li><a href="#">Сайт-візитка дизайнера інтерфейсів</a></li><br>
                        <p align="right"><a href="#">інші...</a></p>
                    </ul>
                </font>
                <hr>
                <h1 align="center"><font color="green">Реєстрація</font></h1>
                <form action="forma.php" method="post" onsubmit="return send();">
                    <table align="center" bgcolor="#ccc">
                        <tr>
                            <td><font color="green">Прізвище</font>:</td>
                            <td><input type="text" size="10" maxlength="20" name="name2"></td>
                        </tr>
                        <tr>
                            <td><font color="green">ім'я</font>:</td>
                            <td><input type="text" size="10" maxlength="20" name="name1"></td>
                        </tr>
                        <tr>
                            <td><font color="green">E-Mail</font>:</td>
                            <td><input type="email" size="10" maxlength="20" name="email"></td>
                        </tr>
                        <tr>
                            <td><font color="green">Пароль</font>:</td>
                            <td><input type="password" size="10" maxlength="20" name="password"></td>
                        </tr>
                    </table>
                    <p align="center">
                        <input type="submit" value="Зареєструватись">
                        <input type="reset" value="Очистити">
                    </p>
                </form>
                <hr>
            </td>
            <td width="70%">
                <h1 align="center">Фотогалерея</h1>
                <?php
                // Функція для видалення зайвих файлів (включаючи поточний і батьківський каталоги)
                // також можна додати перевірку на розширення, якщо файли не є зображеннями
                function excess($files)
                {
                    $result = array();
                    for ($i = 0; $i < count($files); ++$i) {
                        if ($files[$i] != '.' && $files[$i] != '..') {
                            $result[] = $files[$i];
                        }
                    }
                    return $result;
                }

                // Шлях до каталогу зображень
                $dir = "pic";

                // Отримуємо список файлів у цьому каталозі
                $files = scandir($dir);

                // Видаляємо зайві файли
                $files = excess($files);
                ?>
                <?php
                for ($i = 0; $i < count($files); $i++) {
                ?>
                    <img src="<?php echo $dir. "/" . $files[$i] ?>" alt="" width="350" height="250" hspace="5" vspace="7" border="5" onclick="this.classList.toggle('big')" />
                    <?php if (($i + 1) % 4 == 0) { ?>
                        <br/>
                    <?php }
                } ?>
                
            </td>
        </tr>
        <tr>
            <td background="images/bg-3.jpg" colspan="2" valign="middle" height="90">
                <font size="4">Сайт розробив "Komar A."</font>
            </td>
        </tr>
    </table>
</body>
</html>
