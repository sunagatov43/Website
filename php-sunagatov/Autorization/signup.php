<?php
$title="Форма регистрации"; // название формы
require "db.php"; // подключаем файл для соединения с БД

session_start();
// Создаем переменную для сбора данных от пользователя по методу POST
$data = $_POST;
// Пользователь нажимает на кнопку "Зарегистрировать" и код начинает выполняться
if(isset($data['do_signup'])) {
        // Регистрируем
        // Создаем массив для сбора ошибок
	$errors = array();
	// Проводим проверки
        // trim — удаляет пробелы (или другие символы) из начала и конца строки
	if(trim($data['login']) == '') {
		$errors[] = "Введите логин!";
	}
	if($data['password'] == '') {

		$errors[] = "Введите пароль";
	}
	if($data['password_2'] != $data['password']) {

		$errors[] = "Повторный пароль введен не верно!";
	}

$data['type']=(int) $data['type'];
	if(($data['type'] < 1) || ($data['type'] > 2) || $data['type'] == '') {
		$errors[] = "В поле тип доступа должно быть введено 1 или 2!";
	}

         // функция mb_strlen - получает длину строки
        // Если логин будет меньше 5 символов и больше 90, то выйдет ошибка
	if(mb_strlen($data['login']) < 5 || mb_strlen($data['login']) > 90) {
	    $errors[] = "Недопустимая длина логина";

    }

    if (mb_strlen($data['password']) < 2 || mb_strlen($data['password']) > 32){

	    $errors[] = "Недопустимая длина пароля (от 2 до 32 символов)";

    }

	// Проверка на уникальность логина
	if(R::count('users', "login = ?", array($data['login'])) > 0) {

		$errors[] = "Пользователь с таким логином существует!";
	}

	if(empty($errors)) {

		// Все проверено, регистрируем
		// добавляем в таблицу записи
		$user = R::dispense('users');
				$user->login = $data['login'];
				$user->type = $data['type'];

				// Хешируем пароль
				$user->password = md5($data['password']);

				// Сохраняем таблицу
				R::store($user);

        echo '<div style="color: green; ">Вы успешно зарегистрированы! Можно <a href="login.php">авторизоваться</a>.</div><hr>';

	} else {
                // array_shift() извлекает первое значение массива array и возвращает его, сокращая размер array на один элемент.
		echo '<div style="color: red; ">' . array_shift($errors). '</div><hr>';
	}
}

?>

<div class="container mt-4">
		<div class="row">
			<div class="col">
	   <!-- Форма регистрации -->
		<h2>Форма регистрации</h2>
		<form action="signup.php" method="post">
			<input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
			<input type="password" class="form-control" name="password" id="password" placeholder="Введите пароль"><br>
			<input type="password" class="form-control" name="password_2" id="password_2" placeholder="Повторите пароль"><br>
			<input type="int" class="form-control" name="type" id="type" placeholder="Введите тип доступа"><br>
			<button class="btn btn-success" name="do_signup" type="submit">Зарегистрировать</button>
		</form>
		<br>
		<p>Вернуться на <a href="index.php">главную</a>.</p>
			</div>
		</div>
	</div>
