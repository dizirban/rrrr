<?php
$title="Главная страница"; // название формы
require "db.php"; // подключаем файл для соединения с БД
?>

<div class="container mt-4">
    <div class="row">
        <div class="col">
            <center>
                <h1>Добро пожаловать на наш сайт!</h1>
            </center>
        </div>
    </div>
</div>

<!-- Если авторизован выведет приветствие -->
Привет, <?php echo $_SESSION['logged_user']->name; ?> <?php echo $_SESSION['logged_user']->family; ?></br>

<!-- Пользователь может нажать выйти для выхода из системы -->
<a href="logout.php">Выйти</a><br> <!-- файл logout.php создадим ниже -->

<!-- Если пользователь не авторизован выведет ссылки на авторизацию и регистрацию -->
<a href="kab.php">Авторизоваться</a><br>
<a href="signup.php">Регистрация</a><br>
<a href="index.php">Главная</a><br>


