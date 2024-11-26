<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แสดงผลการคำนวณรูปเลขาคณิต</title>
</head>
<body>
    <h2>พื้นที่รูปสามเหลี่ยม</h2>
    <?php
      $height = $_Post['height']; 
      $width = $_Post['width'];
      $area =0.5* $height*$width;
      echo "<h3>รูปสามเหลี่ยมทีมีความสูง $height และมีความยาวฐาน $width<h3>";
      echo "<br><br>";
      echo "<h3>คำนวณพื้นที่ได้ $area ตารางหน่วย</h3>";
    ?>
</body>
</html>