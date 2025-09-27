<?php
$lineToDelete = $_POST["line"];
$notes = file("notes.txt");
unset($notes[$lineToDelete]);
file_put_contents("notes.txt", implode("", $notes));
echo " ลบบรรทัดที่ " . ($lineToDelete + 1) . "เรียบร้อยแล้ว!";
?>