<!DOCTYPE html>
<htm>
<head>
    <meta charset="utf-8">
        <title>сайт web-студії "Web-DECO"</title>
        <!--=============== JAVASCRIPT ====================-->
        <script src="js/clock1.js"></script>
        <script type="text/javascript">
            function send()
            {
                var valid = true;
                var elems = document.forms[0].elements;
                for(var i=0; i<document.forms[0].length;i++)
                {
                    if(elems[i].getAtribute('type')=='text' ||
                    elems[i].getAtribute('type')=='password' ||
                    elems[i].getAtribute('type')=='email' )
                    {
                        if(elems[i].value == '')
                        {
                            elems[i].style.border = '2px solid red';
                            valid=false;
                        }
                       
                    }
                }
                if(!valid)
                {
                    alert('Заповніть всі поля !!!');
                    return false;
                }
            }
        </script>
        <!--=============================================-->

        <style>
            .shadowtext
            {
                text-shadow: 1px 3px 2px white, 0 0 lem red;
                color: #210042;
                font-size: 2em;
            }
        </style>
<script>
    window.onload = function()
    {
        setInterval(clockPainting, 1000);
    }
</script>
</head>
<body background="images/bg.jpg">
  <table border="1" align="center" cellpadding="10">
    <tr>
        <td background="images/bg-3.jpg" colspan="2" height="150" align="right" hspace="5"> 
          <font size="5" color="Maroon"><h1 class="shadowtext">сайт web-студії "Web-DECO"</h1></font>
        </td>
    </tr>
    <tr>
        <td colspan="2">
          <font size="4"><b>
            <a href="#">Головна</a>&nbsp;&nbsp;
            <a href="#">Фотогалерея</a>&nbsp;&nbsp;
            <a href="#">Телефони</a>&nbsp;&nbsp;
            <a href="#">Статистика</a>&nbsp;&nbsp;
            <a href="#">Зареєстровані</a>&nbsp;&nbsp;
            </b></font>
        </td>
    </tr>
    <tr>
        <td width="30%" valign="top">
<center><canvas id="canvas" height="120" width="120"></canvas></center>
<hr>  
            <font size="5" color="navy"><h2>Новини</h2></font>
            <font size="5">
                <ul>
                    <li><a href="#">Сайт будівельної компанії</a></li>
                    <li><a href="#">Сайт ТМ "Новашкола"</a></li>
                    <li><a href="#">Редизайн сайту classno.com.ua</a></li>
                    <li><a href="#">Розробка CMG для Metro Cash&Carry</a></li>
                    <li><a href="#">Сайт-візитка дизайнера інтерфейсів</a></li><br>
                    <p aling="right"><a href="#">інші...</a></p>
                </ul>
            </font>
            <hr>
            <h1 align="center"><font color="green">Реєстрація</font></h1>
            <form action="forma.php" method="post" onsubmit="return send();">
            <table align="center" bgcolor="#ccc">
            <tr>
                 <td><font color="green">Прізвище</font>: </td>
                 <td><input type="text" size="10" maxlength="20" name="name2"> </td>
            </tr>
            <tr>
                <td><font color="green">ім'я</font>: </td>
                <td><input type="text" size="10" maxlength="20" name="name1"> </td>
            </tr>
            <tr>
                <td><font color="green">E-Mail</font>: </td>
                <td><input type="email" size="10" maxlength="20" name="email"> </td>
            </tr>
            <tr>
                <td><font color="green">Пароль</font>: </td>
                <td><input type="password" size="10" maxlength="20" name="password"> </td>
            </tr>
            </table>
            <p align="center">
                <input type="submit" value="Зареєструватись">
                <input type="reset" value="Очистити">
            </p>
            </form>
            <hr>    
        </td>
        <td widtch="70%" background="images/bg.jpg" valing='top'> <font size="5">
            <h1 align="center" border="1" width="600">
                <tr>
                    <td align="center"><b>Прізвище</b></td>
                    <td align="center"><b>Імя</b></td>
                    <td align="center"><b>E-mail</b></td>
                    <td align="center"><b>Пароль</b></td>
                </tr>
                <?php
                $data = file("baza.txt");
                foreach ($data as $line) {
                    $trs = explode(";",$line);
                    echo '<td>'.$trs[0].'</td>';
                    echo '<td>'.$trs[1].'</td>';
                    echo '<td>'.$trs[2].'</td>';
                    echo '<td>'.$trs[3].'</td>';
                    echo '</tr>';
                }
                ?>







    <td width="70%">
    <?php
$st = $_POST['name2'].";".$_POST['name1'].";".$_POST['email'].";".$_POST['password']."\n";
$fp = fopen("baza.txt","a");
$test = fwrite($fp,$st);
echo "<h1 align='center'>".$_POST['name2']." ".$_POST['name1']."<br>Дякуємо за реєстрацію !</h1>";
echo "<h2 align='center' > на Ваш E-Mail : ".$_POST['email']."<br> відправлено повідомлення.</br>";
?>	  
        </td>
    </tr>
    <tr>
        <td background="images/bg-3.jpg" colspan="2" valign="middle" height="90">
            <font size="4">Сайт розробив "Komar"</font>
        </td>
    </tr>
</table>
</body>
</html>