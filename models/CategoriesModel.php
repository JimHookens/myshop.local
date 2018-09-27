<?php
/**
 * Модель для таблицы категорий (categories)
 */

/**
 * Получить дочернии категории для категории $catId
 *
 * @param integer $catId ID категории
 * @param mysql_linc $db ссылка на базу данных
 *
 * @return assoc_array $rs массив дочерних категорий
 */

function getChildrenForCat($catId, $db) {
    $sql = "SELECT *
            FROM categories
            WHERE parent_id = '{$catId}'";
    $rs = mysqli_query($db, $sql);

    return createSmartyRsArray($rs);
}

/**
 * Получить главные категории с привязками дочерних
 *
 * @param mysql_linc $db ссылка на базу данных
 * @return assoc_array массив категорий
 */
function getAllMainCatsWithChildren($db) {
    $sql = 'SELECT *
            FROM categories
            WHERE parent_id = 0';
    $result = mysqli_query($db, $sql);

    $smartyRs = array();
    while ($row = mysqli_fetch_assoc($result)) {//построчно преобразуем выборку SELECT $result
        //в массив $row и прокручиваем его
        $rsChildren = getChildrenForCat($row['id'], $db);// выбираем все подкатегории как массив
        if ($rsChildren) {
            $row['children'] = $rsChildren;//и записываем в $row в массив с ключем children
        }

        $smartyRs[] = $row;//записываем сформированный ряд в  массив $smartyRs
    }
    return $smartyRs;
}

function getCategoryById($catId, $db){
    $catId = intval($catId);
    $sql = "SELECT * FROM categories WHERE `id`= '$catId'";
    $rs = mysqli_query($db, $sql);
    return mysqli_fetch_assoc($rs);//возвращает асоциативный массив из рекорд сета
}

