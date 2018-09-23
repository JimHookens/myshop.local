<?php
/**
 * Контроллер главной страницы
 */


function testAction(){
    echo 'IndexConttoller.php > testAction';
}
/**
 * Формирование главной страницы сайта
 * @param object $smarty
 */
function indexAction($smarty){
    
    $smarty->assign('pageTitle', 'Главная страница');

    loadTemplate($smarty, 'index');
}

