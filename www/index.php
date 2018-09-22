<?php
include_once '../config/config.php'; //приложили файл с константами
include_once '../library/mainFunctions.php';//заинклюдили файл с общими функциями

// определяем с каким контроллером будем работать
$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';

//определяем с какой функцией будем работать (какой Экшен)
$actionName = isset($_GET['action']) ? $_GET['action'] : 'Index';

loadPage($controllerName, $actionName);
