<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Zadadnie nr 5</title>
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
  echo "<ol type='A'>";
  for ($i = 0; $i <= 6; $i++) {


    echo "<li>" . "<p>" . $tablica[$i] . "</p>" . "</li>";
  }
  echo "</ol>";
  echo "<br>";
  $tablica[0] = "Ela";
  $tablica[1] = "Basia";

  echo "<ol>";
  for ($i = 0; $i <= 6; $i++) {


    echo "<li>" . "<p>" . $tablica[$i] . "</p>" . "</li>";
  }
  echo "</ol>";



  ?>
</body>

</html>