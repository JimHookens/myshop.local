<?php
/**
 * Файел с общими для всех страниц сайта функциями
 */
function loadPage($controllerName, $actionName = 'index') {
    //подключаем требуемый контроллер
    include_once PathPrefix . $controllerName . PathPostfix;
    $function = $actionName . 'Action';//формируем название вызываемой функции
    $function();//вызываем требуемую функцию
}
