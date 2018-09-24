<?php

/**
 * Инициализация подключения к БД
 */

$dblocation = "127.0.0.1";
$dbuser = "root";
$dbpasword = "";
$dbname = "myshop";


// соединяемся с БД
$db = mysqli_connect($dblocation, $dbuser, $dbpasword, $dbname);
if (!$db) {
    echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
    echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}


//устанавливаем кодировку по умолчанию для текущего соединения
$db->set_charset("utf8");


