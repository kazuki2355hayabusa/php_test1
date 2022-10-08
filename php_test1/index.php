<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP 問題①</title>
</head>
<body>
  <?php 
  echo "<table border='2' style='border-collapse: collapse'";

  for($i = 1;$i < 10;$i++){
    echo "<tr>";
     for($j = 1;$j < 10;$j++){
      echo "<td>".$i * $j."</td>";
    }
    echo "<tr>";
    echo "<br>";
  }

  echo "</table>";

?>
</body>
</html>