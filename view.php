<!DOCTYPE html>
<html>
  <head>
    <title>โน๊ตทั้งหมด</title>
  </head>
  <body>
    <h2> รายการโน๊ตทั้งหมด </h2>
    <ul>
      <?php
      $notes = file("notes.txt");
      foreach ($notes as $index => $line ) {
        $lineText = htmlspecialchars(trim($line));
        echo "<li>$lineText
        <form action='delete.php' method='post' style='display:inline;'>
        <input type='hidden' name='line' value='$index'>
        <button type='submit'>ลบ</button>
        </form>
        <form action='edit.php' method='post' style='display:inline;'>
        <input type='hidden' name='line' value='$index'>
       <button type='submit'>แก้ไข</button>
       </form>     
        </li>";
      }
      ?>
    </ul>
  </body>
</html>
