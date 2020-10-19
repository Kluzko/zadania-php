<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php


  $noweLiczby = array();
  $liczby = array();

  for ($i = 20; $i >= 5; $i--) {
    $liczby[] = $i;
  }
  foreach ($liczby as $liczba) {
    if ($liczba % 2 == 0) {
      $liczbyPodzilne = $liczba + 100;
      $noweLiczby[] = $liczbyPodzilne;
    } else if ($liczba % 2 != 0) {
      $noweLiczby[] = $liczba;
    }
  }

  $wartoscDo700 = 0;
  $suma = 0;

  foreach ($noweLiczby as $liczba) {
    if ($suma <= 700) {
      $suma += $liczba;
      $wartoscDo700++;
    }
  }
  echo 'Nalezy zsumowac : ' . $wartoscDo700 . "<br>";



  ?>
</body>

</html>