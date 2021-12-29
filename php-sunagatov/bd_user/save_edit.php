<html> <body>
<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
 mysqlI_query($link, 'SET NAMES UTF-8'); // тип кодировки
define ("HOST", "localhost");
define ("USER", "f0612229_students");
define ("PASS", "12345");
define ("DB", "f0612229_users");

$link = @mysqli_connect(HOST, USER, PASS, DB) or die ('Не получилось из-за @mysqli_connect :(');
 // подключение к базе данных:
 mysqlI_select_db($link, "f0612229_users") or die("Нет такой таблицы!");;
$zapros="UPDATE user SET user_name='".$_GET['name'].
"', user_login='".$_GET['login']."', user_password='"
.$_GET['password']."', user_e_mail='".$_GET['e_mail'].
"', user_info='".$_GET['info']."' WHERE id_user="
.$_GET['id'];
mysqli_query($link,$zapros);
if (mysqli_affected_rows($link)>0) {
echo 'Все сохранено. <a href="index.php"> Вернуться к списку
пользователей </a>'; }
else { echo 'Ошибка сохранения. <a href="index.php">
Вернуться к списку пользователей</a> '; }
?>
</body> </html>