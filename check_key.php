<?php
$db = new SQLite3("../database/keys.db");

$key = $_GET["key"] ?? "";

$query = $db->prepare("SELECT expiration FROM keys WHERE key = :key");
$query->bindValue(":key", $key, SQLITE3_TEXT);
$result = $query->execute();
$row = $result->fetchArray();

if ($row && time() < $row["expiration"]) {
    echo "Ключ действителен";
} else {
    echo "Ключ не найден или истёк";
}
?>
