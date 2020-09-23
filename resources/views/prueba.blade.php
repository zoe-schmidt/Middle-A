<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p>Información país</p>
    <?php foreach ($paises as $pais): ?>
      <p><?php
        $pais[nombre]?>
      </p>
    <?php endforeach; ?>
  </body>
</html>
