<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Zadanie 10</title>
</head>

<body>
  <?php
  $liczby = array();

  for ($i = 20; $i >= 5; $i--) {
    $liczby[] = $i;
    echo "<br>";
    echo $i;
  }
  echo "<br>";
  echo "<br>";
  echo "<br>";
  $noweLiczby =  $liczby;
  foreach ($noweLiczby as $liczba) {
    if ($liczba % 2 == 0) {
      $liczbyPodzilne = $liczba + 100;
      echo $liczbyPodzilne . "<br>";
    } else if ($liczba % 2 != 0) {
      echo $liczba . "<br>";
    }
  }

  ?>
</body>

</html>