<?php
/**
 * Модель для таблицы категорий (categories)
 */

function getAllMainCatsWithChildren($db) {
    $sql = 'SELECT *
            FROM categories
            WHERE parent_id = 0';
    $result = mysqli_query($db, $sql);

    $smartyRs = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $smartyRs[] = $row;
    }
    return $smartyRs;
}