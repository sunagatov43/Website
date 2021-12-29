<?php
define ("HOST", "localhost");
define ("USER", "f0612229_students");
define ("PASS", "12345");
define ("DB", "f0612229_users");

$link = @mysqli_connect(HOST, USER, PASS, DB) or die ('Не получилось из-за @mysqli_connect :(');
 mysqlI_query($link, 'SET NAMES UTF-8'); // тип кодировки
 // подключение к базе данных:
 mysqlI_select_db($link, "f0612229_users") or die("Нет такой таблицы!");
$lang=mysqli_query($link,"set names 'utf8'");
$query="SELECT * from user";
$result=mysqli_query($link,$query);
$zapros="DELETE FROM user WHERE id_user=" . $_GET['id'];
mysqli_query($link,$zapros);
header("Location: index.php");
exit;
?>