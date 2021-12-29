<?php
// Подключение к базе данных:
define ("HOST", "localhost");
define ("USER", "f0612229_students");
define ("PASS", "12345");
define ("DB", "f0612229_users");

$link = @mysqli_connect(HOST, USER, PASS, DB) or die ('Не получилось из-за @mysqli_connect :(');
 mysqlI_query($link, 'SET NAMES UTF-8'); // тип кодировки
 // подключение к базе данных:
 mysqlI_select_db($link, "f0612229_users") or die("Нет такой таблицы!");
mysqli_set_charset($link, "utf8");
$name=$GET["name"];
// Строка запроса на добавление записи в таблицу:
$sql_add = "INSERT INTO user SET user_name='" . $_GET['name']
."', user_login='".$_GET['login']."', user_password='"
.$_GET['password']."', user_e_mail='".$_GET['e_mail'].
"', user_info='".$_GET['info']. "'";
$result = mysqli_query($link, $sql_add); // Выполнение запроса
if (mysqli_affected_rows($link)>0) // если нет ошибок при выполнении запроса
 { print "<p>Спасибо, вы зарегистрированы в базе данных.";
 print "<p><a href=\"index.php\"> Вернуться к списку
пользователей </a>"; }
 else { print "Ошибка сохранения. <a href=\"index.php\">
Вернуться к списку пользователей </a>";
echo $_GET["e_mail"];
 echo "Error: " . $sql_add . "<br>" . mysqli_error($db); }
?>