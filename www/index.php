<?php
include_once '../config/config.php'; //инициализация настроек (константы, пути,смарти и т.п)
include_once '../config/db.php'; // инициализация базы данных
include_once '../library/mainFunctions.php';//оснавные (общии) функции

// определяем с каким контроллером будем работать
$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';
//определяем с какой функцией будем работать (какой Экшен)
$actionName = isset($_GET['action']) ? $_GET['action'] : 'Index';



loadPage($smarty, $controllerName, $db, $actionName);
