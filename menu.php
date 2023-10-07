<?php
function display_menu() {
    echo '<ul>';
    for ($i = 1; $i <= 5; $i++) {
        echo '<li><a href="ex' . $i . '.php">Exercice ' . $i . '</a></li>';
    }
    echo '<li><a href="exercice3.php">Exercice 3 du cours</a></li>';
    echo '</ul>';
}

?>
