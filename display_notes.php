<?php
include "functions.php";

foreach (get_notes() as $note) {
    echo "<div class='note'>";
    echo "<h2>" . $note['title'] . "</h2>";
    echo "<textarea readonly>" . $note['content'] . "</textarea>";
    echo "<p>" . $note['date_created'] . "</p>";
    echo "</div>";
}
?>