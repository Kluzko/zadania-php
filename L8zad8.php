<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Zadadnie nr 8 </title>
</head>

<body>
  <?php
  $digits = array();
  $podzielnePrzez3 = 0;
  $podzielnePrzez5 = 0;
  for ($i = 10; $i > 9 && $i <= 30; $i++) {

    if ($i % 3 == 0 || $i % 5 == 0) {
      $digits[] = $i;
    }

    if ($i % 3 == 0) {
      $podzielnePrzez3++;
      echo "<br>";
      echo "nr " . $i . " jest podzielny przez 3";
    }

    if ($i % 5 == 0) {
      $podzielnePrzez5++;
      echo "<br>";
      echo "nr " . $i . " jest podzielny przez 5";
    }
  }
  echo "<br>";
  echo "<br>";

  echo "Ilosc liczb podzielnych przez 3 :" . $podzielnePrzez3 . "<br>";
  echo "Ilosc liczb podzielnych przez 5 :" . $podzielnePrzez5 . "<br>";



  ?>
</body>

</html>