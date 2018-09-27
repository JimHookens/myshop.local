<?php
/**
 * Модель для таблицы продукции (products)
 */

/**
 * Получаем последние добавленные товары
 *
 * @param mysql_linc $db ссылка на базу данных $db
 * @param integer $limit количество выводимых продуктов
 *
 * @return assoc_array $rs массив последних продуктов
 */

function getLastProducts($db, $limit = null) {
    $sql = "SELECT *
            FROM `products`
            ORDER BY id DESC";
    if ($limit) {
        $sql .= " LIMIT $limit";
    }
    $rs = mysqli_query($db, $sql);
    return createSmartyRsArray($rs);
}
/**
 * Получить продукты для категории $catId
 *
 * @param mysql_linc $db ссылка на базу данных $db
 * @param integer $catId (category_id)
 *
 * @return assoc_array $rs все продукты определенной категории
 */

function getProductByCat($db, $catId){
    $catId = intval($catId);
    $sql = "SELECT *
            FROM `products`
            WHERE `category_id` = '$catId'";
    $rs = mysqli_query($db, $sql);
    return createSmartyRsArray($rs);
}