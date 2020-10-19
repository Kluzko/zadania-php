<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Zadadnie nr 3</title>
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
  for ($i = 0; $i < 7; $i++) {
    if ($i % 2 == 0) {
      echo $tablica[$i] . "<br>";
    }
  }


  ?>
</body>

</html>