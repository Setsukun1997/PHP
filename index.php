<?php 
echo "กรุณาพิมพ์โน๊ตที่ต้องการเพิ่ม: ";
$note = trim(fgets(STDIN));
file_put_contents("notes.txt", $note . "\n", FILE_APPEND);
echo "เพิ่มโน๊ตเรียบร้อยแล้ว!!";
?>