<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Zadadnie nr 7 </title>
</head>

<body>
  <?php
  $digits = array();
  for ($i = 10; $i > 9 && $i <= 30; $i++) {

    if ($i % 3 == 0 || $i % 5 == 0) {
      $digits[] = $i;
    }
  }

  echo "<pre>";
  print_r($digits);
  echo "</pre>";



  ?>
</body>

</html>