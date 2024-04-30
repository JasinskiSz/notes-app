<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>AllNote</title>
</head>

<body>
    <div id="form">
        <form action="add_note.php" method="post">
            <!-- title -->
            <input placeholder="Title" type="text" name="title" id="title-input" required><br>
            <!-- content of the note -->
            <textarea placeholder="Description" name="content" id="content-input" cols="30" rows="10"
                required></textarea><br>
            <!-- TODO: category -->

            <!-- submit button -->
            <button type="submit">Add note</button>
        </form>
    </div>
    <main>
        <div id="above-notes">
            <h1>All Notes</h1>
            <form action="filter_notes.php">
                <input type="text" name="title" placeholder="Title">
                <button type="submit">Filter</button>
            </form>
        </div>

        <div id="notes">
            <?php
            include "display_notes.php";
            ?>
        </div>
    </main>
</body>

</html>