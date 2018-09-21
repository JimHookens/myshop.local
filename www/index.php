<?php
// определяем с каким контроллером будем работать
$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';

echo 'Подключаемый php файл (Контроллер) = ' . $controllerName . '<br/>';

//определяем с какой функцией будем работать (какой экшен)
$actionName = isset($_GET['action']) ? $_GET['action'] : 'Index';

echo 'Функция формирующая страницу (Экшен) = ' . $actionName . '<br/>';

//подключаем требуемый контроллер
include_once '../controllers/' . $controllerName . 'Controller.php';

//формируем название вызываемой функции
$function = $actionName . 'Action';

echo 'Полное название вызываемой функции = ' . $function . '<br/>';

//вызываем требуемую функцию

$function();




