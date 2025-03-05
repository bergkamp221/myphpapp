<?php
$dsn = 'mysql:host=db;dbname=my_database;charset=utf8';
$user = 'my_user';
$password = 'my_pass';

try {
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Успешно подключились к базе данных!";
} catch (PDOException $e) {
    echo "Ошибка подключения: " . $e->getMessage();
}
