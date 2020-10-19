<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Zadanie 9</title>
</head>

<body>
  <?php
  $liczby = array();
  echo "tabela";
  echo "<br>";
  for ($i = 0; $i <= 10; $i++) {
    $liczby[] = $i;
    echo "<br>";
    echo $i;
  }
  echo "<br>";
  echo "<br>";
  echo "Zmodyfikowana tabela";
  echo "<br>";
  foreach ($liczby as $liczba) {
    echo "<br>";
    echo $liczba * 2;
  }
  ?>
</body>

</html>