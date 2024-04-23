<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AllNote</title>
</head>
<body>
    <div>
        <form action="add_note.php" method="post">
            <!-- title -->
            <input type="text" name="title" id="title-input">
            <!-- content of the note -->
            <textarea name="content" id="content-input" cols="30" rows="10"></textarea>
            <!-- TODO: category -->
    
            <!-- submit button -->
            <button type="submit">Add Note</button>
        </form>
    </div>
</body>
</html>