<?php
function get_notes() {
    require "db_connection.php";

    $sql = "SELECT * FROM notes";

    $result = $connection->query($sql);

    $connection->close();
    return $result;
}

function get_notes_by_title($title) {
    require "db_connection.php";

    $param = "%$title%";

    $sql = "SELECT * FROM notes WHERE title LIKE ?";

    $statement = $connection->prepare($sql);
    $statement->bind_param("s", $param);

    if (!$statement->execute()) {
        die("Execute failed: (" . $statement->errno . ") " . $statement->error);
    }

    $result = $statement->get_result();

    $statement->close();
    $connection->close();
    return $result;
}

?>