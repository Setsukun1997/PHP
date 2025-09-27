<?php 
$lineIndex = $_POST["line"];
$notes = file("notes.txt");
$currentNote = trim((string)$notes[$lineIndex]);
?>
<!DOCTYPE html>
<html>
  <head><title>แก้ไขโน๊ต</title></head>
  <body>
    <h2> แก้ไขโน๊ต</h2>
    <form action="update.php" method="post">
      <input type="hidden" name="line" value="<?php echo $lineIndex; ?>">
      <textarea name="note" rows="4" cols="40"><?php echo htmlspecialchars($currentNote); ?></textarea><br>
      <button type="submit">บันทึกการแก้ไข</button>
    </form>
  </body>
</html