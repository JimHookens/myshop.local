<?php

/*
 * CategoryController
 *
 * Контроллер страницы категорий (/category/1)
 */

//подключаем модели
include_once '../models/CategoriesModel.php';
include_once '../models/ProductsModel.php';

/**
 * Формирование страницы категорий
 * @param object $smarty
 */
function indexAction($smarty, $db) {
    $catId = isset($_GET['id']) ? $_GET['id'] : null;
    if ($catId == NULL)
        exit();

    $rsCatsChildren = NULL;
    $rsProducts = NULL;
    $rsCatigories = getAllMainCatsWithChildren($db); //$rs-means record set
    $rsCategory = getCategoryById($catId, $db);

    //если категория главная, то показываем дочернии категории
    //если подкатегория то показываем товар
    if ($rsCategory['parent_id'] == 0) {
        $rsCatsChildren = getChildrenForCat($catId, $db);
    } else {
        $rsProducts = getProductByCat($db, $catId);
    }
    $smarty->assign('rsCategories', $rsCatigories); // инициализировали свойство для категорий меню
    $smarty->assign('rsCategory', $rsCategory); // инициализировали свойство для вывода категории по id
    $smarty->assign('rsCatsChildren', $rsCatsChildren); // инициализировали свойство для вывода подкатегории по id
    $smarty->assign('rsProducts', $rsProducts); // инициализировали свойство для вывода товаров
    $smarty->assign('pageTitle', 'Товары категории' . $rsCategory['name']);
    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'category');
    loadTemplate($smarty, 'footer');
}
