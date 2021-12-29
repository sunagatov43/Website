<?php
// Подключаем библиотеку RedBeanPHP
require "rb.php";

// Подключаемся к БД
R::setup( 'mysql:host=localhost;dbname=f0612229_users', 'f0612229_students','12345');

// Проверка подключения к БД
if(!R::testConnection()) die('No DB connection!');

session_start(); // Создаем сессию для авторизации

?>
