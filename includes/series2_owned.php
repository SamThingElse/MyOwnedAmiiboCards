<?php
error_reporting(0);
$db = new mysqli('localhost', 'change_me', 'change_me', 'change_me');
$db->set_charset('utf8');

print_r ($db->connect_error);

if ($db->connect_error) {
    die('Sorry - gerade gibt es ein Problem');
}

$erg = $db->query("SELECT * FROM cards WHERE series = 2 AND owned = 1");

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
    echo '</tr>';
}

?>