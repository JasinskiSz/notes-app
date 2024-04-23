<?php
include "db_connection.php";

$title = $_POST['title'];
$content = $_POST['content'];

$insert_note_sql = "INSERT INTO notes (title, content, date_created) VALUES (?, ?, NOW())";

$statement = $connection->prepare($insert_note_sql);

if (!$statement) {
    die("Prepare failed: " . $connection->error);
}

$statement->bind_param("ss", $title, $content);

if (!$statement->execute()) {
    die("Execute failed: " . $statement->error);
}

echo "Note added successfully!";

$statement->close();
$connection->close();
?>