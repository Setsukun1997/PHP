<?php
$note = trim($_POST["note"]);
file_put_contents("notes.txt", $note . "\n", FILE_APPEND);
echo "Save notes done!";
?>