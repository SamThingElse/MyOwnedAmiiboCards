<?php
error_reporting(0);
require './include/config/sql-config.inc.php';
$db->set_charset('utf8');

print_r ($db->connect_error);

if ($db->connect_error) {
    die('Sorry - gerade gibt es ein Problem');
}

$erg = $db->query("SELECT * FROM cards");

$datensatz = $erg->fetch_all(MYSQLI_ASSOC);

foreach($datensatz as $zeile) {
    echo '<tr>';
    echo '<td>';
    echo '<img src="' . $zeile['pic_inject'] . '">';
    echo '</td>';

    echo '<td>'. $zeile['card_number'] . '</td>';
    echo '<td>' . $zeile['name_ger'] . '</td>';
    echo '<td>' . $zeile['name_eng'] . '</td>';
    echo '</tr>';
}

?>