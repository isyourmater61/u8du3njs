<?php
$db = new SQLite3("../database/keys.db");

$keys = [
    "KEY_negr",
    "KEY_snow",
    "KEY_nigr",
    "Key_dsa"
];

foreach ($keys as $key) {
    $query = $db->prepare("INSERT INTO keys (key, ip, timestamp) VALUES (:key, NULL, NULL)");
    $query->bindValue(":key", $key, SQLITE3_TEXT);
    $query->execute();
}

echo "Ключи добавлены!";
?>
