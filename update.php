<?php
$lineIndex = $_POST["line"];
$newNote = trim($_POST["note"]);
$notes = file("notes.txt");
$notes[$lineIndex] = $newNote . "\n";
file_put_contents("notes.txt", implode("", $notes));
echo "แก้ไขโน๊ตเรียบร้อยแล้ว!!";
?>