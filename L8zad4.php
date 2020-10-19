<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Zadadnie nr 4</title>
</head>

<body>
  <?php
  $tablica[0] = "Marek";
  $tablica[1] = "Arek";
  $tablica[2] = "Franek";
  $tablica[3] = "Filip";
  $tablica[4] = "Adam";
  $tablica[5] = "Kasia";
  $tablica[6] = "Basia";


  echo "<ul>";
  for ($i = 0; $i <= 6; $i++) {
    $elem_talicy = strlen($tablica[$i]);

    echo "<li>" . "Ilosc znakow w elem " . $i . " to : " . $elem_talicy . "<br>" . "</li>";
    echo "<li>" . "Suma to " . ($elem_talicy * $i)  . "</li>";
  }
  echo "</ul>";


  ?>
</body>

</html>