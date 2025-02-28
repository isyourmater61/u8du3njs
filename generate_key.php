<?php
$db = new SQLite3("../database/keys.db"); // Проверяем правильность пути

// Запрос на получение случайного ключа
$result = $db->querySingle("SELECT key FROM keys ORDER BY RANDOM() LIMIT 1");

if ($result) {
    echo " " . $result;
} else {
    echo "Нет доступных ключей!";
}
?>
