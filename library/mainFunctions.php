<?php
/**
 * Файел с общими для всех страниц сайта функциями
 */

/**
 * Формирование запрашиваемой страницы
 * @param string $controllerName название контроллера
 * @param string $actionName название функции обработки страницы
 */
function loadPage($smarty, $controllerName, $actionName = 'index') {
    //подключаем требуемый контроллер
    include_once PathPrefix . $controllerName . PathPostfix;
    $function = $actionName . 'Action';//формируем название вызываемой функции
    $function($smarty);//запускаем вызванную функцию и передаем объект $smarty
}
/**
 * Загрузка шаблона
 * @param object $smarty объект шаблонизатора
 * @param string  $templateName название файла шаблона
 */

function loadTemplate($smarty, $templateName){

    $smarty->display($templateName.TempletePostfix);

}
/**
 * Функция отладки. Останавливает работу программы выводя значение переменной
 * $value
 *
 * @param variant $value переменная для вывода ее на страницу
 */
function d($value = null, $die = 1) {
    echo 'MyDebug:<br><pre>';
    print_r($value);
    echo '</pre>';

    if ($die) die;
}
