<?php
$comp = 1;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>php part3 ex4</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <?php
  while( $comp <= 10){ ?>
    <p><?= $comp ?></p>
    <?php
    $comp += ($comp/2);
  }
  ?>

  <!--  <?php for($comp = 1; $comp <= 10; $comp += ($comp/2)) { ?>
  <p><?= $comp ?></p>
<?php } ?> -->
</body>
</html>
