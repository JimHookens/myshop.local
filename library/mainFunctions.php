<?php
/**
 * Файел с общими для всех страниц сайта функциями
 */

/**
 * Формирование запрашиваемой страницы
 * @param string $controllerName название контроллера
 * @param string $actionName название функции обработки страницы
 */
function loadPage($smarty, $controllerName, $db, $actionName = 'index') {
    //подключаем требуемый контроллер
    include_once PathPrefix . $controllerName . PathPostfix;
    $function = $actionName . 'Action';//формируем название вызываемой функции
    $function($smarty, $db);//запускаем вызванную функцию и передаем db и объект $smarty
}
/**
 * Загрузка шаблона
 * @param object $smarty объект шаблонизатора
 * @param string  $templateName название файла шаблона
 */

function loadTemplate($smarty, $templateName){

    $smarty->display($templateName.TemplatePostfix);

}
/**
 * Функция отладки. Останавливает работу программы выводя значение переменной
 * $value
 *
 * @param variant $value переменная для вывода ее на страницу
 */
function d($value = null, $die = 1) {
    echo '<br>MyDebug:<br><pre>';
    print_r($value);
    echo '</pre>';
    echo "Type of returns is: ".gettype($value);
    if ($die) die;
}

/**
 * Преобазование результата работы функции выборки в ассоциативный массив
 *
 * @param sql_query_recordSet $rs набор строк - результат работы SELECT
 *
 * @return assoc_array $arrRs
 */
function createSmartyRsArray($rs) {
    if(!$rs) return false;

    $arrRs = array();
    while ($row = mysqli_fetch_assoc($rs)) {
        $arrRs[] = $row;
    }
    return $arrRs;
}