<html>
<head> <title> Сведения о прользователях сайта </title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" /></head>
<body>
<?php
define ("HOST", "localhost");
define ("USER", "f0612229_students");
define ("PASS", "12345");
define ("DB", "f0612229_users");

$link = @mysqli_connect(HOST, USER, PASS, DB) or die ('Не получилось из-за @mysqli_connect :(');
 mysqlI_query($link, 'SET NAMES UTF-8'); // тип кодировки
 // подключение к базе данных:
 mysqlI_select_db($link, "f0612229_users") or die("Нет такой таблицы!");

?>
</body> </html>
<h2>Зарегистрированные пользователи:</h2>
<table border="1">
<tr>
<th> Имя </th> <th> E-mail </th>
<th> Редактировать </th> <th> Уничтожить </th> </tr>
<?php
$result=mysqli_query($link, "SELECT * FROM user"); // запрос на выборку сведений о пользователях
while ($row=mysqli_fetch_array($result)){// для каждой строки из запроса
echo "<tr>";
echo "<td>" . $row['user_name'] . "</td>";
echo "<td>" . $row['user_e_mail'] . "</td>";
echo "<td><a href='edit.php?id=" . $row['id_user']
. "'>Редактировать</a></td>"; // запуск скрипта для редактирования
echo "<td><a href='delete.php?id=" . $row['id_user']
. "'>Удалить</a></td>"; // запуск скрипта для удаления записи
echo "</tr>";
}
print "</table>";
$num_rows = mysqli_num_rows($result); // число записей в таблице БД
print("<P>Всего пользователей: $num_rows </p>");
?>
<p> <a href="new.php"> Добавить пользователя </a>