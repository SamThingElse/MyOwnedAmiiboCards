<?php
error_reporting(0);
require './include/config/sql-config.inc.php';

print_r ($db->connect_error);

if ($db->connect_error) {
    die('Sorry - gerade gibt es ein Problem');
}

$erg = $db->query("SELECT * FROM cards WHERE series = 1");

$datensatz = $erg->fetch_all(MYSQLI_ASSOC);

foreach($datensatz as $zeile) {

    echo '<a href="';
    echo $zeile['wikiurl'];
    echo '">';
    echo '<img src="' . $zeile['pic_inject'] . '">';
    echo '</a>';
    echo "&nbsp;";
    echo "&nbsp;";
    
}

?>