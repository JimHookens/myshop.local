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
