<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>課題</title>
</head>
<body>
  <p>
    <?php
     $products=["名前"=>"玉ねぎ","値段"=>"200","産地"=>"北海道"];
      foreach($products as $product=>$value) {
       echo "{$product}:{$value}<br>";
      }
    ?>
  </p>
</body>
</html>