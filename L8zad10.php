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
  $noweLiczby = array();
  foreach ($liczby as $liczba) {
    // Sprawdzamy czy liczby sa podzielne przez 2 
    if ($liczba % 2 == 0) {
      $liczbyPodzilne = $liczba + 100;
      $noweLiczby[] = $liczbyPodzilne;
      // Sprawdzamy czy liczby nie sa podzielne przez 2 
    } else if ($liczba % 2 != 0) {
      $noweLiczby[] = $liczba;
    }
  }
  // Wpysujemy liczby z tabeli "noweLiczby"
  foreach ($noweLiczby as $liczba) {
    echo $liczba . "<br>";
  }

  ?>
</body>

</html>