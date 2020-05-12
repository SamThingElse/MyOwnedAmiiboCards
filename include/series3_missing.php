<?php
error_reporting(0);
require './include/config/sql-config.inc.php';
$db->set_charset('utf8');

print_r ($db->connect_error);

if ($db->connect_error) {
    die('Sorry - gerade gibt es ein Problem');
}

$erg = $db->query("SELECT * FROM cards WHERE series = 3 AND owned = 0");

$datensatz = $erg->fetch_all(MYSQLI_ASSOC);

foreach($datensatz as $zeile) {
    echo '<tr>';
    echo '<td>';
    echo '<a href="';
    echo $zeile['wikiurl'];
    echo '">';
    echo '<img src="' . $zeile['pic_inject'] . '">';
    echo '</a>';
    echo '</td>';

    echo '<td>'. $zeile['card_number'] . '</td>';
    echo '<td>' . $zeile['name_ger'] . '</td>';
    echo '<td>' . $zeile['count'] . '</td>';
    echo '</tr>';
}

?>