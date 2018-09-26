<?php
/**
 * Контроллер главной страницы
 */

//подключаем модели
include_once '../models/CategoriesModel.php';
include_once '../models/ProductsModel.php';


function testAction(){
    echo 'IndexConttoller.php > testAction';
}
/**
 * Формирование главной страницы сайта
 * @param object $smarty
 */
function indexAction($smarty, $db){

    $rsCatigories = getAllMainCatsWithChildren($db);//$rs-means record set
    $rsProducts = getLastProducts($db, 16);

    $smarty->assign('pageTitle', 'Главная страница');
    $smarty->assign('rsCategories', $rsCatigories);// инициализировали свойство для категорий меню
    $smarty->assign('rsProducts', $rsProducts);// инициализировали свойство для товаров меню


    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'index');
    loadTemplate($smarty, 'footer');
}

