<?php
include "functions.php";

if (isset($_GET['title'])) {
    foreach (get_notes_by_title($_GET['title']) as $note) {
        echo "<div class='note'>";
        echo "<h2>" . $note['title'] . "</h2>";
        echo "<textarea readonly>" . $note['content'] . "</textarea>";
        echo "<p>" . $note['date_created'] . "</p>";
        echo "</div>";
    }
}
?>