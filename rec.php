<?php 

$db = new SQLite3('t.db');

$res = $db->query('SELECT * FROM t');

while ($row = $res->fetchArray()) {
    echo "{$row[1]} {$row[2]} {$row[3]} \n";
}

?>

